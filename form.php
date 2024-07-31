<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crud</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      *{
        color:#DCBFFF;
        font-size:1.2rem;
      }
      body{
        width:100%;
        height:100vh;
        /* background-color:#322C2B; */
        background-color:#01204E;
      }
      div{
        height:100vh;
      }
      input{
        margin:1rem;
        color:black;
      }
    </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center flex-col align-items-center">

    
      <form action="insert.php" method="get" >
    <h1 class="text-center">Crud operation</h1>
      id:<input type="number" name="roll" /> name:<input
        type="text"
        name="name"
      /><br /><br />
      <button name="done" class="btn btn-outline-primary">Insert</button>
    </form>
    <a href="display.php"> <button  class="btn btn-outline-success">display</button></a><br>
    <!-- <a href="delete.html">delete</a><br> -->
  <!-- ?php

// include "conn.php";

//   $cmd="SELECT * FROM `curd` ";

//   $data=mysqli_query($conn,$cmd);

// while ($view=mysqli_fetch_array($data)) {

//   echo $view["id"]." ". $view["name"] ."<br>";

// }
  <!-- 
    </div>
  </body>
</html>
