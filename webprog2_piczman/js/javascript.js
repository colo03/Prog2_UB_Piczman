
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 

$(function(){
  function animarBola() {
    $("#bola").animate({left: '+=93%'}, "slow")
              .animate({top: '+=70%'}, "slow")
              .animate({left: '-=93%'}, "slow")
              .animate({top: '-=70%'}, "slow");   
  }
  
  setInterval(animarBola, 0);
});
