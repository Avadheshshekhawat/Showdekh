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


    <!-- Header section php page link start -->

    <?php
  include_once('header.php');
  ?>

    <!-- Header section php page link end -->







    <!-- =============================================== -->
    <!-- Background slider Start -->

    <center>
        <div id="carouselExampleCaptions" class="carousel slide bg_slider d-none d-sm-block" data-bs-ride="carousel">
          
            <div class="carousel-indicators">

            <?php
          	 $today=date("Y-m-d");
             $get="select * from  slider";
             $query=mysqli_query($cn,$get);

             $i = 0;
             foreach ($query as $row)
             {
                $actives = '';
                if($i == 0){
                    $actives = 'active';
                }
              ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $actives; ?>" aria-current="true" aria-label="Slide 1"></button>
             <?php echo $i++; } ?>
               
            </div>
            
            <div class="carousel-inner">

            <?php
            $i = 0;
            foreach ($query as $row)
            {
               $actives = '';
               if($i == 0){
                   $actives = 'active';
               }
             ?>
                 <div class="carousel-item <?php echo $actives; ?>">
                    <img src="<?php echo $row['banner']; ?>" class="d-block w-100" alt="...">
                 </div>
            <?php echo $i++; } ?>
         </div>
         

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
           
        </div>
    </center>

    <!-- Background slider End -->
    <!-- =============================================== -->





    <!-- =============================================== -->
    <!-- Book Movie Tickets start -->
    <div class="container-fluid book-movie-show-bg" id="book_a_show">

        <div class="row">
            <!-- Heading Secion Start -->
            <div class="col-sm-12 col-md-12 col-12 booking-section-heading">
                <center>
                    <h3>Now Showing</h3>
                </center>
            </div>
            <!-- Heading Section End -->
        </div>



        <!-- Now Showing list start -->
        <div class="container movie-shows-bg" id="now-showing-movies">
            <div class="row">




                <?php
          	 $today=date("Y-m-d");
             $get="select * from  now_showing_movies_card";
             $query=mysqli_query($cn,$get);

             while($m=mysqli_fetch_array($query))
             {
              ?>
                <!-- movie card start -->
                <div class="col-sm-6 col-md-3 col-12 movie-card">
                    <img src="<?php echo $m['image'];?>" class="img-fluid movie-card-img col-12" alt="...">
                    <div class="col-sm-12 col-md-12 col-12 movie-card-title">
                        <center>
                            <p><?php echo $m['movie_name'];?></p>
                        </center>
                    </div>
                    <div class="col-sm-12 col-md-12 col-12 movie-card-book-button">
                        <center>
                        <a href="now_showing_movies_details.php?id=<?php echo $m['movie_id'];?>"
                                style="text-decoration:none;" class="watch-trailer-btn"><button type="button"
                                    class="btn watch-trailer-btn">Book Now</button></a>
                        </center>
                    </div>
                </div>
                <!-- movie card end -->

                <?php
  	    	 }
  	    ?>

            </div>
        </div>
        <!-- Now Showing list end -->
    </div>
    <!-- Book movie tickets end -->
    <!-- =============================================== -->







    <!-- =============================================== -->
    <!-- Upcoming Movies Section Start -->
    <div class="container-fluid upcmbg" id="upcoming">

        <center>
            <div class="container">
                <h3>Upcoming <i class="bi bi-film"></i> Movies</h3>
            </div>
        </center>


        <div class="container">
            <div class="row">



                <?php
          	 $today=date("Y-m-d");
             $get="select * from  upcoming_movies_card";
             $query=mysqli_query($cn,$get);

             while($m=mysqli_fetch_array($query))
             {
              ?>

                <!-- movie card start -->
                <div class="col-sm-6 col-md-3 col-12 movie-card">
                    <img src="<?php echo $m['image'];?>" class="img-fluid movie-card-img col-12" alt="...">
                    <div class="col-sm-12 col-md-12 col-12 movie-card-title">
                        <center>
                            <p><?php echo $m['movie_name'];?></p>
                        </center>
                    </div>
                    <div class="col-sm-12 col-md-12 col-12 movie-card-book-button">
                        <center>
                            <a href="upcoming_movies_details.php?id=<?php echo $m['movie_id'];?>"
                                style="text-decoration:none;" class="watch-trailer-btn"><button type="button"
                                    class="btn watch-trailer-btn">Show Details</button></a>
                        </center>
                    </div>
                </div>
                <!-- movie card end -->
                <?php
  	    	 }
  	    ?>

            </div>
        </div>
    </div>
    <!-- Upcoming Movies Section End -->
    <!-- ================================================ -->








    <!-- =============================================== -->
    <!-- Contact Us Section Start -->
    <div class="container-fluid contus" id="contact">
        <center>
            <div class="container">
                <h3>Contact Us</h3>
            </div>
        </center>


        <!-- Left Section of Contact Us Start-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-12 left">
                    <!-- <h3>Left Section</h3> -->
                    <p><a href="tel:7014079938"><i class="bi bi-telephone-fill phone-icn"></i>&nbsp; +91- 7014079938</a>
                    </p>
                    <p><a href="mailto:example@gmail.com"><i class="bi bi-envelope-open-fill mail-icn"></i>&nbsp;
                            avadheshs2013@gmail.com</a></p>
                    <p><i class="bi bi-geo-alt-fill lctn-icn"></i>&nbsp; 9 Dukan, Kalwar Road, Jaipur</p>
                </div>
                <!-- Left Section of Contact Us end -->


                <!-- Right Section of Contact Us start-->
                <div class="col-sm-12 col-md-8 col-12 right">
                    <!-- <h3>Right Section</h3> -->
                    <form action="" method="post" class="row g-3 needs-validation" novalidate>

                        <div class="col-md-6 col-sm-12 col-12">
                            <label for="validationCustom01" class="form-label">Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control"
                                id="validationCustom01" value="" maxlength="50" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-12">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control"
                                id="validationCustom01 exampleInputEmail1" aria-describedby="emailHelp" value=""
                                maxlength="50" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <label for="exampleInputEmail1" class="form-label">Subject</label>
                            <input class="form-control" type="text" name="subject"
                                placeholder="Enter Your Subject of Issue" aria-label="default input example"
                                id="validationCustom01" maxlength="100" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea placeholder="Please Enter Your Message" name="message" class="form-control"
                                id="exampleFormControlTextarea1 validationCustom01" maxlength="300" rows="3"
                                required></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="contact">Submit form</button>
                        </div>
                    </form>
                </div>
                <!-- Right Section of Contact Us end -->


            </div>
        </div>
    </div>
    <!-- Contact Us Section End -->
    <!-- =============================================== -->














    <!-- =============================================== -->
    <!-- About Us Section Start -->
    <div class="container-fluid about-us" id="about">
        <div class="row">

            <center>
                <div class="container" class="about-us-heading">
                    <div class="row">
                        <h3>About Us</h3>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-12 about-us-content">
                            <img src="img/mticket.png" class="img-fluid tkt-img" alt="...">
                            <h5>(1) Book A Show</h5>
                            <p>You can book movie tickets online on our platform.</p>

                            <hr>

                            <img src="img/mreview.png" class="img-fluid tkt-img" alt="...">
                            <h5>(2) Get Movie Reviews</h5>
                            <p>We are giving movie reviews on our platform.</p>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <!-- About Us Section End -->
    <!-- =============================================== -->









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
    <!-- Form validation JavaScript Code Start -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
    </script>
    <!-- Form validation JavaScript Code End -->
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