<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>



<form method='POST'>
   <h3>Please input your name:</h3>
 <input type="text" name="name">
 <input type="submit" value="Submit">
 </form><br>


<?php
echo PHP_VERSION;
echo "<hr>";


echo "Tomorrow I 'll learn PHP global variables." . "<br>";

echo "This is a bad command: del c:.". "<hr>" ;


$name = $_POST['name'];
echo "<h3> Hello $name </h3>" . "<hr>" ;


$ip= $_SERVER['REMOTE_ADDR']  ."<hr>";
 echo "$ip";



 echo __FILE__ . "<hr>";



 $url = 'https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<hr>";




$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text . "<hr>";

//echo header('Location: https://www.w3resource.com/');

?>    




</body>
</html>