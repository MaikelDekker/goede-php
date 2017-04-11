<?php
date_default_timezone_set('Europe/Amsterdam');
$hour = date("G");
$minute = date("i");
$timezone = date("e");
$message;
if($hour >= "24" && $hour < "6")
{
	$message = "<p>Goede nacht</p>";
	$image = "backgrounds/night.png";
}else if($hour >= "6" && $hour < "12")
{
	$message = "<p>Goede morgen</p>";
	$image = "backgrounds/morning.png";
}else if($hour >= "12" && $hour < "18")
{
	$message = "<p>Goede middag</p>";
	$image = "backgrounds/afternoon.png";
}else if($hour >= "18" && $hour < "24")
{
	$message = "<p>Goede avond</p>";
	$image = "backgrounds/evening.png";
}
?>
<!DOCTYPE html>
<header>
<link rel="stylesheet" type="text/css" href="style.css">
<h1><?php echo $hour?>:<?php echo $minute ?></h1>
<h2><?php echo $message?></h2>
</header>
<body style="background-size: 90%; background-image: url(<?php echo $image?>)">
</body>
</html>