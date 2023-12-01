<?php
require('./dbConnect.php');

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally</title>
    <!-- <link rel="stylesheet" type="text/css" href="./mainHL.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .parteDX {
            flex-direction: column;
        }

        #in {
            width: 500px;
        }

        .TiTo {
            text-shadow: 4px 6px #dcd7f1;
        }
    </style>
</head>



<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
    // recupero dati
    $nome = ($_POST["nome"]);
    $cognome = ($_POST["cognome"]);
    $email = ($_POST["email"]);
    $telefono = ($_POST["telefono"]);
    $argomento = ($_POST["argomento"]);
    $note = ($_POST["note"]);
    // variabili errore
    $errNome = "";
    $errCogno = "";
    $errEmail = "";
    $errTele = "";
    $errArgo = "";
    // convalida nome
    if (empty($nome)) {
        $errNome = "Il campo <strong>nome </strong> è vuoto <br>";
    } elseif (!preg_match('/^[A-Za-z]+$/', $nome)) {
        $errNome = "Il campo <strong>nome </strong>non è compilato correttamente <br>";
    } else {
        $errNome = "";
        return $nome;
    }

    // convalida cognome
    if (empty($cognome)) {
        $errCogno = "Il campo <strong>cognome </strong> è vuoto <br>";
    } elseif (!preg_match('/^[A-Za-z]+$/', $cognome)) {
        $errCogno = "Il campo <strong>cognome </strong>non è compilato correttamente <br>";
    } else {
        $errCogno = "";
        return $cognome;
    }

    // convalida email
    $email = filter_var($email,  FILTER_SANITIZE_EMAIL);
    if (empty($email)) {
        $errEmail = "Il campo <strong>email </strong> è vuoto <br>";
    } elseif (!filter_var(FILTER_VALIDATE_EMAIL, $email)) {
        $errEmail = "Il campo <strong>email </strong>non è compilato correttamente <br>";
    } else {
        $errEmail = "";
        return $email;
    }

    // convalida argomento
    if (empty($argomento)) {
        $errArgo = "Il campo <strong>argomento </strong>non è vuoto <br>";
    } else {
        $errArgo = "";
        return $argomento;
    }

    if (empty($telefono)) {
        $errTele = "Il campo <strong>telefono </strong> è vuoto <br>";
    } elseif (!preg_match('/(^[0|3]{1}[0-9]{5,10}$)/', $telefono)) {
        $errTele = "Il campo <strong>telefono </strong>non è compilato correttamente <br>";
    } else {
        $errTele = "";
        return $telefono;
    }
}
if ($errNome = "" && $errCogno = "" && $errEmail = "" && $errArgo = "" && $errTele = "") {
    require('./dbConnect.php');
    $sql = "INSERT INTO richieste (nome, cognome, email, telefono, argomento, note) VALUES ('$nome', '$cognome', '$email', '$telefono', '$argomento', '$note')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Inserimento nel database avvenuto con successo!";
        printf("Il tuo id è %d.", mysqli_insert_id($conn));
    } else {
        echo "Inserimento dei dati non riuscito";
    }

?>
    <h2>Welcome <?php echo $_POST["nome"] ?></h2>
    <h3>Ecco i tuoi dati:</h3>
    <ul>
        <li>Nome: <?php echo $nome ?></li>
        <li>Cognome: <?php echo $cognome ?></li>
        <li>Email: <?php echo $email ?></li>
        <li>Telefono: <?php echo $telefono ?></li>
        <li>Argomento: <?php echo $argomento ?></li>
        <li>Note: <?php echo $_POST["note"] ?></li>
    </ul>
    <p>Grazie per avermi contattato! <br>
        Risponderò al più presto al tuo indirizzo email!<br>
        <a href="./index.php">Torna alla homepage</a>
    </p>

    <a href="./index.php">Torna indietro</a>

<?php

}

?>