<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<label >Your Age:</label>
<input type="age" id="yourAge" name="yourAge" placeholder="You must be over 18">
<br><br>
<label>Your Name:</label>
<input type="text" id="yourName" name="yourName" placeholder="At least 5 characters" required pattern="[a-zA-Z]+" required disabled onblur><br><br>


<button onclick="formCheck()">Button</button>
<script>
    function formCheck() {

        if(document.getElementById("yourAge").value <= 18)
        {
            alert("You are under 18.");
        }
        else
        {
            alert("your over 18");
            enableConfirmPassword();        }
    }
    function enableConfirmPassword()
    {
        document.getElementById("yourName").disabled = false;
    }
</script>
</body>
</html>