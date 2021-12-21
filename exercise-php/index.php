<?php
require_once __DIR__ . '/data/database.php';
// var_dump($database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>PHP - Dischi</title>
</head>
<body>
            <div class="card-container">
                    <?php 

                    foreach($database as $value) : ?>
                            <img src="<?php echo $value['poster'] ?>" alt="">
                            <h4><?php echo $value['title'] ?></h4>
                            <span class="d-block"><?php echo $value['author'] ?></span>
                            <span class="d-block"><?php echo $value['year'] ?></span>
                            <span class="d-block"><?php echo $value['genre'] ?></span>
                    <?php endforeach; ?>
            </div>
</body>
</html>