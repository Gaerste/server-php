<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../server-php/assets/style.css">
    <title>PHP Environment</title>
</head>

<body>
    <main class="container">
        <form action="validate.php" method="POST" class="form__container">
            <h2 class="form__title">Login</h2>
            <input type="text" name="email" class="input" placeholder="Email">
            <input type="password" name="password" class="input" placeholder="Password">
            <button type="submit" name="submit" class="btn">Login</button>
        </form>
    </main>
</body>

</html>