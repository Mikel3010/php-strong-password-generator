<?php 
    session_start();
    require_once 'functions.php';
    if (isset($_GET['lunghezza'])) {
        $lunghezza = $_GET['lunghezza'];
        $password = randomPassword($lunghezza);
        $_SESSION['password']= $password;
        header(('Location: show_password.php'));
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>Passweord Casuale</h1>
    <form action="index.php" method="GET">
        <label for="lunghezza">Lunghezza Password</label>
        <input type="number" name="lunghezza" id="lunghezza" min="1" max="20" required>
        <button type="submit">Genera Password</button>
    </form>
</body>
</html>