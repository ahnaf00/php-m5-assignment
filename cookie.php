<?php 
if(!empty($_POST["remember"]))
{
    setcookie("email", $_POST["email"], time()+3600);
    setcookie("password", $_POST["password"], time()+3600);
}
// else
// {
//     setcookie("email","" , time()-3600);
//     setcookie("passwo","" , time()-3600);

// }


?>