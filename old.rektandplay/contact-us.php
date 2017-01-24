<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/non-log.php';?>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/settings.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Rec & Play | Kontaktuj nás</title>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/head.php';?>
</head>
<body>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/navigation.php';?>
	<div class="contact-section">
		<div class="container">
			<div class="contact">
				<h3>Kontaktuj nás</h3>
				<p>
				Při jakémkoliv dotazu se nás <a>nebojte</a> kontaktovat.<br>
				Normální odezva od odpovědi je <a>1 den</a>.<br>
				Emaily spravují <a>3 lidé</a> pro lepší efektivitu.<br>
				<br>
				<big>Svůj <a>Email</a> zadávejte <a>správně</a>, abychom vám mohli <a>odpovědět</a>.</big>
				</p>
					<form method="post" action="/contact-engine.php">
						<input type="text" placeholder="Jméno" required="required" name="Name" id="Name" />
						<input type="text" placeholder="Tvůj E-mail" required="required" name="Email" id="Email" />
						<input type="text" placeholder="Předmět" required="required" name="Predmet" id="Předmět" />
						<textarea placeholder="Zpráva" required="required" name="Message" id="Message"></textarea>
						<input type="submit" name="submit" value="Odeslat zprávu" class="submit-button" />
					</form>
				<br>
				<p><small>Pro podporu: Je možné, že Email od návštěvníků budete mít ve <a>spamu</a>.</small></p>
			</div>
		</div>
	</div>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/footer.php';?>
</body>
</html>