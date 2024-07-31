<html>

<head>
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style> 
      *{
        color:white;
        font-size:1rem;
      }
      body{
        width:100%;
        height:100vh;
        background-color:#393E46;
        /* background-color:#01204E; */
      }
      span{
        font-size:5rem;
      }
      div{
        height:100vh;
      }
      </style> 
</head>
<body >
    <div class="container d-flex justify-content-center flex-column align-items-center">

    <span class="mb-3">

        <h2 class="text-center">User  Data</h2>
    </span>
    <table class="table table-hover table-info">
        <thead  class="table-light">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>Delete Operation</th>
                <th>Update Operation</th>
                
            </tr>

        </thead>


<?php
// echo "hello world";



include "conn.php";

  $cmd="SELECT * FROM `curd` ";

  $data=mysqli_query($conn,$cmd);

while ($view=mysqli_fetch_array($data)) {

//   echo $view["id"]." ". $view["name"] ."<br>";
?>

<tr>
    <td><?php  echo $view["id"]  ?></td>
    <td><?php  echo $view["name"]  ?></td>
    <td><a href="delet.php?id=<?php echo $view["id"] ?>&& name=<?php echo $view['name']?> "><button class="btn btn-outline-danger">Delete</button></a></td>
    <td><a href="updat.php?id=<?php echo $view["id"] ?>&& name=<?php echo $view['name']?> "><button class="btn btn-outline-warning">Update</button></a></td>
</tr>


<?php 
}?>

</table>
</div>
</body>
</html>