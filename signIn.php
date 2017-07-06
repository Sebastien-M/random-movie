<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign in/Sign up</title>
        <link rel="stylesheet" href="css/signin.css"/>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['page']="signIn.php";
        require_once './parts/header.php';
        ?>
        <form action="" method="POST">
            <input type="text" name="">
            <input type="text" name="">
            <input type="text" name="">
            <input type="text" name="">
        </form>
        <script src="https://use.fontawesome.com/d0fbf177e4.js"></script>
    </body>
</html>
