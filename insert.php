<?php 


$id=$_GET['roll'];
$name=$_GET['name'];


include "conn.php";



if(isset($_GET['done'])){

$cmd="INSERT INTO `curd`(`id`,`name`) VALUES ('$id', '$name')";
mysqli_query($conn,$cmd);
// echo "Inserted successfully";
// echo $name,$id;

// echo "<script>";
// echo "alert('inserted record ')";
// echo "</script>";

// echo "<a href='form.php'> go back</a>";
header("location:display.php");
}else{
    echo "failed";
}

// if(isset($_POST['del'])){

    // $cmd="DELETE FROM `curd` where `id`='$id'";
    // mysqli_query($conn,$cmd);
    // echo "deleted successfully";
    // echo $name,$id;
    // }else{
    //     echo "failed";
    // }
    


?>