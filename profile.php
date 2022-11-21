<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Dekh</title>



    <!-- =============================================== -->
    <!-- bootstrap icon cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- =============================================== -->





    <!-- =============================================== -->
    <!-- Bootstrap5 CSS CDN link Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap5 CSS CDN link End -->
    <!-- =============================================== -->




    <!-- =============================================== -->
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- =============================================== -->




</head>

<body>
    <!-- Header section php page link start -->

    <?php
        include_once('header.php');
        ?>

    <!-- Header section php page link end -->






    <form action="" method="post" enctype="multipart/form-data">

        <?php
                $get="select * from profile where userid='{$_SESSION["userid"]}'";
                $query=mysqli_query($cn,$get);
                if(mysqli_num_rows($query) > 0){
                    while($rw = mysqli_fetch_array($query)){
        ?>

        <div class="container">
            <div class="row">



                <!-- Profile Card Start -->
                <div class="col-sm-12 col-md-12 col-12 profile-card">
                    <div class="row">

                        <div class="profile-pic-bg">
                            <center>
                                <div class="profile-pic-div">
                                    <img class="profile-pic img-fluid" src="<?php echo $rw['pic'] ?>" alt="profile-pic">
                                    <div class="update-profile-pic-btn-bg"><button type="button"
                                            class="update_prifile_img_icon" data-bs-toggle="modal"
                                            data-bs-target="#profile_image_update_modal"><i
                                                class="bi bi-camera-fill"></i></button></div>
                                </div>
                            </center>
                        </div>
                         <div class="usrd"><center><b class="profile_userid"><?php echo $rw['userid'] ?></b></center></div>
                        <div class="name">
                            <center><b class="profile_name"><?php echo $rw['name'] ?></b><br><button type="button"
                                class="update_prifile_icon name_update_icon" data-bs-toggle="modal"
                                data-bs-target="#profile_name_update_modal"><i class="bi bi-pencil-square"></i></button></center>
                        </div>
                        <div class="eml"><center><b><?php echo $rw['email'] ?></b></center></div>
                        <div class="gen"><center><b><?php echo $rw['gender'] ?></b><br><button type="button"
                                class="update_prifile_icon gender_update_icon" data-bs-toggle="modal"
                                data-bs-target="#profile_gender_update_modal"><i
                                    class="bi bi-pencil-square"></i></button></center>
                        </div>

                    </div>
                </div>
                <!-- Profile card end -->

            </div>
        </div>

        <?php
                    }
                }
            ?>
    </form>






    <!-- Update Profile Picture Modal Start -->
    <form action="Profile_update.php" method="post" enctype="multipart/form-data">

        <?php
                $get="select * from profile where userid='{$_SESSION["userid"]}'";
                $query=mysqli_query($cn,$get);
                if(mysqli_num_rows($query) > 0){
                    while($rw = mysqli_fetch_array($query)){
            ?>


        <div class="modal fade" id="profile_image_update_modal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hey! <b
                                style="color:green;"><?php echo $rw['name'] ?></b> You can update your profile
                            <b>picture</b> here.
                        </h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="col-sm-12 col-md-12 col-12 update_profile_field"><input type="file"
                                class="form-control" name="pic"></div>

                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-12 col-md-12 col-12 update-btn">
                            <center><button type="submit" name="update_dp" class="btn btn-outline-danger">Update
                                    Profile</button></center>
                        </div>
                    </div>
    </form>
    </div>
    </div>
    </div>
    <?php
         }
        }
    ?>
    <!-- Update Profile Picture Modal End -->







    <!-- Update Profile name Modal Start -->
    <form action="Profile_update.php" method="post" enctype="multipart/form-data">

        <?php
                $get="select * from profile where userid='{$_SESSION["userid"]}'";
                $query=mysqli_query($cn,$get);
                if(mysqli_num_rows($query) > 0){
                    while($rw = mysqli_fetch_array($query)){
            ?>


        <div class="modal fade" id="profile_name_update_modal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hey! <b
                                style="color:green;"><?php echo $rw['name'] ?></b> You can update your profile
                            <b>name</b> here.
                        </h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="col-sm-12 col-md-12 col-12 update_profile_field">Name:- <input
                                class="update_name_input" type="text" value="<?php echo $rw['name'] ?>" name="name">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-12 col-md-12 col-12 update-btn">
                            <center><button type="submit" name="update_name" class="btn btn-outline-danger">Update
                                    Profile</button></center>
                        </div>
                    </div>
    </form>
    </div>
    </div>
    </div>
    <?php
         }
        }
    ?>
    <!-- Update Profile name Modal End -->







    <!-- Update Profile Gender Modal Start -->
    <form action="Profile_update.php" method="post" enctype="multipart/form-data">

        <?php
        $get="select * from profile where userid='{$_SESSION["userid"]}'";
        $query=mysqli_query($cn,$get);
        if(mysqli_num_rows($query) > 0){
            while($rw = mysqli_fetch_array($query)){
    ?>


        <div class="modal fade" id="profile_gender_update_modal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hey! <b
                                style="color:green;"><?php echo $rw['name'] ?></b> You can update <b>gender</b> here.
                        </h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="col-sm-12 col-md-12 col-12 update_profile_field">Gender:- <input
                                class="update_name_input" type="text" value="<?php echo $rw['gender'] ?>" name="gender">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-12 col-md-12 col-12 update-btn">
                            <center><button type="submit" name="update_gender" class="btn btn-outline-danger">Update
                                    Profile</button></center>
                        </div>
                    </div>
    </form>
    </div>
    </div>
    </div>
    <?php
 }
}
?>
    <!-- Update Profile Gender Modal End -->












    <!-- Footer section php page link start -->

    <?php
        include_once('footer.php');
        ?>

    <!-- Footer section php page link end -->






    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Bootstrap5 JS CDN Link Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap5 JS CDN Link End -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->




    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Jquery link start -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Jquery link end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->




    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- External JS start -->
    <script src="js/trailer_modal.js"></script>
    <!-- External JS end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->





</body>

</html>