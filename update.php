<?php 
 


$id=$_GET['roll'];
$name=$_GET['name'];


include "conn.php";

if(isset($_GET['update'])){

$cmd="UPDATE `curd` SET `name`='$name' where `id`='$id' ";
mysqli_query($conn,$cmd);
// echo "<script>";
// echo "alert(' record  updated')";
// echo "</script>";

// echo "<a href='form.php'> go back</a>";
// echo $name,$id;
}else{
    echo "failed";
}
// header("location:form.html");
header("location:display.php");

?>