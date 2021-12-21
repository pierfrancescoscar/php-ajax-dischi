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
    <link rel="stylesheet" href="./style/main.css">
    <title>PHP - Dischi</title>
</head>
<body>
    <!-- Header -->
    <header class="container-fluid p-3">
        <img src="./assets/logo.png" alt="">
    </header>

    <!-- Main -->
    <section class="container-fluid main-content p-5">
        <div class="container">
            <div class="row">
                    <?php foreach($database as $value) : ?>
                    <div class="col-4">

                        <div class="music-card p-3 mb-3">
                            <img src="<?php echo $value['poster'] ?>" alt="">
                            <h4><?php echo $value['title'] ?></h4>
                            <span class="d-block"><?php echo $value['author'] ?></span>
                            <span class="d-block"><?php echo $value['year'] ?></span>
                            <span class="d-block"><?php echo $value['genre'] ?></span>
                        </div>
                                    
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </section>
            
</body>
</html>