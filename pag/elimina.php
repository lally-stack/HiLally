<?php
require('./dbConnect.php');

$id = (int)$_GET['idUtente'];
echo $id;

$sql = "DELETE FROM richieste WHERE idUtente='$id'";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally - Richieste</title>
    <link rel="stylesheet" href="/HiLally/pollo/backend.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <h1>Dati eliminati</h1>
    <?php
    if($conn->error) {
        echo 'Errore nel database:' . $conn->error;
    } else {
        echo "I dati sono stati cancellati <br>";
        echo "<a href='richieste.php'>Torna all'elenco</a>";
    }
    ?>
</body>