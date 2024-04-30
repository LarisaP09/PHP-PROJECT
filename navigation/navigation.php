<?php
require_once "../php-connection/login.in.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\style2.css">
    <link rel="stylesheet" href="..\css\menu.css">
    
    <!-- <script src="../javascript/script1.js" defer></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <title>Pulse</title>

    <style>
        .input-row form{
            background-color:#F2F2F2;
        }
        .form-group{
            padding:1rem;
        }
        .form-group input{
            width:95%;
        }

        .contact-box{
            justify-content: center;
        }

        .input_row h2,.col-md-6 h2{
            text-align:center;
        }
        #get-weather-btn{
            margin-bottom: 1rem;
        }
    </style>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="logo" src="../Images/logo-removebg-preview.png" alt="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul cul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
                            <!-- Afișează alte elemente de navigare numai dacă utilizatorul este autentificat -->
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./products.php">Products</a></li>
                            <li><a href="./about.php">About us</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                <?php endif; ?>
                <li><a  href="<?php echo $navbar_link; ?>" ><?php echo $navbar_label; ?></a></li>
                </ul>
        </div>
        </div>
        </nav>
    </header>
