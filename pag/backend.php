<?php
require("./dbConnect.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($user)) {
        header('Location: ./login.php?error=Username is required');
        exit;
    } else if (empty($pass)) {
        header('Location: ./login.php?error=Password is required');
        exit;
    } else {
        $sql = "SELECT username, password FROM backend WHERE username='$user' AND password='$pass'";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $pass) {
                session_start();
                $id = session_id();
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $id;
                header('Location: ./home.php');
                
                exit;
            } else {
                header('Location: ./login.php?error=Incorrect credentials');
                exit;
            }
        } else {
            header('Location: ./login.php?error=Incorrect credentials');
            exit;
        }
    }
} else {
    header('Location: ./login.php?error');
    exit;
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Lally - Backend</title>
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

</body>