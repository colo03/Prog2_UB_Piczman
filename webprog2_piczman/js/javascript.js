$(function(){
    function animarBola() {
      $("#bola").animate({left: '+=150'})
                .animate({top: '+=250'})
                .animate({left: '-=150'}, "fast")
                .animate({top: '-=250'}, "slow");   
    }
    
    setInterval(animarBola, 1500);
  });
  
function alerta(){
  alert("Formulario enviado correctamente")
}

