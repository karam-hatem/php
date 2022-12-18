<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
</head>
<body>

    <?php
    // varibale 

    // $a=10;
    // $b=$a;
    // echo "Test".$b;
    // echo '<br>';
?>

<?php 

// file

// $f=file("karam.txt")or die("file not found"); // [die] تعمل على ايقاف script]
// echo '<pre>';
// print_r ($f);
// echo '</pre>';
// echo '<hr>';
?>
<!-- ///////////////////////////////////////////////// -->
<?php 
// $arr1=[1=>"a", 2=>"b", 3=>"c"];
// $arr2=[4=>"e", 5=>"f", 6=>"h"];
// $arr3=$arr1+$arr2;
// echo'<pre>';
// print_r($arr1+$arr2);
// print_r( $arr3);
// echo'</pre>';
// echo '<hr>';
?>

<!-- ////////////////////////////////////////////////// -->
<?php 
/// Opration

// echo 2 +  4 * 5; // 22
// echo'<br>';
// echo (2 +  4 )* 5; // 30
// echo'<br>';
// echo 10 || false ; // 1
// echo'<br>';
// var_dump(10 || false); // bool(true)
// echo'<br>';

// $a= 10 || false ; //$a=(10 || false) => $a =1 
// echo $a; // 1
// echo'<br>';

// $b =10 or false;
// echo $b; // 10
// echo '<hr>';
?>

<!-- ///////////////////////////////////// -->

<?php 
//  if (10>5) {

//  echo "First Condition";
//  echo "<hr>";
//  } 
//  elseif (10 > 6) {
//     echo "Second Condition ";
//  }

//  else{
//     echo "No Condition";
//     echo "<hr>";
//  }
?>
<!-- /////////////////////////////////////// -->

<?php 
// if exampel

// //  $page="Home";//  ويطبع الجمله[About] عند اضافة يبحث داخل الصفحه نفسها

// //  if($page =="About"){
    
// //     echo "This is The Page";
// //     echo '<hr>';
//  }
/////////////////////////////////////////

 // if else exampel

//  $title = "Home" ; // 

//  if( $title == ""){
//     echo " No page";

//  }
//  else{
//     echo $title;
//     echo"<br>" ;
//  }
////////////////////////////////////////////
// if ,elseif, else exampel

// $lang="Arabic";

// if( $lang == "Arabic"){
//     echo " مرحبا" ;

// } elseif($lang == "English"){
//     echo "Hello ";

// } else {
//     echo " No language";
// }
?>

<!-- //////////////////////////////////////////// -->

<?php 
/// if ,elseif, else exampel Advance

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
if ($_POST['lang']== 'ar'){
    header("location: ar.php"); //عند تنفيذ الامر ينتقل الى الصفحة التي أنشأتها
    exit(); 
}
if ($_POST['lang']== 'en'){
    header("location: en.php"); //عند تنفيذ الامر ينتقل الى الصفحة التي أنشأتها
    exit();
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option> 
            <option value="en">English</option>
            <option value="es">spanish</option> 
        </select>
        <input type="submit" value="GO">
        <hr>
    
    </form>
    
</body>
</html>
<!-- ///////////////////////////////////////////// -->


<?php 

$a=10;

if($a>5){
echo "good";
}
else{
    echo "bad";
}
echo "<br>";
echo "I love php becauas a  langauge";
echo "<hr>";

?>

<?php 
 

 ///switch

 $day="Mon";
 switch($day){

    case "Sat":
    echo "Hello to $day";
    break;

    case "sun":
    echo "Hello to $day";
    break;

    case "Mon":
    echo "Hello to $day"."<hr>";
    break;
 }
?>

<?php 
// while///

$i=1;
while($i<=3){
    echo "$i<br>";
 $i++ ;

}
?>

<?php
// for ////

echo "<hr>";

for($i=1;$i<=5;$i++){
    echo "$i<br>";
}
?>
<?php 
// foreach////
echo "<hr>";


$con=["jo","Eg","SY"];

echo '<pre>';
print_r($con);
echo '</pre>';

foreach($con as $contry){
    echo $contry ."<br>";
}


$cons_dis=["jo"=>10,"Eg"=>20,"SY"=>30];

echo '<pre>';
print_r($cons_dis);
echo '</pre>';

?>


<?php 
echo "<hr>";
////introdation function////

function hello_to($someone){
    echo "Hello Mr $someone<br>";
}
hello_to("karam");
hello_to("ahmad");
hello_to("ali");
?>





<?php 
echo "<hr>";
//function paramiter and arguments

function hello_too($one) // <--variabel/paramiter
{
    echo "hello $one <br>";
}
hello_too("malik") ;//<--Arguments/value
hello_too("Omar") ;

echo "<hr>";



function deep_freez($item){
    if($item === "water"){
        echo "make It ice <br>";

    }elseif($item==="fruits"){
        echo "make It frech <br>";

    }elseif($item ==="coca cala"){
      echo "make It cold <br>";
    }else{
        echo "NO item";
    }
}
deep_freez("water");
deep_freez("fruits");
deep_freez("coca cala");
?>



<?php 
/// function Return and null
echo "<hr>";

$prizes =["Pc","Xbox","Apple TV"," laptop","iphone"];
function get_number($num_one,$num_two){

    echo $num_one + $num_two;
}
get_number(2,1)."<br>"; //3
echo $prizes[3] ."<br>";//laptop

$prizes_number=get_number(2,1);
var_dump($prizes_number)."<br>";// رح ترجع nullلانه function برجع لحالو retaurn
?>


<?php 
echo "<hr>";
//function defallt parameter

function get_data($Contry="Praivit contry",$name="Praivit",$age="Praivit",$address = "Praivit address"){
    $line_one ="Your Contry Is $Contry And Your Name Is $name <br> ";
    $line_two ="Your Age Is $age And Your live Is $address <br> ";
    return $line_one . $line_two;
}
    // echo get_data(address:"jordan");
?>




<?php 
// //function varibail argument and spreed suntask
// echo "<hr>";
// // function calculation(){
//     // echo "Number of Argument". func_num_args()."<br>";//بتجيب عدد المتغيرات داخل fun
//     // echo "Argument index number3 ". func_get_arg(3)."<br>";//هي عبارة عن funبترجع جميع العناصر الموجوده عندي داخل array
//     // print_r(func_get_args());
//     // $result=0;
//     // foreach(func_get_args() as $arg):
//     //     $result += $arg;
//     // endforeach;
//     // echo $result;
// }
// //    calculation(10,20,50,30,40)




   function calc(...$nums) { 
    // echo "Number of Argument". func_num_args()."<br>"; //بتجيب عدد المتغيرات داخل fun
    echo "Argument index number3 ". $nums[3]."<br>"; //هي عبارة عن funبترجع جميع العناصر الموجوده عندي داخل array
    print_r($nums);
    $result=0;
    foreach($nums as $num):
        $result +=$num;
    endforeach;
    echo $result;

}
   calc(10,20,50,30,40,50) ."<hr>";//بقدر اضيف عليها قد ما بدي ارقام بدون ما نعرف var

?>










   
</body>
</html>