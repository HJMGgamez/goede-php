<!DOCTYPE html>
<html>
<head>
	<title>Goede PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
    $hour = date("H");
    if ($hour < "6") {
        $welcome = "Have a good night!<br>";
        echo '<body background-image="css/night.png">';
    } elseif ($hour < "12") {
        $welcome = "Have a good morning!<br>";
        echo '<body background-image="css/morning.png">';
    } elseif ($hour < "18"){
        $welcome = "Have a good afternoon!<br>";
        echo '<body background-image="css/afternoon.png">';
    } else {
        $welcome = "Have a good evening!<br>";
        echo '<body background-image="css/evening.png">';
    }
    date_default_timezone_set('Europe/Amsterdam');
    date_default_timezone_get();
    echo "<h1>". $welcome . date("h:i:sa")."</h1>";
?>
</body>
</html>