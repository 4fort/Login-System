<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    
<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <form class="container-fluid justify-content-start justify-content-center">
    <?php
    
      if(isset($_SESSION["useruid"])){
        echo "<a href='profile.php' class='m-2'><button type='button' class='btn btn-success'> <i class='bi bi-person-circle'></i>&nbsp" . $_SESSION["useruid"] . "</button></a>";
        echo "<a href='includes/logout.inc.php' class='m-2'><button type='button' class='btn btn-outline-danger'>Logout</button></a>";
      }
      else {
        echo "<a href='signup.php'><button class='btn btn-secondary m-2' type='button'>Sign Up</button></a>";
        echo "<a href='login.php'><button class='btn btn-outline-secondary m-2' type='button'>Log In</button></a>";
      }

    ?>
  </form>
</nav>