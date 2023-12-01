<?php
session_start();
require('./dbConnect.php');

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally - Backend</title>
    <link rel="stylesheet" href="/pollo/backend.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body id="ptAlpha">
    <div id="ptAlt">
        <h1>Ciao <?php echo $_SESSION['username']; ?></h1>
        <h3> Il tuo SessionID è:    <?php echo $_SESSION['id']; ?></h3>
    </div>

    <div id="ptInt">
        <ul>
            <a href="./richieste.php"><img src="/img/cassetta.png" alt="">
                <li>Richieste</li>
            </a>
            <a href="./modificaTesti.php"><img src="/img/block.png" alt="">
                <li>Modifica Testi</li>
            </a>
        </ul>
    </div>
    <a href="./logout.php">Logout</a>


</body>
<?php

?>