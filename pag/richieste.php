<?php
require('./dbConnect.php');

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally - Richieste</title>
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

<body id="ptBeta">
    <h1>Richieste Recenti</h1>
    <?php
    $sql = "SELECT * FROM richieste";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        print("
        <table>
             <tr>
                <th> Id </th> 
                <th> Nome </th> 
                <th> Cognome </th> 
                <th> Email </th> 
                <th> Telefono </th> 
                <th> Argomento </th> 
                <th> Note </th> 
            </tr>
            <tr> 
                <td> $row[idUtente] </td> 
                <td> $row[nome] </td> 
                <td> $row[cognome] </td>
                <td> $row[email] </td> 
                <td> $row[telefono] </td> 
                <td> $row[argomento] </td>
                <td> $row[note] </td>
                <td><a href='elimina.php?idUtente=$row[idUtente]'</a>ELIMINA</td>
            </tr>
        </table>");
    }
    ?>
    <a href="./home.php">Home</a>
</body>