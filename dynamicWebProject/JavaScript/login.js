var helpMessages = [
    "Your NAME must have at least 5 characters.", "Your EMAIL must have at least 9 characters.",
    "Your PASSWORD must have at least 9 characters, including at least 1 uppercase letter, at least 2 numbers and 1 character from '@', '#' or '_'",
    "Both Passwords must match exactly. Confirm Password field available only when valid password has been entered",
    "You must pick a country before the phone number field is enabled",
    "you Must click on a Radio Button to select Credit Cart type",
    "You must type a valid number for your Credit Card Type", "Type in your age. You must be over 18 to use this site"
];


// ============================================= FUNCTION 1 =========================================
function showHelp(whichFormElement)
{
    var theText = helpMessages[whichFormElement-1];
    document.getElementById("helpMessage").style.display="block";
    document.getElementById("helpMessage").innerHTML = theText;
}

// ============================================= FUNCTION 2 =========================================
function hideHelp() {
    document.getElementById("helpMessage").innerHTML="";
    document.getElementById("helpMessage").style.display = "none";
}

// ============================================= FUNCTION 3 =========================================
function passwordStrengthTest() {
    document.getElementById("showPasswordValidity").className = "empty";

    var theStrength = 0;

    var pwd= document.getElementById("yourPassword1").value;

    var pwdLength = pwd.length;

    var numUppercase = 0;

    var numNumbers = 0;

    var numSpecialChars = 0;


    // For password symbols
    for (var i=0 ; i<pwd.length; i++)
    {
        if ( (pwd.charAt(i) >= "A") && (pwd.charAt(i)<= "Z"))
        {
            numUppercase++;
        }
        if ((pwd.charAt(i) >= 0) && (pwd.charAt(i)<= 9))
        {
            numNumbers++;
        }
        if ((pwd.charAt(i) == '@') || (pwd.charAt(i)== '#'))
        {
            numSpecialChars++;
        }
    }

    if (pwdLength == 0)
    {
        document.getElementById("showPasswordValidity").innerHTML = "............";
        theStrength-=1;
    }

    // Calculation of password strength
    if (pwdLength>=9)
    {
        theStrength += 10;
    }
    if (numUppercase>0)
    {
        theStrength += 10;
    }
    if (numNumbers>1)
    {
        theStrength += 10;
    }
    if (numSpecialChars==1)
    {
        theStrength += 10;
    }

    if(theStrength==0)
    {
        document.getElementById("showPasswordValidity").className = "VeryBad";
        document.getElementById("showPasswordValidity").innerHTML = "INVALID: very bad ....";
    }
    else if (theStrength == 10)
    {
        document.getElementById("showPasswordValidity").className = "bad";
        document.getElementById("showPasswordValidity").innerHTML = "INVALID not great...";
    }
    else if (theStrength == 20)
    {
        document.getElementById("showPasswordValidity").className = "middling";
        document.getElementById("showPasswordValidity").innerHTML = "INVALID a bit better...";
    }
    else if (theStrength == 30)
    {
        document.getElementById("showPasswordValidity").className = "almost";
        document.getElementById("showPasswordValidity").innerHTML = "almost there...";
    }
    else if (theStrength == 40)
    {
        document.getElementById("showPasswordValidity").className = "Checked";
        document.getElementById("showPasswordValidity").innerHTML = "VALID!.....";
        enableConfirmPassword();
    }
}

// ============================================= FUNCTION 4 =========================================
function disableConfirmPassword() {
    document.getElementById("yourPassword2").value = "";
    document.getElementById("yourPassword2").disabled = true;

}

// ============================================= FUNCTION 5 =========================================
function enableConfirmPassword()
{
    document.getElementById("yourPassword2").disabled = false;
}

// ============================================= FUNCTION 6 =========================================
function checkConfirmPassword()
{
    if (document.getElementById("yourPassword1").value != document.getElementById("yourPassword2").value)
    {
        alert("The passwords do not match");
        document.getElementById("yourPassword2").value = "";
        document.getElementById("yourPassword2").placeholder = "Retype Password";
        document.getElementById("yourPassword2").style.backgroundColor = "orange";
        document.getElementById("showPasswordValidity").className = "veryBad";
        document.getElementById("showPasswordValidity").innerHTML = "Invalid Confirm Password";
        document.getElementById("yourPassword1").select();
    }
    else
    {
        document.getElementById("yourPassword1").style.backgroundColor = "white";
    }
}

// ============================================= FUNCTION 7 =========================================
function showInternationalDiallingCode()
{
    var codeValue = document.getElementById("yourCountry").value;

    var codeStart = codeValue.lastIndexOf("-");

    if (codeValue.length>0)
    {
        document.getElementById("showIntCode").innerHTML = " +" + codeValue.substring(codeStart+1);
        document.getElementById("yourPhoneNumber").disabled = false;
    }
    else
    {
        document.getElementById("showIntCode").innerHTML="";
        document.getElementById("yourPhoneNumber").disabled = true;

    }
}

// ============================================= FUNCTION 8 =========================================
function setCardNumberTextbox(whichCard)
{
    var minCardNumber = [4000000000000000,5100000000000000,36000000000000,3400000000000];
    var maxCardNumber = [4999999999999999,5599999999999999,38999999999999,3799999999999];
    var placeholders = ["Visa (16): 4-", "MC (16) : 51- to 55-","Diners(14): 36-, 38-", "AmEX (15) : 34-, 37-"];

    document.getElementById("yourCCNumber").value="";
    document.getElementById("yourCCNumber").disabled=false;
    document.getElementById("yourCCNumber").placeholders = placeholders[whichCard-1];
    document.getElementById("yourCCNumber").min = minCardNumber[whichCard-1];
    document.getElementById("yourCCNumber").max = maxCardNumber[whichCard-1];
}

// ============================================= FUNCTION 9 =========================================
function formCheck()
{
    if (document.getElementById("yourName").value.length < 5)
    {
        alert("There should be 5 or more characters in your name");
        document.getElementById("yourName").select();
        return false;
    }
    else if (document.getElementById("yourPassword1").value.length<9)
    {
        alert("The password is too short");
        return false;
    }
    else if (document.getElementById("yourPassword2").value.length<9)
    {
        alert("The password is too short");
        return false;
    }
    /*
    !	3700000000000 not the same as above =/= 3400000000000
     */
    else if (document.getElementById("cardAmExpress").checked == true && (document.getElementById("yourCCNumber").value>= 36000000000000 &&document.getElementById("yourCCNumber").value< 3799999999999))
    {
        alert("Your 14 - digit Diners club card number cannot start with 37-. Diners(14): 36-, 38-.");
        document.getElementById("yourCCNumber").select();
        return false;
    }
    else if (document.getElementById("cardAmExpress").checked==true && (document.getElementById("yourCCNumber").value>=3400000000000 && document.getElementById("yourCCNumber").value <=38999999999999))
    {
        alert("Your 15 - digit American Express number cannot start with 35- or 36-. It must begin with either 34- or 37-.");
        document.getElementById("yourCCNumber").select();
        return false;
    }
    else
    {
        return true;
    }

}
// ============================================= FUNCTION 10 =========================================

function checkAge() {

    if(document.getElementById("yourAge").value <= 18)
    {
        alert("You are under 18.");
    }
    else
    {
        alert("your over 18");
        disableBlur();        }
}
function disableBlur()
{
    document.getElementById("yourName").disabled = false;
    document.getElementById("yourEmail").disabled = false;
    document.getElementById("yourPassword1").disabled = false;
    document.getElementById("yourPassword2").disabled = false;
    document.getElementById("yourCountry").disabled = false;
    document.getElementById("cardAmExpress").disabled = false;
    document.getElementById("cardDiners").disabled = false;
    document.getElementById("cardMastercard").disabled = false;
    document.getElementById("cardVisa").disabled = false;
    document.getElementById("submitBtn").disabled = false;
    document.getElementById("resetBtn").disabled = false;


}