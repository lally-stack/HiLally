<?php
require('./dbConnect.php');

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally - Modifica Testi</title>
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

<body id="ptSigm">
    <h1>Modifica Testi</h1>
    <div>
        <?php
        $sql = "SELECT * FROM testi";
        $result = mysqli_query($conn, $sql);
        while ($array = mysqli_fetch_array($result)) {
            print("<table><tr> <td> $array[id] </td> <td> $array[titolo] </td> <td> $array[testo] </td> </tr></table>");
        }
        ?>

    </div>
    <form id="mod" method="post" action="./modificaTesti.php">
        <input type="number" name="id" id="id" placeholder="Id">
        <input type="text" name="titolo" id="titolo" placeholder="Titolo"></input>
        <input type="text" name="testo" id="testo" placeholder="Testo"></input>
        <div class="button">
            <button type="submit" name="modifica" value="modifica">Modifica</button>
            <button type="reset" name="reset" value="reset">Elimina</button>
        </div>

    </form>
    <?php
    if(isset($_POST['modifica'])) {
        $sql = "UPDATE testi SET titolo='".$_POST['titolo']."', testo='".$_POST['testo']."' WHERE id='".$_POST['id']."'";
        $result = mysqli_query($conn, $sql);
        if ($result === true) {
            echo "Dati modificati correttamente";
            exit;
        } else {
            echo "Update non completato" . $conn->error;
            exit;
        }
    }

    if(isset($_POST['reset'])) {
        $sql = "DELETE FROM testi WHERE id='".$_POST['id']."'";
        $result = mysqli_query($conn, $sql);
        if ($result === true) {
            echo "Dati eliminati correttamente";
            exit;
        } else {
            echo "Update non completato" . $conn->error;
            exit;
        }
    }

    ?>


</body>