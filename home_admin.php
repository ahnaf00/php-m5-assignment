<?php
session_start();
include("./usersInfo.php");

if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin")
{
    header("Location:login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Welcome to Admin Panel</h1>
                <h1 class="text-center">Welcome <?php echo $_SESSION["firstname"]; ?></h1>
                <div>
                  <div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Roles</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Age</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>                          
                        <?php
                          
                          for($i = 0; $i<count($roles);$i++)
                          {
                            ?>
                            <tr>
                              <td><?php echo $roles[$i]; ?></td>
                              <td><?php echo $firstnames[$i]; ?></td>
                              <td><?php echo $emails[$i]; ?></td>
                              <td><?php echo $ages[$i]; ?></td>
                              <td>
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash"></i>
                              </td>
                            </tr>
                            <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div><a href="./logout.php" class="btn btn-danger my-3">Logout</a></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>