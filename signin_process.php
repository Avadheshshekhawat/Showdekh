<?php
$err="";
include_once('connection.php');

if(isset($_POST['signin']))
{
    $userid=$_POST['userid'];
    // $email=$_POST['email'];
    $password=$_POST['password'];

    $get="select * from signin where userid='$userid' and password='$password'";
    $query=mysqli_query($cn, $get);
    $rw=mysqli_num_rows($query);

    if($rw > 0)
    {
        session_start();
        $_SESSION['userid']=$userid;
        // $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("location:index.php");
    }
    else
    {
        $err="invalid User-id or Password";
    }
}

?>