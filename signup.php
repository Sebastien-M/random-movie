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
        <link rel="stylesheet" href="css/signup.css"/>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION['page']="signIn.php";
        require_once './parts/header.php';
        ?>
        <div class="formcontainer">
        <form action="" method="POST">
            <label for="pseudo">pseudo</label>
            <input type="text" id="pseudo" name="pseudo">
            <label for="email">email</label>
            <input type="text" id="email" name="email">
            <label for="password">password</label>
            <input type="text" id="password" name="password">
            <label for="passwordconfirm">Confirm password</label>
            <input type="text" id="passwordconfirm" name="passwordconfirm">
            <input type="submit" value="Submit">
        </form>
            </div>
        <script src="https://use.fontawesome.com/d0fbf177e4.js"></script>
    </body>
</html>
