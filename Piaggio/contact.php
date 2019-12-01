
<?php

$subjekt = $HTTP_POST_VARS['subjekt'];
$poruka = $HTTP_POST_VARS['vporuka'];
$email_posiljaoca = $HTTP_POST_VARS['yemail'];
$ime_posiljaoca = $HTTP_POST_VARS['ime'];
$mail_primaoca = "daniel4molnar@gmail.com";
$header = "From: $ime_posiljaoca <$mail_posiljaoca>\c\r";
//slanje maila
$status = mail( $mail_primaoca, $subjekt, $poruka, $header);
//ispis statusa
if($status == true){
	echo 'Poruka je poslata';
}else{
	echo 'Poruka nije poslata';
}

?>

<!DOCTYPE html>
<html>
	<head>
	<title>Slanje poruke ...</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	</head>

	<body>

		<div align="center">
			<p>&nbsp;</p>
			<?php if(mail($email, $subj, $text , $headers)){
			?>
			<p>Mail je uspješno poslan!</p>
		<?php } else {?>
			<p>Greška, mail nije poslan!</p>
		<?php } ?>
		<p>
		<input type="submit" name="Submit" value="OK" onmouseup="location='http://www.tvojsajt.com'">
		</p>
		</div>
	</body>
</html>

