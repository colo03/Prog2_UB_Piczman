<?php
$mysqli = new mysqli('localhost', 'root', '', 'lista_paises');

if ($mysqli->connect_error) {
    die('Error de conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>

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
        <a href="..\index.php">Inicio</a>
        <a href="..\trabajos\index.php">Trabajos</a>
        <a href="#"class="active">Contacto </a>
        <a href="..\sobre_mi\index.php">Sobre mí</a>
        <a href="..\juego\index.html">Juego</a>
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
        <form action="../php/valid.php" method="post" name="frm">
          <label for="pnombre" class="pnombre" ></label><br>
          <input type="Text" id="pnombre" name="nombre" placeholder ="Nombre" required/><br>
          <label for="apellido" class ="pnombre"></label><br>
          <input type="Text" id="apellido" name="apellido" placeholder ="Apellido" required/><br> 
          <label for ="mail" class ="pnombre" ></label><br>
          <input type ="email" id="mail" name ="mail" placeholder="Mail"required/><br><br>
          <textarea rows ="5" cols="25" class ="desc"  name ="desc" placeholder="Deja tu mensaje"required></textarea><br>
          <input type ="checkbox" id ="chequeo" name ="chequeo" required>
          <label for ="chequeo" class ="desc">Acepto los terminos y condiciones </label><br> 
          <label class ="desc">Seleccione su país:</label>  
      <select> 
       <option value="0" name ="pais">País</option> 
       <?php 
        $query = $mysqli -> query ("SELECT * FROM pais ORDER BY paisnombre");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['id'].'">'.$valores['paisnombre'].'</option>'; 
        } 
       ?> 
        </select> <br>
          <input type="submit" value="Enviar">
        </form>
      </div>
    </body>
</html> 