<?php include 'header.php';


if(isset($_POST['naziv'])){ $naziv = $_POST['naziv'];}
if(!isset($_POST['naziv'])){ $naziv = ''; }
if(isset($_POST['sifra'])){ $sifra = $_POST['sifra'];}
if(!isset($_POST['sifra'])){ $sifra = ''; }
if(isset($_POST['kategorija'])){ $kategorija = $_POST['kategorija'];}
if(!isset($_POST['kategorija'])){ $kategorija = ''; }
if(isset($_POST['opis'])){ $opis = $_POST['opis']; }
if(!isset($_POST['opis'])){ $opis = ''; }
if(isset($_POST['cijena'])){ $cijena = $_POST['cijena']; }
if(!isset($_POST['cijena'])){ $cijena = ''; }
if (isset($_POST['arhiviraj'])) {$arhiviraj=$_POST['arhiviraj'];} 
else {$arhiviraj=0;}

// DB Connection
include 'connection.php';

// SLIKA UPLOAD
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["slika"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
chmod($_FILES['slika']['tmp_name'],0777);		
move_uploaded_file($_FILES['slika']['tmp_name'],$target_file);
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Samo JPG, JPEG, PNG & GIF datoteke su dozvoljene.";
    $uploadOk = 0;
}

$query = "INSERT INTO proizvodi (naziv, sifra, kategorija, opis, slika, cijena, arhiviraj) VALUES ('$naziv', '$sifra', '$kategorija', '$opis', '$target_file', '$cijena', '$arhiviraj')";

if (mysqli_query($dbc, $query)) {
    echo "<span style=\"color: red; font-weight: bold; padding: 20px;\">Novi proizvod je uspješno unesen</span>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);
}

mysqli_close($dbc);

?>
<main>
	<section id="trgovina">
		<h2>Pohranjeni proizvod</h2>
		<article>
	<?php           echo "<h3>$naziv</h3>";
			echo "<p>Šifra: $sifra<p>";
			echo "<p>Vrsta: $kategorija<p>";
			echo "<p>Opis proizvoda: $opis<p>";
			echo "<p>Cijena: $cijena kn.<p>";
                        echo '<p><img src="'. $target_file .'">';
			
			if ($arhiviraj == '1') {
				echo '<span style="color: red;">Proizvod je arhiviran!';
			} 
	?>	</article>
		
	</section>
</main>

</body>
</html>