<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
// class student {
  // Properties
//   public $name;
//   public $age;
//   public $gender;

  // Methods

    // function __construct($name, $age, $gender){
    //     $this->name =$name;
    //     $this->age =$age;
    //     $this->gender =$gender;
    // }

//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }

//   function set_age($age) {
//     $this->age = $age+5;
//   }
//   function get_age($age) {
//     return $this->age+5;
// }
// function student_gender($gender){
//     $this->gender= $gender ;
//     return $this->gender;
// }
// }

// $std1 = new student();
// $std2 = new student();
// $std3= new student();
// $std4= new student('ahmeeeeed',655 , 'Male');

// $std1->set_name('ahmad');
// $std2->set_name('ali');
// $std3->set_name('maria');

// echo $std1->get_name();
// echo "<br>";
// echo $std2->student_gender("male") ;
// print_r($std4);
?>

<?php
// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_merge($a1,$a2)) ;
// echo "<hr>";
// ?>

 <?php
// $a1=array("a"=>"red","b"=>"green");
// $a2=array("a"=>"blue","d"=>"yellow");
// print_r(array_merge($a1,$a2));
// echo "<hr>";
// ?>

<?php
// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_replace($a1,$a2));
// echo "<hr>";
// ?>

 <?php
// $a1=array("10"=>"red","20"=>"green");
// $a2=array("10"=>"blue","30"=>"yellow");
// print_r(array_replace($a1,$a2));
// echo "<hr>";
// ?> 


<?php
class product 
{
    public $name;
    public $price;
    public $photo;

    function print(){
        echo "<div>";
        echo '<h3>'. $this->name .'</h3>' .'<br>';
        echo "<img src='{$this -> photo}'style=\"width:200px\">" .'<br>';
        echo '<p style="font-weight:bold">'."the price is \$".$this->price .'</p>'. '<br>';
        echo "</div>";
        echo "<hr>";
    }
}
$product1 = new product;
$product1 -> name = 'laptop';
$product1 -> photo = './image/labtop.jpg';
$product1 -> price = 380;
$product1 ->  print() ;
$product2 = new product;
$product2 -> name = 'phone';
$product2 -> photo = './image/phone.jpg';
$product2 -> price = 1000;
$product2 ->  print();

?>


<?php 
class Human {
    // Properties
    public $age=20;
    private $name;
  public function newAge(){
        $this->age = $this->age + 5;
        echo "the object has ".$this->age."years old"."<br>";
  }

  function set_namee($name) {
    $this->name = $name;
  }
  function get_namee() {
    return $this->name;
  }
}

$h1=new Human();
$h1->age =22;
echo $h1->age ."<br>";
$h1->newAge();

$h1->set_namee("ahmad");
echo "Name: " . $h1->get_namee()."<br>";


$h2=new Human();
$h2->age =30;
// echo $h2->age."<br>";
$h2->newAge();

$h3=new Human();
$h3->set_namee("Asem");
echo "Name: " . $h3->get_namee()."<br>";
echo "<hr>";

?>

<?php 
// array_chunk.(array,length,preserve)
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$array1 = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
print_r (array_chunk($array1,2));
echo '</pre>';

// array_chunk.

echo "<hr>";
echo '<pre>';
print_r (array_chunk($array1,2,true));
echo '</pre>';

//array_change_key_case.(array,case)

echo "<hr>";
echo '<pre>';
print_r (array_change_key_case($array1));
?>

</body>
</html>