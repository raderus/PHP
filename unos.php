<!DOCTYPE html>
<html>
<head>
<title>Unos proizvoda</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animations.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<span id="topy"></span>
<?php include 'navigation.php' ?>
<?php include 'nav-admin.php' ?>
<main>
	<section id="unos">
		<h2>Unos proizvoda</h2>
                <form enctype="multipart/form-data" name="unosProzvoda" onsubmit="return checkForm()" action="skripta.php" method="POST">
			<label for="naziv">Naziv proizvoda:</label>
                        <input id="naziv" type="text" name="naziv" />
                        <span id="naziv_error" class="error"></span><br>
			<label for="sifra">Šifra:</label>
                        <input id="sifra" type="text" name="sifra" />
                        <span id="sifra_error" class="error"></span><br>
			<label for="kategorija">Vrsta proizvoda:</label>
			<select id="kategorija" name="kategorija" required="required">
                            <option value="Povrće">Povrće</option>
                            <option value="Voće">Voće</option>
                            <option value="Čaj">Čaj</option>
                        </select>
                        <span id="kategorija_error" class="error"></span><br>
                     <textarea name="opis" id="opis" rows="9" cols="40" required="required" placeholder="Opis proizvoda"></textarea>
                        <span id="opis_error" class="error"></span><br>
			<label for="cijena">Cijena:</label>
                        <input id="cijena" type="text" name="cijena" /><br>
                        <span id="cijena_error" class="error"></span>
                        
			<label>Slika:</label>
                        <label for="slika" class="upload-button">Izaberi sliku</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
			<input type="file" name="slika"  id="slika" class="hidden"><br>
                        <span id="slika_error" class="error"></span>
                            
			<input type="checkbox" id="arhiviraj" name="arhiviraj" value="1">
                        <label for="arh">Arhiviraj proizvod</label><br>
			<button type="submit" name="gumb" id="gumb" class="button">POHRANI</button>
		</form>
<script type="text/javascript">
    
function checkForm() {

var slanje_forme = true;

var naziv = document.getElementById("naziv");
if(naziv.value.length < 5 || naziv.value.length > 30) {
slanje_forme = false;

naziv.style.border = "4px solid red";
document.getElementById("naziv_error").innerHTML = "Naziv mora imati od 5 do 30 znakova!";
}
else {
naziv.style.border = "0px solid transparent";
document.getElementById("naziv_error").innerHTML = "";
}

var sifra = document.getElementById("sifra");
if(sifra.value.length != 4) {
slanje_forme = false;

sifra.style.border = "4px solid red";
document.getElementById("sifra_error").innerHTML = "Šifra mora imati 4 znaka!";
}
else {
sifra.style.border = "0px solid transparent";
document.getElementById("sifra_error").innerHTML = "";
}

var opis = document.getElementById("opis");
if(opis.value.length < 10 || opis.value.length > 100) {
slanje_forme = false;

opis.style.border = "4px solid red";
document.getElementById("opis_error").innerHTML = "Opis mora imati od 10 do 100 znakova!";
}
else {
opis.style.border = "0px solid transparent";
document.getElementById("opis_error").innerHTML = "";
}

var kategorija = document.getElementById("kategorija");
if(kategorija.value.length == 0) {
slanje_forme = false;

kategorija.style.border = "4px solid red";
document.getElementById("kategorija_error").innerHTML = "Kategorija mora biti odabrana!";
}
else {
kategorija.style.border = "0px solid transparent";
document.getElementById("kategorija_error").innerHTML = "";
}

var cijena = document.getElementById("cijena");
if(cijena.value.length == 0) {
slanje_forme = false;

cijena.style.border = "4px solid red";
document.getElementById("cijena_error").innerHTML = "Cijena mora biti navedena!";
}
else {
cijena.style.border = "0px solid transparent";
document.getElementById("cijena_error").innerHTML = "";
}

var slika = document.getElementById("slika");
    if(slika.value.length == 0){
    slanje_forme = false;
    
slika.style.border = "4px solid red";
document.getElementById("slika_error").innerHTML = "Morate izabrati sliku!";
}
else {
slika.style.border = "0px solid transparent";
document.getElementById("slika_error").innerHTML = "";
}

if(document.getElementById("arhiviraj").checked == true) {
var upit = confirm("Želite li sigurno arhivirati proizvod?");

if(upit == false) {
slanje_forme = false;
	}
}

if(slanje_forme != true) {
    return false;
	}
}
</script>

	</section>
</main>
<?php include 'footer.php' ?>
</body>
</html>