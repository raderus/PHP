<!DOCTYPE html>
<html>
<head>
<title>Reg</title>
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
    <h2>Registracija</h2>

<form id="registracija" name="registracija" method="POST" action="registracija.php">
<p>Ime: 
<input type="text" name="name" required /></p>
<p>Korisničko ime: 
<input type="text" name="username" required /></p>
<p>Password: 
<input type="password" name="password1" required /></p>
<p>Ponovite password: 
<input type="password" name="password2" required /></p>
<p>								
<input id="save" name="save" type="submit" value="Registriraj se" class="button" required></p>

</form>
    </section>
</main>
<?php include 'footer.php' ?>
    
<script type="text/javascript">
document.getElementById("save").onclick = function (event) 
	{
if ((document.getElementsByName("password1")[0]).value != (document.getElementsByName("password2")[0]).value) {
    alert("Lozinke se ne podudaraju");
    event.preventDefault();
    }
}
</script>
</body>
</html>