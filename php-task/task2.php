<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>
</head>
<body>


<?php

    $a=1000;
    $b=1200;
    $c=1400;

    echo "<table border=1>

    <tr> <td><font color=blue > Salary of Mr. A is</td> <td>$a$</font></td> </tr> 

    <tr> <td><font color=blue> Salary of Mr. B is</td> <td>$b$</font></td>  </tr>

    <tr> <td><font color=blue> Salary of Mr. C is</td> <td>$c$</font></td>  </tr>

    </table>"."<br>"."<hr>";


$_SESSION['table'] = "<table border=1>

<tr> <td><font color=blue > Salary of Mr. A is</td> <td>$a$</font></td> </tr> 
<tr> <td><font color=blue> Salary of Mr. B is</td> <td>$b$</font></td>  </tr>
<tr> <td><font color=blue> Salary of Mr. C is</td> <td>$c$</font></td>  </tr>

</table>"."<br>"."<hr>";


$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name);

$_SESSION['file_last_modified'] = $file_last_modified;
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."<hr>";




$filePath = "task2.php";
$lines = count(file($filePath));

$_SESSION['filePath']=$filePath;
echo $lines;
?>


</body>
</html>