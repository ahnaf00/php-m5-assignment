<?php

// $firstname  = $_POST["firstname"]??"";
// $lastname   = $_POST["lastname"]??"";
// $age        = $_POST["age"]??"";
// $email      = $_POST["email"]??"";
// $password   = $_POST["password"]??"";

$firstname  = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";
$lastname   = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";
$age        = filter_input(INPUT_POST, "age", FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";
$email      = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";
$password   = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";
$role = "user";



$errorMessage = "";


echo $firstname."\n";
echo $lastname."\n";
echo $age."\n";
echo $email."\n";
echo $password."\n";


if($email !="" && $password != "")
{
    $fp = fopen("./data/users.txt", "a");

    fwrite($fp, "\n{$role}, {$email}, {$password}, {$firstname}, {$lastname}, {$age}");
    fclose($fp);

    header("Location:login.php");
}
else
{
    $errorMessage = "Wrong email or password";
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="my-4 text-center">Sign Up</h1>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="signup.php" method="POST">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firts Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="First name..">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="Last Name..">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age" aria-describedby="Age..">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>