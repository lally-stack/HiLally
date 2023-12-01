<?php

session_start();
session_destroy();
header('Location: https://www.hilally.it/index.php');
exit;

?>