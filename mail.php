
	<?php
		$to      = 'przemowu@interia.pl';
		$mail = $_POST['mail'];
		$numer = $_POST['numer'];
		$komentarz = $_POST['komentarz'];
		$wysokosc = $_POST['wysokosc'];
		$szerokosc = $_POST['szerokosc'];
		$radio = $_POST['radio'];
		$subject = 'the subject';
		$message = 'Nowe zamówienie' . ' 
		' . 'Wysokość: ' . $wysokosc . 'mm' . ' 
		' . 'Szerokość: ' . $szerokosc . 'mm' . ' 
		' . 'Szerokość pasów: ' . $radio . 'mm' . ' 
		' . 'Numer kontaktowy: ' . $mail .' 
		' . 'Adres e-mail: ' . $numer .'
		' . 'Dodatkowe informacje: ' . $komentarz;
		
		mail($to, $subject, $message);
		
	?> 
	<html>
    <head>
        <meta charset="utf-8" />
        <title>Pasy PCV</title>
		<p>Wiadomość została wysłana</p>
		<meta http-equiv="Refresh" content="1;url=http://kurtynyzpcv.pl/">
   </head>
   <body>
    ...
    </body>
</html>
	
	