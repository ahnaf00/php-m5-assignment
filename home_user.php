<?php
session_start();

if(!isset($_SESSION["role"]) || $_SESSION["role"] != "user")
{
  header("Location:login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex justify-content-center mt-5">
      <div class="row">
        <div class="col-md-12">
          <h1>Welcome to User Panel</h1>
          <h1>Welcome <?php echo $_SESSION["firstname"]; ?></h1>
          <h2>Role : <?php echo $_SESSION["role"]; ?></h2>
          <div ><a href="./logout.php" class="btn btn-danger my-3">Logout</a></div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>