<?php
session_start();
include("./cookie.php");
include("./usersInfo.php");

$email      = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";
$password   = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS)??"";

$errorMessage = "";

if(isset($_SESSION["email"]))
{
    header("Location:index.php");
}


for($i = 0; $i<count($roles); $i++)
{
    if($email == $emails[$i] && $password == $passwords[$i])
    {
        $_SESSION["role"]       = $roles[$i];
        $_SESSION["email"]      = $emails[$i];
        $_SESSION["firstname"]  = $firstnames[$i];
        $_SESSION["lastname"]   = $lastnames[$i];
        $_SESSION["age"]        = $ages[$i];
        header("Location: index.php");
        exit;
    }
    else
    {
        $errorMessage = "Wrong email or password";
    }
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
            <h1 class="my-4 text-center">Login</h1>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-6">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="Email..." value="<?php if(isset($_COOKIE["email"])){ echo $_COOKIE["email"]; } ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"]; } ?>"> 
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <div class="my-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" value="<?php if(isset($_COOKIE["password"])){ echo "checked"; } ?>">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div>Don't have an account ? <a href="signup.php">Sign Up</a> here</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>