<?php 
 


$id=$_GET['roll'];
$name=$_GET['name'];


include "conn.php";

if(isset($_GET['d'])){

$cmd="DELETE FROM `curd` where `id`='$id' ";
mysqli_query($conn,$cmd);
// echo "<script>";
// echo "alert('deleted record ')";
// echo "</script>";

// echo "<a href='form.php'> go back</a>";
// // echo $name,$id;
header("location:display.php");
}else{
    echo "failed";
}

?>