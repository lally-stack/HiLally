<?php
require('./pag/dbConnect.php');
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally</title>
    <link rel="stylesheet" type="text/css" href="./mainHL.min.css">
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

<body>
    <!---- HEADER ----->
    <?php require('./pag/navbar.php') ?>

    <!---- MAIN ----->
    <main>
        <div id="intro">
            <div id="heroImg">
                <div id="heroTxt">
                    <p>
                        <?php
                        $sql = "SELECT testo FROM testi WHERE id=1";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        $testo =  array_slice($row, 1, 2);
                        echo implode($testo);
                        ?>

                    </p>
                </div>
            </div>
        </div>
        <h1 id="tu" class="TiTo">Skills and more</h1>
        <div id="skills">
            <div class="parteSX">
                <h3 class="titP">
                    <?php
                    $sql = "SELECT titolo FROM testi WHERE id=2";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $testo =  array_slice($row, 1, 2);
                    echo implode($testo);
                    ?>
                </h3>
                <p>
                    <?php
                    $sql = "SELECT testo FROM testi WHERE id=2";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $testo =  array_slice($row, 1, 2);
                    echo implode($testo);
                    ?>
                </p>
            </div>
            <div class="parteDX">
                <h3 class="titP">
                    <?php
                    $sql = "SELECT titolo FROM testi WHERE id=3";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $testo =  array_slice($row, 1, 2);
                    echo implode($testo);
                    ?>
                </h3>
                <p>
                    <?php
                    $sql = "SELECT testo FROM testi WHERE id=3";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $testo =  array_slice($row, 1, 2);
                    echo implode($testo);
                    ?>
                </p>
            </div>
        </div>
        <div id="cosa">
            <div id="parte1">
                <div>
                    <h2>Cosa posso fare per te</h2>
                    <p>Le attività principali di uno sviluppatore full stack:</p>
                    <ul>
                        <li><img src="./img/check.png" alt="check">Implementare il design di una pagina web</li>
                        <li><img src="./img/check.png" alt="check">formattare elementi statici, grafici e dinamici</li>
                        <li><img src="./img/check.png" alt="check">ottimizzare velocità, stabilità e scalabilità di server e codice</li>
                        <li><img src="./img/check.png" alt="check">creare e implementare soluzioni di archiviazione dati</li>
                        <li><img src="./img/check.png" alt="check">aggiornare e mantenere il codice</li>
                        <li><img src="./img/check.png" alt="check">analizzare e risolvere i problemi nel codice (test e debug)</li>
                        <!-- <li><img src="./img/check.png" alt="check">analyze and solve problems in the code (testing and debugging)</li> -->
                    </ul>

                </div>
            </div>
            <div id="parte2">
                <div>
                    <h3 style="margin-bottom: 10px;">Software Utlizzati</h3>
                    <ul>
                        <li><img src="./img/figma.png" alt="Figma" title="Figma"></li>
                        <li><img src="./img/photoshop.png" alt="Photoshop" title="Photoshop"></li>
                        <li><img src="./img/vscode.png" alt="VisualStudioCode" title="VisualStudioCode"></li>
                    </ul>
                </div>
                <div>
                    <h3  style="margin-bottom: 10px;">Linguaggi Utilizzati</h3>
                    <ul>
                        <li><img src="./img/html.png" alt="HTML" title="HTML"></li>
                        <li><img src="./img/css.png" alt="CSS" title="CSS"></li>
                        <li><img src="./img/sass.png" alt="SASS" title="SASS"></li>
                        <li><img src="./img/javascript.png" alt="JAVASCRIPT" title="JAVASCRIPT"></li>
                        <li><img src="./img/php.png" alt="PHP" title="PHP"></li>
                        <li><img src="./img/banca.png" alt="SQL" style="margin-left: 10px;" title="SQL"></li>
                    </ul>
                </div>

            </div>
        </div>
        <h1 id="titPor" class="TiTo">Portfolio</h1>
        <div id="portfolio">
            <div class="elem">
                <h2>Progetto 1</h2>
                <h4>Il mio sito</h4>
                <a href="./pag/progetto1.php"><img class="port" src="./img/port.jpg" alt="" width="280px" height="250px"></a>
            </div>
            <!-- <div class="elem">
                <h2>Progetto 2</h2>
                <h4>Web Desing</h4>
                <a href="/HiLally/pag/progetto2.php"><img class="port" src="./img/webDes.png" alt="" width="280px" height="250px"></a>
            </div> -->
            <!-- <div>
                <h2>Progetto 3</h2>
                <h4>Luxo</h4>
                <a href=""><img src="" alt=""></a>
            </div> -->
        </div>
        <div id="form">
            <h1 class="TiTo">Contatti</h1>
            <form action="./pag/saveUser.php" method="post" 
            style="justify-content: space-evenly; height: 700px;">
                <legend>Per ulteriori informazioni compila il form</legend>
                <input type="text" name="nome" placeholder="Nome" id="nome">
                <input type="text" name="cognome" placeholder="Cognome" id="cognome">
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="text" name="telefono" id="telefono" placeholder="Telefono">

                <select name="argomento" id="argomento">
                    <option value="" selected>Seleziona argomento</option>
                    <optgroup label="FrontEnd">
                        <option value="Web Desing">Web Desing</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JavaScript">JavaScript</option>
                    </optgroup>
                    <optgroup label="BackEnd">
                        <option value="PHP">PHP</option>
                        <option value="SQL">SQL</option>
                    </optgroup>
                </select>

                <label for="note">Scrivimi</label>
                <textarea name="note" id="note"></textarea>
                <div class="button">
                    <button type="submit" name="submit" value="submit" title="clicca per inviare">Invia</button>
                    <button type="reset" title="clicca per cancellare">Cancella</button>
                </div>
            </form>
        </div>

    </main>
    <!---- FOOTER ----->
    <?php require('./pag/footer.php') ?>

</body>

</html>