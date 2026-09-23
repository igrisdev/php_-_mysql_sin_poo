<?php require_once "./inc/session_start.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "./inc/head.php"; ?>
</head>

<body>
    <?php
    if (!isset($_GET['vista']) || $_GET['vista'] = "") {
        $_GET['vista'] = "login";
    }

    include "./inc/navbar.php";
    include "./inc/script.php";
    ?>
</body>

</html>