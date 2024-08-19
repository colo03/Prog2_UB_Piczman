<!DOCTYPE html>

<html lang="en">
    <meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> INICIO </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../../php/webprog2_piczman/js/javascript.js"></script>
        <script>window.alert("Bienvenidos");</script>
        </head>
        <body>
            <div class="topnav" id="myTopnav">
              <img src="imagenes_videos/Monograma_prog2.png" >
                <a href="#" class="active">Inicio</a>
                <a href="trabajos/index.php">Trabajos</a>
                <a href="contacto/index.php">Contacto </a>
                <a href="sobre_mi/index.php">Sobre mí</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
        <br><br><br>
        <h1>
            ¡BIENVENIDOS!
        </h1>
        <hr style="width: 60%;">
        <br>
        <div class = "main_inicio">
          <img src="imagenes_videos/Monograma_prog2.png" style="width: 20rem;" ><br>
            Esta es mi página web <br><br>
            Aquí podrán encontar toda mi información y mis trabajos <br><br>
            Podes contactarme en la pestaña de CONTACTO <br><br>
            Vas a encontrar mis trabajos en la pestaña de TRABAJOS <br><br>
			
			<form action="php/upload.php" method="post" enctype="multipart/form-data">
  Subi un archivo:
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload Image" name="submit"> 
</form>
        </div>
			
    </body>
</html> 