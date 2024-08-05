<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
      <link rel="stylesheet" type="text/css" href="../css/style.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="../js/javascript.js"></script> 
      <title> CONTACTO  </title>
  
    </head>
    <body>
  
      <div class="topnav" id="myTopnav">
 <img src="../imagenes_videos/Monograma_prog2.png">
        <a href="..\index.html">Inicio</a>
        <a href="..\trabajos\index.html">Trabajos</a>
        <a href="#"class="active">Contacto </a>
        <a href="..\sobre_mi\index.html">Sobre mí</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
        <br><br><br>
        <h1>CONTACTO</h1>
        <hr style="width: 60%;">
        <br>
    <div class="main_contacto">
      Dejame un mensaje para que trabajemos juntos <br><br>
        <form action="valid.php" method="post" name="frm">
          <label for="pnombre" class="pnombre" >Nombre</label><br>
          <input type="Text" id="pnombre" name="nombre" required/><br>
          <label for="apellido" class ="pnombre">Apellido</label><br>
          <input type="Text" id="apellido" name="apellido" required/><br> 
          <label for ="mail" class ="pnombre">Email</label><br>
          <input type ="email" id="mail" name ="mail" required/><br>
          <p>Deja tu mensaje </p> 
          <textarea rows ="5" cols="25" class ="desc" required></textarea><br>
          <input type ="checkbox" id ="chequeo" name ="chequeo" required>
          <label for ="chequeo" class ="desc">Acepto los terminos y condiciones </label><br> 
          <input type="submit" value="Enviar">
        </form>
      </div>
    </body>
</html> 