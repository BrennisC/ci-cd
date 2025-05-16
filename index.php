<?php

$nombre = "Nombre de prueba";

$listName = [
    "pepe",
    "brennis",
    "benjaminn"
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nombre ?></title>
</head>

<body>
    <ul>
        <?php foreach ($listName as $name) { ?>
            <li><?= $name ?></li>
        <?php } ?>
    </ul>
</body>

</html>