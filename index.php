<!DOCTYPE html>
<html>
<head>
<title>ZelenJava - Bakinja kuhinja u vašem domu</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animations.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script type="text/javascript" src="css/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="css/to-top.js"></script>
</head>

<body>
<span id="topy"></span>
<section id="navigation">
	<nav>
			<ul class="desktop">
				<li><a href="#onama">O NAMA</a></li>
				<li><a href="#proizvodi">ASORTIMAN</a></li>
				<li><a href="#gdje">GDJE KUPITI</a></li>
				<li><a href="index.php" title="HOME"><img src="slike/logo-m.png"></a></li>
				<li><a href="#likovi">NAŠ TIM</a></li>
				<li><a href="#kontakt">KONTAKT</a></li>
				<li><a href="proizvodi.php">PROIZVODI</a></li>
			<div class="clear"></div>
			</ul>
			<span class="cursor" onclick="openNav()">&#9776;</span><span class="logo-mobile"><img src="slike/logo-m.png"></span>
			<ul id="mobile" class="sidenav">
				<li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
				<li><a href="index.php">HOME</a></li>
				<li><a href="#onama">O NAMA</a></li>
				<li><a href="#proizvodi">ASORTIMAN</a></li>
				<li><a href="#gdje">GDJE KUPITI</a></li>
				<li><a href="#likovi">NAŠ TIM</a></li>
				<li><a href="#kontakt">KONTAKT</a></li>
				<li><a href="proizvodi.php">PROIZVODI</a></li>
			<div class="clear"></div>
			</ul>
	</nav>
</section>
<header>
<div><a href="unos.php">Unos proizvoda</a></div>
<div><a href="reg.php">Registracija</a></div>
<div><a href="login.php">Login</a></div>
	<div class="heading" id="top">
		<img src="slike/logo.png" alt="zelenjava">
		<h4>Bakina kuhinja u vašem domu</h4>
	</div>
</header>
<main>
	<section id="onama">
		<h2>Zašto Zelenjava?</h2>
		<p>U dehumaniziranom svijetu punog predrasuda, manjka empatije i neprihvaćanja različitosti, mi našim proizvodom donosimo novu nadu i toplinu u vaš dom.</p>
		<p>Recepture očuvane s koljena na koljeno, ukorijenjeno u tradiciji naših baka budile su optimizam i radost cijele obitelji.<br/>
		Iako danas postoje plastenici, te uvoz svježeg voća i povrća s drugih toplijih kontinenata, zimnica nije izostala s polica trgovina i samoposluga. Zbog specifičnog pripremanja i okusa ostala je gurmanska poslastica za svaki stol.</p>
		<p>Hladnoća zimskog razdoblja i manjak danjeg svijetla priziva psihičku anksioznost, a ljudi su se milenijima instiktivno okupljali u obiteljske zajednice kako bi preživjeli.<br/>Zelenjava proizvodi upravo donose taj osjećaj sigurnosti i obilje zdrave prehrane u najhladnijem dijelu godine. Od zimnice, džemova s minimalnim dodatkom rafiniranog šećera, do naše specijalne mješavine domačeg čaja, osiguravamo siguran i ugodan prolaz zimskih mjeseci.</p>
		<p> </p>
	</section>
	
	<section id="drugaciji" class="anim">
		<h2>Drugačiji od drugih</h2>
		<p>Po čemu smo drugačiji od drugih?</p>
		<ul>
			<li class="anim">Kontrolirano OPG podrijetlo namirnica</li>
			<li class="anim">Uzgajano na zemlji bez umjetnih gnojiva</li>
			<li class="anim">Bez industrijskih aditiva</li>
			<li class="anim">Temeljno na originalnim recepturama naših baka</li>
			<li class="anim">Pripreljeno s ljubavlju i posvečenošću</li>
			<li class="anim">Kvaliteta iznad kvantitete</li>
			
		</ul>
		<div class="zim-zena"></div>
	</section>
	
	<section id="proizvodi" class="anim">
		<h2>Naši proizvodi</h2>
		<figure class="ajvar"><img src="slike/ajvar.jpg" alt="">
		<span>Zimnica - crvenilo prirode u vašoj staklenci</span></figure>
		<figure><img src="slike/krastavci.jpg" alt="">
		<span>Zimnica - zelenilo prirode u vašoj staklenci</span></figure>
		<figure><img src="slike/cikla.jpg" alt="">
		<span>Zimnica - snaga cikle u staklenci</span></figure>
		<figure><img src="slike/caj.jpg" alt="">
		<span>Mješavina domačeg čaja - snaga toplog napitka</span></figure>
		<div class="clear"></div>
		<article><a href="proizvodi.php" class="button">Svi proizvodi</a></article>
	</section>

	<section id="gdje" class="anim">
		<h2>Gdje kupiti</h2>
		<p>Možete nas pronaći u svim prodavaonicama sljedećih partnera</p>
		<figure>
			<a href="http://www.spar.hr/"><img src="slike/spar.jpg"></a>
		</figure>
		<figure>
			<a href="http://www.lidl.hr/"><img src="slike/lidl.jpg"></a>
		</figure>
		<figure>
			<a href="http://tommy.hr/"><img src="slike/tommy.jpg"></a>
		</figure>
	<div class="clear"></div>
	</section>
	
	<section id="likovi" class="anim">
		<h2>Naš Tim</h2>
		<p><i class="fa fa-2x fa-angle-down"></i></p>
			<figure>
				<figcaption>
					<h3>TIHANA NIKAČ</h3>
					<p>Dobra vila uzgoja</p>
				</figcaption>
				<img src="slike/lik1.jpg">
			</figure>
			<figure>
				<figcaption>
					<h3>RADOVAN RUS</h3>
					<p>Alkemičar</p>
				</figcaption>
				<img src="slike/lik2.jpg">
			</figure>
			<figure>
				<figcaption>
					<h3>DEJAN ROGAN</h3>
					<p>PR Ninja</p>
				</figcaption>
				<img src="slike/lik3.jpg">
			</figure>
			<figure>
				<figcaption>
					<h3>VEDRAN KOVAČEK</h3>
					<p>Dostava iz snova</p>
				</figcaption>
				<img src="slike/lik4.jpg">
			</figure>
		<div class="clear"></div>
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