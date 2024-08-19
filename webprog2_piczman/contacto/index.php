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
      <?php
        $mysqli = new mysqli('localhost', 'root','', 'total_paises');
        ?>       
      
    </head>
    <body>
  
      <div class="topnav" id="myTopnav">
 <img src="../imagenes_videos/Monograma_prog2.png">
        <a href="..\index.php">Inicio</a>
        <a href="..\trabajos\index.php">Trabajos</a>
        <a href="#"class="active">Contacto </a>
        <a href="..\sobre_mi\index.php">Sobre mí</a>
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
          <label for="pnombre" class="pnombre" >Nombre</label><br>
          <input type="Text" id="pnombre" name="nombre" required/><br>
          <label for="apellido" class ="pnombre">Apellido</label><br>
          <input type="Text" id="apellido" name="apellido" required/><br> 
          <label for ="mail" class ="pnombre">Email</label><br>
          <input type ="email" id="mail" name ="mail" required/><br>

          <p>Deja tu mensaje </p> 
          <textarea rows ="5" cols="25" class ="desc"  name ="desc" required></textarea><br>
          <input type ="checkbox" id ="chequeo" name ="chequeo" required>
          <label for ="chequeo" class ="desc">Acepto los terminos y condiciones </label><br> 
          <input type="submit" value="Enviar">
        </form>
        <br>
    <p>Seleccione un pais del siguiente menú:</p>  
    <p>Paises:
      <select> 
       <option value="0">Seleccione:</option> 
       <?php 
        $query = $mysqli -> query ("SELECT * FROM pasies");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>'; 
        } 
       ?> 

      </select>
      </div>
    </body>
</html> 