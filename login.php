<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
<title>Administracija</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animations.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<?php include 'navigation.php'?>
<?php include 'nav-admin.php'?>
<main>
    <section id="unos">
    <h2>Admin Login</h2>
	<form name="login" action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username"><br>
            <label for="password">Password:</label>
            <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Login" class="button">
	</form>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
echo ('<strong>Login: </strong>');
$username = $_POST['username'];
$password = md5($_POST['password']);
include 'connection.php';
//izbacujemo sve nedozvoljene znakove funkcijom real_escape_string
$username = mysqli_real_escape_string($dbc,$username);
$username = mysqli_real_escape_string($dbc,$username);

$query = "SELECT username, password, name, level FROM users WHERE username=? AND password=?";

$stmt = mysqli_prepare($dbc, $query);

if($stmt){
    /* Povezuje parametre i njihove tipove sa statement objektom */
    mysqli_stmt_bind_param($stmt,"ss", $username, $password);
    /* Izvršava pripremljeni upit i pohranjuje rezultate */
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
} 
/* Povezuje atribute iz rezultata s varijablama */
mysqli_stmt_bind_result($stmt, $dbuser, $dbpass, $dbname, $dblevel);
/* Dohvaća redak iz rezultata, i posprema vrijednosti atributa u
varijable navedene funkcijom mysqli_stmt_bind_result() */
mysqli_stmt_fetch($stmt);
    if ($username !== $dbuser && $password !== $dbpass) {
        echo'<span class="red">Neuspješan login. Pokušajte ponovno ili se <a href="reg.php">Registrirajte..</a></span>';
    }
    elseif ($username == $dbuser && $password == $dbpass) {
        echo'<span class="red">Uspješno ste se prijavili </span>';
        $_SESSION['username'] = $dbuser;
        $_SESSION['password'] = $dbpass;
        $_SESSION['name'] = $dbname;
        $_SESSION['level'] = $dblevel;
        
        header("Location: admin.php");
    } 
mysqli_stmt_close($stmt);
}
?></section>
</main>
<?php include 'footer.php' ?>
</body>
</html>
