<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LOGIN</title>
</head>
<body class="bg-success">
    
<?php  require 'process2.php';?>

<div class="container-fluid">
     <div class="card col-4 mt-5 m-auto">
     <form action="login.php" class="form-control p-3" method="POST">
         <div class="">
             <label for="username">USERNAME</label>
             <input type="text" name="username" class="form-control">
         </div>
         <div class="">
             <label for="password">PASSWORD</label>
             <input type="password" name="password" class="form-control">
         </div>
         <div class="text-center mt-3">
             <button type="submit" class="btn btn-success"  name="login">LOGIN</button>
         </div>
     </form>
     </div>
 </div>

</body>
</html>