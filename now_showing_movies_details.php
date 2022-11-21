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







  <?php
       $get="select * from  now_showing_movies where movie_id='".$_GET['id']."'";
       $query=mysqli_query($cn,$get);
       $m=mysqli_fetch_array($query);
    ?>



    <!-- =============================================== -->
    <!-- =============================================== -->
    <!-- Background Image start -->
    <img src="<?php echo $m['banner'];?>" class="img-fluid bg-img" alt="...">
    <!-- Background Image end -->
    <!-- =============================================== -->
    <!-- =============================================== -->








    <!-- =============================================== -->
    <!-- =============================================== -->
    <!-- Background Image overlay content -->
    <div class="container-fluid overlay-bg-img">
        <div class="row">

            <div class="container content-bg-div">
                <div class="row">


                    <!-- Left side Start -->
                    <div class="col-sm-11 col-12 content-bg-div-left">
                        <div class="row">

                            <div class="col-sm-5 d-none d-sm-block content-bg-div-left-L">
                                <img src="<?php echo $m['poster'];?>" class="card-img" alt="...">
                            </div>


                            <div class="col-sm-7 col-12 content-bg-div-left-R">
                                <h2 style="color: #ebd90b;"><?php echo $m['movie_name'];?></h2>
                                <p><?php echo $m['genre'];?> | <?php echo date('d-M-Y',strtotime($m['release_date'])); ?> | <?php echo $m['run_time'];?></p>
                                <p> <b style="color: #ebd90b;">Casts:</b> <?php echo $m['cast'];?> <br> <b style="color: #ebd90b;">Director:</b> <?php echo $m['director'];?></p>
                                <h4 style="color: #ebd90b;">About the movie</h4>
                                <p><?php echo $m['about_movie'];?></p>
                            </div>

                        </div>
                    </div>
                    <!-- Left side end -->



                    <!-- Right side start -->
                    <div class="col-sm-1 d-md-block d-none content-bg-div-right"></div>
                    <!-- Right side end -->

                </div>
            </div>

        </div>
    </div>
    <!-- Background Image overlay end -->
    <!-- =============================================== -->
    <!-- =============================================== -->







    <!-- =============================================== -->
    <!-- =============================================== -->
    <!-- Main content start -->

    <div class="container-fluid">
        <div class="row">




            <!-- Trailer button start -->
            <div class="col-sm-6 col-md-6 col-12 trailer-btn-bg">
                <div class="row">

                    <center>
                       <a href="<?php echo $m['trailer_lnk']; ?>" target="_blank" style="text-decoration:none;"><button type="button" class="btn btn-outline-success">Watch Trailer</button></a>
                    </center>

                </div>
            </div>
            <!-- Trailer button end -->


            







            <!-- Available option start -->
            <div class="col-sm-6 col-md-6 col-12 availabal-option available-option-content">

                <center>
                    <p>
                        <i class="bi bi-circle-fill dot-avlb"></i>&nbsp; AVAILABLE &nbsp;&nbsp;&nbsp;&nbsp; <i
                            class="bi bi-circle-fill dot-fast-filling"></i>&nbsp; FAST FILLING
                    </p>
                </center>

            </div>
            <!-- Available option end -->
        </div>
    </div>










    <!-- movie theaters list start -->
    <div class="container-fluid theaters-list-bg">


        <!-- 24 Sep movie show timings start -->
        <div class="row">



            <!-- Theater details start -->
            <div class="col-sm-12 col-md-12 show-timing">

                <div class="row">

                    <div class="col-sm-4 col-md-4 col-4 theater-name">

                        <p>
                            Carnival: Galaxy Riico Mansarovar, Jaipur
                            &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" data-bs-toggle="modal"
                                data-bs-target="#carnival"><i class="bi bi-info-circle"></i></button>
                        </p>
                    </div>


                    <div class="col-sm-8 col-md-8 col-8 theater-timing">

                        <button class="btn theater-timing-btn" data-bs-toggle="modal"
                            data-bs-target="#carnival_tnc">09:15 AM</button>
                        <button class="btn theater-timing-btn" data-bs-toggle="modal"
                            data-bs-target="#carnival_tnc">12:30 PM</button>
                        <button class="btn theater-timing-btn" data-bs-toggle="modal"
                            data-bs-target="#carnival_tnc">03:45 PM</button>
                        <button class="btn theater-timing-btn" data-bs-toggle="modal"
                            data-bs-target="#carnival_tnc">05:45 PM</button>
                        <button class="btn theater-timing-btn" data-bs-toggle="modal"
                            data-bs-target="#carnival_tnc">07:00 PM</button>
                        <button class="btn theater-timing-btn" data-bs-toggle="modal"
                            data-bs-target="#carnival_tnc">10:15 PM</button>

                    </div>

                </div>

            </div>
            <!-- Theater details end -->





            <!-- Theater details start -->
            <div class="col-sm-12 col-md-12 col-12 show-timing">

                <div class="row">

                    <div class="col-sm-4 col-md-4 col-4 theater-name">

                        <p>
                            Funstar Cinemas: Vidhyadhar Nagar, Jaipur
                            &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" data-bs-toggle="modal"
                                data-bs-target="#funstar"><i class="bi bi-info-circle"></i></button>
                        </p>
                    </div>

                    <div class="col-sm-8 col-md-8 col-8 theater-timing">

                        <button class="btn theater-timing-btn">12:15 PM</button>
                        <button class="btn theater-timing-btn">03:30 PM</button>
                        <button class="btn theater-timing-btn">06:45 PM</button>
                        <button class="btn theater-timing-btn">09:45 PM</button>

                    </div>

                </div>

            </div>
            <!-- Theater details end -->





            <!-- Theater details start -->
            <div class="col-sm-12 col-md-12 col-12 show-timing">

                <div class="row">

                    <div class="col-sm-4 col-md-4 col-4 theater-name">

                        <p>
                            Cinepolis: Triton Mega Mall, Jaipur
                            &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" data-bs-toggle="modal"
                                data-bs-target="#triton"><i class="bi bi-info-circle"></i></button>
                        </p>
                    </div>

                    <div class="col-sm-8 col-md-8 col-8 theater-timing">

                        <button class="btn theater-timing-btn">11:35 AM</button>
                        <button class="btn theater-timing-btn">03:00 PM</button>
                        <button class="btn theater-timing-btn">08:55 PM</button>

                    </div>

                </div>

            </div>
            <!-- Theater details end -->






            <!-- Theater details start -->
            <div class="col-sm-12 col-md-12 col-12 show-timing">

                <div class="row">

                    <div class="col-sm-4 col-md-4 col-4 theater-name">

                        <p>
                            Cinepolis: World Trade Park Mall, Jaipur
                            &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" data-bs-toggle="modal" data-bs-target="#wtp"><i
                                    class="bi bi-info-circle"></i></button>
                        </p>
                    </div>

                    <div class="col-sm-8 col-md-8 col-8 theater-timing">

                        <button class="btn theater-timing-btn">11:00 AM</button>
                        <button class="btn theater-timing-btn">02:25 PM</button>
                        <button class="btn theater-timing-btn">05:50 PM</button>
                        <button class="btn theater-timing-btn">09:15 PM</button>

                    </div>

                </div>

            </div>
            <!-- Theater details end -->





            <!-- Theater details start -->
            <div class="col-sm-12 col-md-12 col-12 show-timing">

                <div class="row">

                    <div class="col-sm-4 col-md-4 col-4 theater-name">

                        <p>
                            Golcha Cinema: Jaipur
                            &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn" data-bs-toggle="modal"
                                data-bs-target="#golcha"><i class="bi bi-info-circle"></i></button>
                        </p>
                    </div>

                    <div class="col-sm-8 col-md-8 col-8 theater-timing">

                        <button class="btn theater-timing-btn">12:15 AM</button>
                        <button class="btn theater-timing-btn">03:15 PM</button>
                        <button class="btn theater-timing-btn">06:15 PM</button>
                        <button class="btn theater-timing-btn">09:15 PM</button>

                    </div>

                </div>

            </div>
            <!-- Theater details end -->


        </div>
        <!-- 24 Sep movie show timings end -->


    </div>
    <!-- movie theaters list end -->








    <!-- Theater info start -->


    <!-- carnival modal start -->
    <div class="modal fade" id="carnival" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Carnival: Galaxy Riico Mansarovar, Jaipur
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <center>
                        <div style="max-width:100%;overflow:hidden;color:red;width:400px;height:200px;">
                            <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Carnival:+Galaxy+Riico+Mansarovar,+Jaipur&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes"
                                id="enable-map-info">premium bootstrap themes</a>
                            <style>
                                #canvas-for-googlemap img {
                                    max-width: none !important;
                                    background: none !important;
                                    font-size: inherit;
                                    font-weight: inherit;
                                }
                            </style>
                        </div>
                    </center>
                    <br>


                    <h6><i class="bi bi-geo-alt"></i> S P 9, Shipra Path, Mansarovar, Near Axis Bank ATM, Jaipur,
                        Rajasthan 302001, India</h6>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- carnival modal end -->


    <!-- Funstar modal start -->
    <div class="modal fade" id="funstar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Funstar Cinemas: Vidhyadhar Nagar, Jaipur
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <center>
                        <div style="max-width:100%;overflow:hidden;color:red;width:400px;height:200px;">
                            <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Carnival+Cinemas+Funstar,+Sector+2+Road,+Sector+2,+Central+Spine,+Vidhyadhar+Nagar,+Jaipur,+Rajasthan,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes"
                                id="enable-map-info">premium bootstrap themes</a>
                            <style>
                                #canvas-for-googlemap img {
                                    max-width: none !important;
                                    background: none !important;
                                    font-size: inherit;
                                    font-weight: inherit;
                                }
                            </style>
                        </div>
                    </center>
                    <br>


                    <h6><i class="bi bi-geo-alt"></i> Vidyadhar Nagar, Times square Mall, Jaipur, Rajasthan 302039,
                        India</h6>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Funstar modal end -->



    <!-- Triton modal start -->
    <div class="modal fade" id="triton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cinepolis: Triton Mega Mall, Jaipur
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <center>
                        <div style="max-width:100%;overflow:hidden;color:red;width:400px;height:200px;">
                            <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Cinepolis+Triton,+Jhotwara+Road,+Om+Shiv+Colony,+Dahar+Ka+Balaji,+Jaipur,+Rajasthan,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes"
                                id="enable-map-info">premium bootstrap themes</a>
                            <style>
                                #canvas-for-googlemap img {
                                    max-width: none !important;
                                    background: none !important;
                                    font-size: inherit;
                                    font-weight: inherit;
                                }
                            </style>
                        </div>
                    </center>
                    <br>


                    <h6><i class="bi bi-geo-alt"></i> Jhotwara Road, Plot No: 1/1, Triton Mega Mall, Jaipur, Rajasthan
                        302012, India</h6>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Triton modal end -->




    <!-- WTP modal start -->
    <div class="modal fade" id="wtp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cinepolis: World Trade Park Mall, Jaipur
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <center>
                        <div style="max-width:100%;overflow:hidden;color:red;width:400px;height:200px;">
                            <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Cinépolis+-+Jaipur,+Jawahar+Lal+Nehru+Marg,+D-Block,+Malviya+Nagar,+Jaipur,+Rajasthan,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes"
                                id="enable-map-info">premium bootstrap themes</a>
                            <style>
                                #canvas-for-googlemap img {
                                    max-width: none !important;
                                    background: none !important;
                                    font-size: inherit;
                                    font-weight: inherit;
                                }
                            </style>
                        </div>
                    </center>
                    <br>


                    <h6><i class="bi bi-geo-alt"></i> D-Block, Sector 4, JLN Marg, Malviya Nagar, Jaipur, Rajasthan
                        302017, India</h6>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- WTP modal end -->




    <!-- Golcha modal start -->
    <div class="modal fade" id="golcha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Golcha Cinema: Jaipur
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <center>
                        <div style="max-width:100%;overflow:hidden;color:red;width:400px;height:200px;">
                            <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Golcha+Cinema,+Chaura+Rasta+Road,+New+Gate,+Bapu+Bazar,+Pink+City,+Jaipur,+Rajasthan,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes"
                                id="enable-map-info">premium bootstrap themes</a>
                            <style>
                                #canvas-for-googlemap img {
                                    max-width: none !important;
                                    background: none !important;
                                    font-size: inherit;
                                    font-weight: inherit;
                                }
                            </style>
                        </div>
                    </center>
                    <br>


                    <h6><i class="bi bi-geo-alt"></i> New Gate, SMS Highway, Bapu Bazar, Chaura Rasta, Jaipur, Rajasthan
                        302003, India</h6>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Golcha modal end -->


    <!-- Theater info end -->











    <!-- T & C start -->


    <!-- Carnival T & C start -->
    <div class="modal fade" id="carnival_tnc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="margin-left:28%;" class="modal-title" id="staticBackdropLabel">Terms & Condition</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>
                        1. As per Govt. notification - First Dose Vaccination Mandatory. <br>
                        2. For your own safety, wearing face masks is compulsory for entering the cinema premises.
                        <br>
                        3. Temperature checks will be conducted at the cinema. Patrons with high temperature (above 37.3
                        C or 99.14 F) will not be allowed inside.
                        <br>
                        4. Entry is allowed only for valid ticket holders.
                        <br>
                        5. Guests aged under 18 will not be allowed in `A` rated movies.
                        <br>
                        6. Children above the age of 3 years require tickets for `U` or `U/A` rated movies.
                        <br>
                        7. In case a ticket is lost or misplaced, a duplicate ticket cannot be issued.
                        <br>
                        8. Tickets once purchased cannot be cancelled, exchanged or refunded.
                        <br>
                        9. Decision(s) taken by CARNIVAL MANAGEMENT shall be final and binding, Rights of admission
                        reserved.
                        <br>
                        10. Outside food and beverages are not allowed inside the cinema premises.
                        <br>
                        11. Patrons under the influence of alcohol or drugs will not be allowed inside the Cinema
                        Premises.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" data-bs-target="#select_seats" data-bs-toggle="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Carnival T & C end -->

    <!-- Carnival select seats start -->
    <div class="modal fade" id="select_seats" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="margin-left:28%;" class="modal-title" id="exampleModalToggleLabel2">How Many Seats?</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>

                <div class="modal-body">



                    <form action="">
                        <center>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-danger" for="btnradio1">1</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio2">2</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio3">3</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio4">4</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio5">5</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio6">6</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio7">7</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio8">8</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio9">9</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio10"
                                    autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio10">10</label>
                            </div>
                        </center>





                        <br>

                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-4">
                                <center>
                                    <p>
                                    <h6>LOUNGE OFFLINE <br> <b>Rs. 110.00</b> <br><em
                                            style="color: #4abd5d;">Available</em>
                                    </h6>
                                    </p>
                                </center>
                            </div>
                            <div class="col-sm-4 col-md-4 col-4">
                                <center>
                                    <p>
                                    <h6>PREMIER OFFLINE <br> <b>Rs. 150.00</b> <br><em
                                            style="color: #4abd5d;">Available</em>
                                    </h6>
                                    </p>
                                </center>
                            </div>
                            <div class="col-sm-4 col-md-4 col-4">
                                <center>
                                    <p>
                                    <h6>CLUB OFFLINE <br> <b>Rs. 180.00</b> <br><em
                                            style="color: #4abd5d;">Available</em>
                                    </h6>
                                    </p>
                                </center>
                            </div>

                            <center>
                                <div class="col-sm-4 col-md-4 col-4">
                                    <p>
                                    <h6>GALAXY CLUB OFFLINE <br> <b>Rs. 200.00</b> <br><em
                                            style="color: #4abd5d;">Available</em>
                                    </h6>
                                    </p>
                                </div>
                            </center>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-danger" value="Close" data-bs-dismiss="modal">
                    </form>
                    <button class="btn btn-danger" data-bs-target="#available_seats" data-bs-toggle="modal">Select
                        Seats</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Carnival select seats end -->





    <!-- Carnival available seats start -->
    <div class="modal fade" id="available_seats" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Brahmastra <p style="font-size: 12px;">Carnival:
                            Galaxy Riico Mansarovar, Jaipur | Tuesday, 27 Sep, 09:15 AM</p>
                    </h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">


                    
                    <!-- Time btns start -->
                    <div class="time-btns-row">


                        <button class="btn btn-outline-success active">09:15 AM</button>
                        <button class="btn btn-outline-success">12:30 PM</button>
                        <button class="btn btn-outline-success">03:45 PM</button>
                        <button class="btn btn-outline-success">05:45 PM</button>
                        <button class="btn btn-outline-success">07:00 PM</button>
                        <button class="btn btn-outline-success">10:15 PM</button>


                    </div>
                    <!-- Time btns end -->





                    <!-- Theater seats start -->

                    <div class="col-sm-12 col-md-12 col-12 row-title">
                        <p>GALAXY CLUB OFFLINE-Rs. 200.00</p>
                    </div>




                    <div class="theater-row">
                        <div class="col-12 row-A">A</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>

                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                    </div>


                    <div class="theater-row">
                        <div class="col-12 row-A">B</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>

                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">C</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>

                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">D</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">E</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                    </div>




                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-12 row-title">
                            <p>CLUB OFFLINE-Rs. 180.00</p>
                        </div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">F</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">G</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">H</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">I</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>




                    <div class="theater-row">
                        <div class="col-12 row-A">J</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">K</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">L</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>





                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-12 row-title">
                            <p>PREMIER OFFLINE-Rs. 150.00</p>
                        </div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">M</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">N</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">O</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">P</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>




                    <div class="theater-row">
                        <div class="col-12 row-A">Q</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">R</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">S</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">13</div>
                        <div class="seat" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-12 row-title">
                            <p>LOUNGE OFFLINE-Rs. 110.00</p>
                        </div>
                    </div>




                    <div class="theater-row">
                        <div class="col-12 row-A">T</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                        <div class="seat" onclick="toggleClass(this)">25</div>
                        <div class="seat" onclick="toggleClass(this)">26</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">U</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                        <div class="seat" onclick="toggleClass(this)">25</div>
                        <div class="seat" onclick="toggleClass(this)">26</div>
                    </div>




                    <div class="theater-row">
                        <div class="col-12 row-A">V</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                        <div class="seat" onclick="toggleClass(this)">25</div>
                        <div class="seat" onclick="toggleClass(this)">26</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">W</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                        <div class="seat" onclick="toggleClass(this)">25</div>
                        <div class="seat" onclick="toggleClass(this)">26</div>
                    </div>



                    <div class="theater-row">
                        <div class="col-12 row-A">X</div>
                        <div class="seat" id="seat1" onclick="toggleClass(this)">01</div>
                        <div class="seat" onclick="toggleClass(this)">02</div>
                        <div class="seat" onclick="toggleClass(this)">03</div>
                        <div class="seat" onclick="toggleClass(this)">04</div>
                        <div class="seat" onclick="toggleClass(this)">05</div>
                        <div class="seat" onclick="toggleClass(this)">06</div>
                        <div class="seat" onclick="toggleClass(this)">07</div>
                        <div class="seat" onclick="toggleClass(this)">08</div>
                        <div class="seat" onclick="toggleClass(this)">09</div>
                        <div class="seat" onclick="toggleClass(this)">10</div>
                        <div class="seat" onclick="toggleClass(this)">11</div>
                        <div class="seat" onclick="toggleClass(this)">12</div>
                        <div class="seat" onclick="toggleClass(this)">13</div>
                        <div class="seat" id="seat-gap" onclick="toggleClass(this)">14</div>
                        <div class="seat" onclick="toggleClass(this)">15</div>
                        <div class="seat" onclick="toggleClass(this)">16</div>
                        <div class="seat" onclick="toggleClass(this)">17</div>
                        <div class="seat" onclick="toggleClass(this)">18</div>
                        <div class="seat" onclick="toggleClass(this)">19</div>
                        <div class="seat" onclick="toggleClass(this)">20</div>
                        <div class="seat" onclick="toggleClass(this)">21</div>
                        <div class="seat" onclick="toggleClass(this)">22</div>
                        <div class="seat" onclick="toggleClass(this)">23</div>
                        <div class="seat" onclick="toggleClass(this)">24</div>
                        <div class="seat" onclick="toggleClass(this)">25</div>
                        <div class="sold" onclick="toggleClass(this)">26</div>
                    </div>

                    <!-- Theater seats end -->


                    <!-- Theater screen start -->
                    <div class="theater-screen"></div>
                    <div class="theater-screen-cont">
                        <p>All eyes this way please!</p>
                    </div>
                    <!-- Theater screen end -->




                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-bs-target="#select_seats" data-bs-toggle="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Carnival available seats end -->


    <!-- T & C end -->









    <!-- Footer section php page link start -->

    <?php
      include_once('footer.php');
    ?>

    <!-- Footer section php page link end -->












    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Bootstrap5 JS CDN Link Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Bootstrap5 JS CDN Link End -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->








    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Jquery Link Start -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Jquery Link End -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->






    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Jquery start -->
    <script>
        // $(document).ready(function () {
        //     $('.seat').click(function () {
        //         $('.seat').css({ "background-color": "#4abd5d", "color": "white" });
        //     });
        // });



    </script>
    <!-- Jquery end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->





    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- External JS start -->
    <script src="js/function.js"></script>
    <!-- External JS end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->







    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Trailer jquery script start -->
    <script>
        $(document).ready(function () {
            var url = $("#brhmstr").attr('src');
            $("#brhmstr_trailer_modal").on('hide.bs.modal', function () {
                $("#brhmstr").attr('src', '');
            });
            $("#brhmstr_trailer_modal").on('show.bs.modal', function () {
                $("#brhmstr").attr('src', url);
            });
        });
    </script>
    <!-- Trailer jquery script end -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->
</body>

</html>