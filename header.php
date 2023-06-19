<?php include 'backend.php';
    if(!isset($activeLink))
        $activeLink = "none";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nadpisDocument ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="icon" type="image/x-icon" href="images/icons8-globe-64.png">
</head>
<body>
    <header class="" id="header">
    <nav>
        <a href="uvod.php">
            <div class="logo">
                <h1>ZENIT</h1>
                <h4>cloud</h4>
            </div>
        </a>
        <div class="rightSide">
            <div class="links">
            <a href="uvod.php" class="<?php if($activeLink == "uvod") echo "activeLink"?>">Úvod</a>
            <a href="onas.php" class="<?php if($activeLink == "onas") echo "activeLink"?>">O nás</a>
            <a href="sluzby.php" class="<?php if($activeLink == "sluzby") echo "activeLink"?>">Služby</a>
            <a href="kontakt.php" class="<?php if($activeLink == "kontakt") echo "activeLink"?>">Kontakt</a>
            </div>
            <?php
            if(isset($_SESSION['username'])){ 
                echo '<div class="navButtons">';
                if(isset($_SESSION['admin'])){
                    echo '<a href="admin.php"><button class="login">Administrácia</button></a>';
                }
                echo '<a href="backend.php?logout"><button class="register">Odhlásiť</button></a>';  
    } else{
    ?>
            <div class="navButtons">
                <a href="login.php"><button class="login">PRIHLÁSIŤ SA</button></a>
                <a href="register.php"><button class="register">REGISTROVAŤ</button></a>
            </div>
    <?php } ?>
        </div>
    </nav>
    </header>
