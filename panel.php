<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
} else {
    $sessionEmail = $_SESSION['email'];
    $arrayUsername = explode("@", $sessionEmail);
    $username = $arrayUsername[0];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../server-php/assets/panel.css">
    <title>Panel</title>
</head>

<body>
    <div class="main__container">
        <nav class="main__nav">
                <a href="close_session.php" class="logout">logout</a>
        </nav>
        <main class="main__section">
            <section class="container__message">
                <h2 class="message">Welcome, You have successfully registered</h2>
                <div class="userEmail__container">
                    <?php
                    echo "<h2 class='userTxt'> $username</h2>";
                    ?>
                </div>
            </section>
        </main>
    </div>
</body>

</html>