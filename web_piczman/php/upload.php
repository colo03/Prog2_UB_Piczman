<?php
$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo '<script>alert("El archivo excede el limite de tamaño")</script>';
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo '<script>alert("No se pudo cargar el archivo")</script>';
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo '<script>alert("Archivo cargado correctamente")</script>';
  } else {
    echo '<script>alert("No se pudo cargar el archivo")</script>';
  }
}
?>