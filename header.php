<?php
session_start();
?>
<!-- =============================================== -->
  <!-- Header start -->

  <!-- Nav Bar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><h2>Show <span class="text-warning">Dekh</span></h2></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="menulnk" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="menulnk" href="#book_a_show">Book A Show</a>
                  </li>
                  <li class="nav-item">
                    <a class="menulnk" href="#upcoming">Upcoming Movies</a>
                  </li>
                  <li class="nav-item">
                    <a class="menulnk" href="#">Movie Reviews</a>
                  </li>
                </ul>


                <?php if(isset($_SESSION['userid'])){?>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><button type="button" class="btn btn-outline-light profile-btn"><?php echo $_SESSION['userid'] ?></button></a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Sign-Out</a><?php }else{?></li>
                      </ul>
                </li>
              </ul>
                <a href="sign_in.php"><button type="button" class="btn btn-outline-light header_btn">Sign-In</button></a>
                <a href="sign_up.php"><button type="button" class="btn btn-warning header_btn">Sign-Up</button></a><?php }?>

              </div>
            </div>
          </nav>
  <!-- Nav Bar End -->

  <!-- Header End -->
  <!-- =============================================== -->







   <!-- =============================================== -->
  <!-- =============================================== -->
  <!-- Mobile screen importent nav bottom bar start -->
  <!-- <div class="container-fluid bottom-nav-bar fixed-bottom d-block d-sm-none">
    <div class="row">

      <div class="con-sm-3 col-md-3 col-3 bottom-nav-bar-L">
        <center><a href="#" class="anchor-bottom-bar"><b><i class="bi bi-house-heart-fill"></i> <br>
              Home</b></a></center>
      </div>
      <div class="con-sm-6 col-md-6 col-6 bottom-nav-bar-M">
        <center><a href="#book_a_show" class="anchor-bottom-bar"><b><i class="bi bi-ticket-perforated-fill"></i>
              <br> Book Movie Tickets</b></a></center>
      </div>
      <div class="con-sm-3 col-md-3 col-3 bottom-nav-bar-R">
        <center><a href="sign_up.html" class="anchor-bottom-bar"><b><i class="bi bi-person-circle"></i> <br>
              Sign Up</b></a></center>
      </div>

    </div>
  </div> -->
  <!-- Mobile screen importent nav bottom bar end -->
  <!-- =============================================== -->
  <!-- =============================================== -->