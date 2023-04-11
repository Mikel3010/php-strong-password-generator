<?php
session_start();
if(!isset($_SESSION['password'])){
    header('Location: index.php');
    exit();
}
$password = $_SESSION['password'];
unset($_SESSION['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>
<body>
    <h1>Password generata</h1>
    <p>La tua password generata è: <?php echo $password; ?></p>
    
</body>
</html>