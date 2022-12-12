<?php  
session_start();

?>
<?php  
echo $_SESSION['table'] ;


echo "Last modified " . date("l, dS F, Y, h:ia" , $_SESSION['file_last_modified'])."<hr>";



echo $_SESSION['filePath']=$filePath;

?>