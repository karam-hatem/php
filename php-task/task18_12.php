
<?php 
class MyClass{
    public function __construct(){
        echo "MyClass class has initialized!" ."<hr>";
     }
    }
    $class= new MyClass;
?>

<!-- /////////////////////////////////////////// -->

<?php 
 class  message{
    public function __construct($aa) {
        echo "Hello All, I am ".$aa ."<hr>";
    }
 }
 $classtwo= new  message ("Karam")  ;
?>

<!-- ////////////////////////////////////////// -->

<?php 
$num=5;
$factorial=1;

for($i=5 ; $i>=1 ; $i--){
    $factorial= $factorial* $i ;
}
echo "factorial $num = $factorial " ."<hr>";
?>

<!-- /////////////////////////////////////////// -->

<?php 
  $newarray = array(11,-2,4,35,0,8,-9);
  sort($newarray);
  print_r($newarray);
  print_r("<hr>");
?>

<!-- /////////////////////////////////////////// -->

<?php 
$date1 = new DateTime('1981-11-03');
$date2 = new DateTime('2013-09-04');

$interval = $date1-> diff($date2);
echo $interval->format('%Y years %M months and %D days')."<hr>";
?>


<!-- ///////////////////////////////////// -->

<?php 
$time = strtotime('12-08-2004');
$newformat = date('Y-m-d',$time);
echo $newformat;             
?>