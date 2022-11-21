<?php
 session_start();
 include "Connection.php";

 if(isset($_POST['update_dp']))
 {
    $userid=$_SESSION["userid"];
    $dir="img1/";
    $pic=$dir.basename($_FILES['pic']['name']);
    move_uploaded_file($_FILES['pic']['tmp_name'],$pic);

    $sql= "UPDATE profile SET pic='$pic' WHERE userid='$userid'";
    if (mysqli_query($cn,$sql)){
      $sql1 = "UPDATE signup SET pic='$pic' WHERE userid='$userid'";
    if (mysqli_query($cn, $sql1)) {
         echo "<script>location.href='profile.php'</script>";
    }
    }  
  }


 if(isset($_POST['update_name']))
 {
    $userid=$_SESSION["userid"];
    $name=htmlspecialchars($_POST['name']);

    $sql= "UPDATE profile SET name='$name' WHERE userid='$userid'";
    if (mysqli_query($cn,$sql)){
      $sql1 = "UPDATE signup SET name='$name' WHERE userid='$userid'";
    if (mysqli_query($cn, $sql1)) {
         echo "<script>location.href='profile.php'</script>";
    }
    }  
  }



  if(isset($_POST['update_gender']))
 {
    $userid=$_SESSION["userid"];
    $gender=$_POST['gender'];

    $sql= "UPDATE profile SET gender='$gender' WHERE userid='$userid'";
    if (mysqli_query($cn,$sql)){
      $sql1 = "UPDATE signup SET gender='$gender' WHERE userid='$userid'";
    if (mysqli_query($cn, $sql1)) {
         echo "<script>location.href='profile.php'</script>";
    }
    }  
  }
?>