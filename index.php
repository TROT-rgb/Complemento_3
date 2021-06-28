<?php
    $nombre = $_POST['nombre'];
    $producto = $_POST['producto'];
    $comentario = $_POST['comentario'];
    $valoracion = $_POST['valoracion'];

    $foto = $_FILES['imagen']['name'];
    $guardado = $_FILES['imagen']['tmp_name'];

    if (!file_exists('archivos')){
        mkdir('archivos',0777,true);
        if (file_exists('archivos')){
            move_uploaded_file($guardado, 'archivos/'.$foto);
        }
    }else{
            move_uploaded_file($guardado, 'archivos/'.$foto);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Componente 3</title>
</head>
<body>
    <div class="container_body">
        <div class="container">
            <div class="info">
                <div class="caja_img">
                    <img src="<?php echo 'archivos/'.$foto; ?>">
                </div>
                <div class="date">
                    <h2>Usuario: <?php echo $nombre ?></h2><br>
                    <h2>Producto: <?php echo $producto ?></h2>
                </div>
            </div>
            <div class="valoracion">
                <h2>Valoración: <?php echo $valoracion ?> ✰</h2>
            </div>
            <div class="comentarios">
                <?php echo $comentario ?>
            </div>
        </div>
    </div>



</body>
</html>