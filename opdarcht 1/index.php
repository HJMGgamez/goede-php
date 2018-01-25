<!DOCTYPE html>
<html>
<head>
	<title>Goede PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
    img {
    max-width: 100px;
    max-height: 100px;
    position: relative;
    -webkit-animation-name: high;
    -webkit-animation-duration: 4s;
    -webkit-animation-iteration-count: 1;
    animation-name: high;
    animation-duration: 4s;
    animation-iteration-count: 1;
}
@-webkit-keyframes high {
    0%   {left:0px; top:0px;}
    25%  {left:20%; top:0px;}
    50%  {left:40%; top:0px;}
    75%  {left:60%; top:0px;}
    100% {left:80%; top:0px;}
}
@keyframes high {
    0%   {left:0px; top:0px;}
    25%  {left:20%; top:0px;}
    50%  {left:40%; top:0px;}
    75%  {left:60%; top:0px;}
    100% {left:80%; top:0px;}
}
</style>
<?php
    $hour = date("H");
    if ($hour < "6") {
        $welcome = "Have a good night!<br>";
        echo '<body background="background/night.png">';
        echo '<img src="image/plane.png" >';
    } elseif ($hour < "12") {
        $welcome = "Have a good morning!<br>";
        echo '<body background="background/morning.png">';
        echo '<img src="image/plane.png" id="ani">';
    } elseif ($hour < "18"){
        $welcome = "Have a good afternoon!<br>";
        echo '<body background="background/afternoon.png">';
        echo '<img src="image/plane.png" id="ani">';
    } else {
        $welcome = "Have a good evening!<br>";
        echo '<body background="background/evening.png">';
        echo '<img src="image/ufo.png" id="ani">';
    }
    date_default_timezone_set('Europe/Amsterdam');
    date_default_timezone_get();
    echo "<h1>". $welcome . date("h:i:sa")."</h1>";
    $page = $_SERVER['PHP_SELF'];
      $sec = "4";
      header("Refresh: $sec; url=$page");
?>
</body>
</html>