<?php
   include 'actionProduct.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD App</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="javascript:window.history.back(-1);">Go back ◀️</a>
    <!-- Toggler/collapsibe Button -->
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <div class="text-center">
        </div>
        <h4 class="text-light">brand : <?= $vbrand; ?></h4>
        <h4 class="text-light">Name : <?= $vname; ?></h4>
        <h4 class="text-light">Price : <?= $vprice; ?></h4>
        <!--  -->
    
        <img src="<?php $vimage?>" alt="product1" class="img-fluid">

        <h4 class="text-light">register : <?= $vregister; ?></h4>
      </div>
    </div>
  </div>
</body>

</html>