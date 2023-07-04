<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    
    require_once("./files/db.php");

    ?>

    <title>Document</title>
</head>
<body>

<h3>
    <?php
        echo $Product -> getName();
    ?>
</h3>

    
</body>
</html>


