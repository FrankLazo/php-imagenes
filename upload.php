<?php

    // Recibir los datos del archivo
    // $_FILES[ form "name" ][ el dato deseado ]

    $img_name = $_FILES['imagen']['name'];
    $img_type = $_FILES['imagen']['type'];
    $img_size = $_FILES['imagen']['size'];
    
    // Condicionar por tamaño y tipo
    // Tamaño en bytes. Por ejemplo 100KB <> 100000

    if($img_size <= 100000 &&
        ($img_type == "image/jpeg" || $img_type == "image/jpg" ||
         $img_type == "image/png" || $img_type == "image/gif"))
    {
        // Directorio de almacenamiento
        // DOCUMENT_ROOT Raíz del servidor
        
        $dest_path = $_SERVER['DOCUMENT_ROOT'] . "/php-imagenes/uploads/";

        // Mover del directorio temporal al directorio destino

        move_uploaded_file($_FILES['imagen']['tmp_name'], $dest_path . $img_name);

        // Almacenar la extensión del archivo
        $ext = pathinfo($dest_path.$img_name, PATHINFO_EXTENSION);

        // Renombrar archivo
        $new_name = "imagen-1";
        rename($dest_path . $img_name, $dest_path . $new_name . "." . $ext);
    }
    else
    {
        echo "La imagen excede el tamaño permitido: 100KB o " . 
             "no es de un formato permitido: jpeg, jpg, png, gif.";
    }
    
    // Contruir la consulta sql para almacenar la ruta de la imagen
    // en un campo de la tabla en la base de datos.
    // INSERT INTO TABLA (CAMPO) VALUE ('$img_name') ó ('$new_name')

    // Rescatar esa ruta e incluirla en <img src=" ? ">

?>