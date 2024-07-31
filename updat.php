<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crud</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
        color:black;
        margin:1rem;
      }
    </style>
  </head>

  <body>
    <div class="container d-flex justify-content-center flex-col align-items-center">

    
      <form action="update.php" method="get" >
    <h1 class="text-center">Update operation</h1>
      id:<input type="number" name="roll" value="<?php echo $_GET['id'] ?>" />
       name:<input
        type="text"
        name="name"
        value="<?php echo $_GET['name'] ?>"
      /><br /><br />
      <button name="update" class="btn btn-outline-primary">Update</button>
    </form>
</body>
</html>
