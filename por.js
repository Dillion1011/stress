/** @format */


var i = 0;
var txt = "Hello! my name is Dillion.I am a front-end developer";
var speed = 200;

function myFunction() {
  var x = document.getElementById("sidena");
   var y = document.getElementById("dave");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
    y.style.width = "100%";
  }
}


function type() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(type, speed);
    }
}
  
function block() {
  var z = document.getElementById("non");
  if(z.style.display=="none"){
    z.style.display = "block";
  }
  else {
    z.style.display = "none";
  }
}