<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4</title>
</head>
<body>

<?php 

$color=array('red','green','white');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[0]."carpet, the". $color[1]."lawn, the ".$color[2] ."house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."<hr>";

/////////////

$color = array('white', 'green', 'red');

sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>" ."<hr>";

////////////////////

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );


foreach($cities as $country=> $capital){
    {
        echo "The capital of $country is $capital"."<br>" ."<hr>";
        
        }      
}
/////////////////////

$color=array(4=>'white',6=>'green',11=>'red');
echo reset($color)."<hr>";

//////////////////////////

$num = array( '1','2','3','4','5' );
$push = '$';
array_splice( $num, 3, 0, $push );

foreach ($num as $x) 
{echo "$x " ."\n"."<br>" ; }

////////////////////////////////

$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"appel"); 

ksort($fruits);
foreach($fruits as $x=>$x_value)
{
echo $x. $x_value."<hr> ";
}

///////////////////////////////////////



/////////////////////////////////////

$a1 = array("color" => "red", 2, 4);
$a2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($a1,$a2)) ;
echo "<hr>";

////////////////////////////////











?>    
</body>
</html>