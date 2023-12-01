<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally - Backend Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/HiLally/backend.min.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            margin: 50px;
        }

        legend {
            text-align: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        input {
            margin: 15px;
            border: none;
            padding: 10px 15px;
            border-bottom: 2px #9b96e0 solid;
            border-left: 2px #9b96e0 solid;
            border-bottom-left-radius: 5px;
        }

        input:focus-visible {
            border: none;
            outline: none;
            border-bottom: 2px #cb5bd6 solid;
            border-left: 2px #cb5bd6 solid;
        }

        #accedi {
            width: 115px;
            padding: 5px 15px;
            margin: 20px 50px 20px 50px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            background-color: #9b96e0;
            ;
            color: #fefefe;
        }

        #accedi:hover {
            background-color: #cb5bd6;
        }

        .error {
            background: #f2dede;
            color: #a94442;
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="./backend.php" method="post">
        <?php
        if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <legend>Login - Backend</legend>
        <input type="text" name="username" placeholder="Username" id="username">
        <input type="password" name="password" placeholder="Password" id="password">
        <button id="accedi" type="submit" name="login" value="login">Accedi</button>
    </form>
</body>