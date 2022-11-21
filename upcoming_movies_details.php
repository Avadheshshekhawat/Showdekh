<?php
include_once('contactus_process.php');
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

    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Header section php page link start -->

    <?php
  include_once('header.php');
  ?>

    <!-- Header section php page link end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->








    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Main content start -->
    <?php
       $get="select * from  upcoming_movies where movie_id='".$_GET['id']."'";
       $query=mysqli_query($cn,$get);
       $m=mysqli_fetch_array($query);
    ?>
    <div class="container-fluid">
      <div class="row">
            <div class="col-sm-12 col-md-12 col-12 banner-img-bg">
               <img src="<?php echo $m['banner'];?>" class="img-fluid banner-img" alt="">
               <a href="<?php echo $m['trailer_link']; ?>" target="_blank" style="text-decoration:none;"><button type="button" class="btn btn-success trailer-btn">Watch Trailer</button></a>
            </div>

            <div class="col-sm-12 col-md-12 col-12 movie-details">
                <h2><b><?php echo $m['movie_name'];?></b></h2><hr>
                <h4><b>Release Date</b></h4> <h6><?php echo date('d-M-Y',strtotime($m['release_date'])); ?></h6><hr>
                <h4><b>Run Time</b></h4> <h6><?php echo $m['run_time'];?></h6><hr>
                <h4><b>Cast</b></h4> <h6><?php echo $m['cast'];?></h6><hr>
                <h4><b>Director</b></h4> <h6><?php echo $m['director'];?></h6><hr>
                <h4><b>About Movie</b></h4> <h6><?php echo $m['about_movie'];?></h6>
            </div>
      </div>
    </div>
    <!-- Main content end -->
  <!-- ===================================================== -->
  <!-- ===================================================== -->


   








    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Footer section php page link start -->

    <?php
      include_once('footer.php');
    ?>

    <!-- Footer section php page link end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->










    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Bootstrap5 JS CDN Link Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap5 JS CDN Link End -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->


   

    
</body>

</html>