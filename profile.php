<?php
session_start();
if(empty($_SESSION['user'])) {
    header('location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP User Auth Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="center">Welcome back 
            <?= $_SESSION['user']['name'] ?>
        </h1>
        <div class="row center">
            <a class="button btn" href="./sign_out.php">Sign Out</a>
        </div>
    </div>
</body>
</html>