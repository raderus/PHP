<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);?>
<!DOCTYPE html>
<html>
<head>
<title>Reg Skripta</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animations.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<?php include 'navigation.php' ?>
<?php include 'nav-admin.php' ?>
<main>
    <section id="unos">
    <h2>Registracija Skripta</h2>
<?php 					
include 'connection.php';
if(ISSET($_POST['save'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password1']);
    $name = $_POST['name'];
    $level = 0;
    $stmt = mysqli_prepare($dbc, "INSERT INTO users (username, password, name, level) VALUES(?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssi", $username, $password, $name, $level);
    mysqli_stmt_execute($stmt);
    printf("%d Row inserted. Uspjeh!\n", mysqli_stmt_affected_rows($stmt));

    mysqli_stmt_close($stmt);
    echo 'Sada možete na <a href="login.php">Administraciju...</a>';
    
  }
  mysqli_close($dbc);
?>
</section>
</main>
<?php include 'footer.php' ?>
</body>
</html>