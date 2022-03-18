<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>WELCOME</title>
</head>
<body class="">

<?php require 'process1.php'; ?>

<div class="container-fluid">
    <div class="narbar bg-info px-3 ">
        <div class="navbar-header">
            <div class="col-12">
              <label for=""><h1><a class="btn btn-outline-secondary navbar-brand " href="index.php">HOME</a></h1></label>
              <label for=""><h1><a class="btn btn-outline-secondary navbar-brand " href="login.php">LOGIN</a></h1></label>
              <label for=""><h1><a class="btn btn-outline-secondary navbar-brand " href="register.php">REGISTER</a></h1></label>
              <label  for=""><h1><a href="login.php" class="btn btn-outline-secondary navbar-brand">LOGOUT</a></h1></label>
            </div>
        </div>
</div>


<div class="container-fluid">
<?php
    $mysqli = new mysqli('localhost','rick','rickdatabase','rickdb') or die(mysqli_errror($mysqli));
    $result = $mysqli->query("SELECT * FROM blog") or die ($mysqli->error);
?>
    <div class="card col-4 p-3 bg-dark m-auto mt-3">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th colspan="2">Action</th>
                </tr>   
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>

                <?php endwhile; ?>
            </thead>
        </table>
    </div>
    <?php
   
   function pre_r($array){
       echo '<pre>';
       print_r($array);
       echo '</pre>';
   }

?>

</div>

<div class="container-fluid">
     <div class="card col-6 mt-5 m-auto">
     <form action="index.php" class="form-control col-6 bg-info" method="POST">
         <input type="hidden" name="id" value="">
         <div class="p-2">
             <label>TITLE</label>
             <input type="text" class="form-control" value="" name="title">
         </div>
         <div class="p-2">
             <label>DATE</label>
             <input type="text" class="form-control" value="" name="date">
         </div>
         <div class="text-center mt-3">
             
         <?php if($edit == true):?>
             <button class="btn btn-warning" name="update">UPDATE</button>
             <?php else:?>
             <button class="btn btn-primary" name="save">SAVE</button>
             <?php endif; ?>
             
         </div>
     </form>
     </div>
 </div>


 
</div>


</body>
</html>