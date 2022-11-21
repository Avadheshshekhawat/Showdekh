<?php
include_once('connection.php');
session_start();
?>

<?php
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $userid=$_POST['userid'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $dir="img1/";
    $pic=$dir.basename($_FILES['pic']['name']);
    move_uploaded_file($_FILES['pic']['tmp_name'],$pic);

    $insert1="insert into signup values ('','$name','$userid','$email','$gender','$password','$pic')";
    $query=mysqli_query($cn,$insert1);
    if($query)
    {
        $insert2="insert into signin values ('','$userid','$email','$password')";
        $query=mysqli_query($cn,$insert2);
        if($query)
        {
            $insert3="insert into profile values ('','$name','$userid','$email','$gender','$pic')";
            $query=mysqli_query($cn,$insert3);
            if($query)
            {
            header("location:sign_in.php");
            }
        }
    }
}
?>