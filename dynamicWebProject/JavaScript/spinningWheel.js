// Event Listeners
addEventListener("DOMContentLoaded", rotateRepeatedly);
document.getElementById("theButton").addEventListener("click", stopSpin);

var deg=0;

// a variable is needed for starting and ending the repeating function
var interval;

// start the repeated rotation when page loads: function runs every 100milliseconds
function rotateRepeatedly() {
    interval=setInterval(rotate, 100);
}


//	var getRandomInt;
function getRandomInt(max)
{
    return Math.floor(Math.random() * max);

}

// the rotation function
function rotate() {

    //deg=deg+1;
    if(getRandomInt(360)==360) {
        deg=0;
    }

    // rotates the image randomly
    document.getElementById("spinningImage").style.transform = "rotate(" + getRandomInt(360) + "deg)";

    // shows what degree the image is at in text.
    document.getElementById("showRotation").innerHTML = "Image rotation is " + getRandomInt(360) + " degrees.";
}

// stop the rotation
function stopSpin() {
    var session = clearInterval(interval);
}