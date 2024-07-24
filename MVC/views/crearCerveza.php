<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cervezas</title>
</head>
<body>

    <ul>
        LISTADO DE LAS CERVEZAS  <br><br>
        <?php foreach($cervezas as $cerveza): ?>
           
            <li><?php echo "Cerveza : " . $cerveza->getNombre();  ?> --- Marca : <?php echo $cerveza->getMarca(); ?></li>
            
        <?php endforeach; ?>
    </ul>
    
</body>
</html>