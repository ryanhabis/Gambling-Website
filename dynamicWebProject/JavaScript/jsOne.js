/*
*   local storage
*
* Reference where I learnt from
* https://www.youtube.com/watch?v=6R9SaZdyaVU&ab_channel=%7BRhymBil%7D
 */

var storedItem = localStorage.getItem("storedItem");

function save()
{
    var item = document.getElementById("input").value;
    localStorage.setItem("storedItem", item);

    document.getElementById("savedText").innerHTML="Hello " + item + " Welcome to the casino";
}

function get()
{
    localStorage.getItem("storedItem");
    document.getElementById("openedText").innerHTML= storedItem + " Was the last person logged on.";

}
/*
*  END Test local storage
 */
/*
Login onclick function
 */
// Get the modal
var modal = document.getElementById('mouseClick');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    var audio = document.getElementById("audio");
    audio.play();
}
/*
Login onclick funtion

        END
 */
/*
https://javascript.info/js-animation
animation
 */
var start = Date.now(); // remember start time

var timer = setInterval(function() {
    // how much time passed from the start?
    var timePassed = Date.now() - start;

    if (timePassed >= 10000000) {
        clearInterval(timer); // finish the animation after 2 seconds
        return;
    }

    // draw the animation at the moment timePassed
    draw(timePassed);

}, 20);

// as timePassed goes from 0 to 5000
// left gets values from 0px to 400px
function draw(timePassed) {
    astronaut.style.left = timePassed / 50 + 'px';
}

/*
* End
* */

function play() {
    var audio = document.getElementById("audio");
    audio.play();
}

/*
    Start of slide show

 */

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}



/*
*   Validation form
 */

var helpMessages = [
    "Your NAME must have at least 5 characters.", "Your EMAIL must have at least 9 characters.",
    "Your PASSWORD must have at least 9 characters, including at least 1 uppercase letter, at least 2 numbers and 1 character from '@', '#' or '_'",
    "Both Passwords must match exactly. Confirm Password field available only when valid password has been entered",
    "You must pick a country before the phone number field is enabled",
    "you Must click on a Radio Button to select Credit Cart type",
    "You must type a valid number for your Credit Card Type"
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
        document.getElementById("showPasswordValidity").innerHTML = "INVALID not great..."
    }
    else if (theStrength == 20)
    {
        document.getElementById("showPasswordValidity").className = "middling";
        document.getElementById("showPasswordValidity").innerHTML = "INVALID a bit better..."
    }
    else if (theStrength == 30)
    {
        document.getElementById("showPasswordValidity").className = "almost";
        document.getElementById("showPasswordValidity").innerHTML = "almost there..."
    }
    else if (theStrength == 40)
    {
        document.getElementById("showPasswordValidity").className = "Checked";
        document.getElementById("showPasswordValidity").innerHTML = "VALID!....."
        enableConfirmPassword();
    }
}

// ============================================= FUNCTION 4 =========================================
function disableConfirmPassword() {
    document.getElementById("yourPassword2").value = "";
    document.getElementById("yourPassword2").disabled = true;

}

// ============================================= FUNCTION 5 =========================================
function enableConfirmPassword() {
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
    /*
    !		Question can I put the password 1 and password 2 on the same if statement??
     */
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

/*
* END of validation form
 */