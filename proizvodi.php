<?php include 'header.php'; ?>


<main>
	<section id="trgovina">
		<h2>Proizvodi</h2>
		<article>
<?php	
// DB connection
include 'connection.php';
		
$query = "SELECT * FROM proizvodi";			
$result = mysqli_query($dbc, $query) or die(mysqli_connect_error());
			
while($row = mysqli_fetch_array($result)) {
if ($row['arhiviraj'] == 0) {
echo '<article>
<h3> '. $row['naziv'] .'</h3>
<p>Šifra: '. $row['sifra'] .'</p>
<p>Vrsta: '. $row['kategorija'] .'</p>
<p>Opis proizvoda: '. $row['opis'] .'</p>
<p>Cijena: '. $row['cijena'] .' kn.</p>';
if ($row['slika'] != ""){
echo '<img src="'. $row['slika'] .'" alt="'. $row['slika'] .'">';}
echo '<hr>
</article>
<br>';
}}
mysqli_close($dbc);
?>	
           </article>
		
	</section>
</main>

<footer>
	<h2>Kontakt</h2>
	
	<div id="kontakt" class="anim">
		<section id="cform">
			<form>
				<div class="flo">
				<label for="name">Ime</label>
				<input type="text" id="name" placeholder="Enter name" required="required">
				<label for="email">Email Adresa</label>
				<input type="email" id="email" placeholder="Enter email" required="required">
				<label for="subject">Naslov</label>
				<select id="subject" name="subject" required="required">
                    <option value="na" selected="">Izaberite jedan:</option>
                    <option value="service">Narudžbe - Marketing</option>
                    <option value="suggestions">Informacije o proizvodima</option>
                    <option value="product">Pohvale - pritužbe</option>
                </select>
				</div>
				<div class="flo">
                    <label for="name">Poruka</label>
                    <textarea name="message" id="message" rows="9" cols="25" required="required" placeholder="Poruka"></textarea>
					<button type="submit" class="button">POŠALJI PORUKU</button>
				</div>
				
			</form>
			<aside>
				<h5>GLAVNI URED</h5>
				<h5>Zelenjava d.o.o.</h5>
				Odvojak Milke Budaka 28 <br/>
				10180 Čučerje<br/>
				Tel: (123) 456-7890
				<h5>Email</h5>
				<a href="mailto:email.name@example.com">info@zelenjava.hr</a>
				<p style="margin: 20px 0 7px 0;">Posjetite nas i na društvenim mrežema</p>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-google"></i></a>
			</aside>
			<div class="clear"></div>
		</section>
		
	<div class="clear"></div>
	</div>
	<p style="margin-top: 30px;"> </p>
	<p>Copyright (c) 2017. Radovan Rus</p>
	<h3><a href="http://www2.tvz.hr/">TVZ</a></h3>
	<a href="#topy"><i class="fa fa-angle-up"></i></a>
</footer>

<script>
function openNav() {
    document.getElementById("mobile").style.width = "250px";
}

function closeNav() {
    document.getElementById("mobile").style.width = "0";
}
</script>
<script>
	$(window).scroll(function() {
		$('.anim').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+600) {
				$(this).addClass("bigEntrance");
			}
		});
	});
</script>
</body>
</html>