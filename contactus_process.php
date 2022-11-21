<?php
include_once('connection.php');
?>

<?php
if(isset($_POST['contact']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="insert into contactus values ('','$name','$email','$subject','$message')";
    $ck=mysqli_query($cn,$query);
    
}
?>