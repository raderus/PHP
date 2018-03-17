<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animations.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<?php include 'navigation.php' ?>
<?php if (($_SESSION['level'] == '1')){ echo'<div class="login"><a href="logout.php">Logout</a></div>';} ?><div class="login"><a href="unos.php">Unos proizvoda</a></div><div class="login"><a href="reg.php">Registracija</a></div><div class="login"><a href="login.php">Login</a></div>
<div class="clear"></div>
<main>
    <section id="unos">
    <h2>Administracija proizvoda</h2>
    
<?php
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == '1') {
        
/* DB */    include 'connection.php';
        if (isset($_POST['naredba'])) {
            if ($_POST['naredba'] == "za_arhivu") {
            // $query = 'DELETE FROM proizvodi WHERE id = ' . $_POST['proizvod'];
            $query = 'UPDATE proizvodi SET arhiviraj = 1 WHERE id = ' . $_POST['proizvod'];
            echo '<span class="red">Uspješno arhivirano</span>';
            mysqli_query($dbc, $query) or die(mysqli_connect_error());
            }
            if ($_POST['naredba'] == "vrati_nazad") {
            // $query = 'DELETE FROM proizvodi WHERE id = ' . $_POST['proizvod'];
            $query = 'UPDATE proizvodi SET arhiviraj = 0 WHERE id = ' . $_POST['proizvod'];
            echo '<span class="red">Uspješno dearhivirano</span>';
            mysqli_query($dbc, $query) or die(mysqli_connect_error());
            }
	}
				
	$query = "SELECT id, naziv, sifra, kategorija, cijena, slika, arhiviraj FROM proizvodi";		
	$result = mysqli_query($dbc, $query) or die(mysqli_connect_error());
				
	echo '<table>';
	echo '<tr>';
	echo '<th>ID</th><th>Naziv</th><th>Šifra</th><th>Kategorija</th><th>Cijena</th><th>Slika</th>';
	echo '<th>Arh/DeArh</th>';
	echo '</tr>';
	while($row = mysqli_fetch_array($result)) {

	if ($row['arhiviraj'] == 0) {
	echo '<tr>';
	echo '<td>'. $row['id'] .'</td>';
	echo '<td>'. $row['naziv'] .'</td>';
	echo '<td>'. $row['sifra'] .'</td>';
	echo '<td>'. $row['kategorija'] .'</td>';
	echo '<td>'. $row['cijena'] .'</td>';
        echo '<td><img src="'. $row['slika'] .'" style="max-width: 50px;"></td>';
	echo '<td>
	<form name="za_arhivu" method="POST" action="">
        <input type="hidden" name="naredba" value="za_arhivu">
	<input type="hidden" name="proizvod" value="'.$row['id'].'">
	<input type="submit" value="Arhiviraj">
	</form> 
        
	</td>';}
        if ($row['arhiviraj'] == 1) {
	echo '<tr>';
	echo '<td>'. $row['id'] .'</td>';
	echo '<td>'. $row['naziv'] .'</td>';
	echo '<td>'. $row['sifra'] .'</td>';
	echo '<td>'. $row['kategorija'] .'</td>';
	echo '<td>'. $row['cijena'] .'</td>';
        echo '<td><img src="'. $row['slika'] .'" style="max-width: 50px;"></td>"';
	echo '<td>
	<form name="vrati_nazad" method="POST" action="">
        <input type="hidden" name="naredba" value="vrati_nazad">
	<input type="hidden" name="proizvod" value="'.$row['id'].'">
	<input type="submit" value="Dearhiviraj">
	</form> 
        
	</td>';}
        
	echo '</tr>';
	}
	echo '</table>';
	
        echo '<div style="margin-top: 50px;"><a href="files/rr-pwa.zip">Download source code..</a></div>';
        
	mysqli_close($dbc);
        

    }
    else {
        echo'<span class="red">Nemate prava za administraciju stranice.</span>';
    }
}
elseif (!isset($_SESSION['level'])) {
       echo'<span class="red">Nemate prava za administraciju stranice.</span>';
    }
?>

    </section>
</main>
<?php include 'footer.php' ?>
</body>
</html>