<?php
 include_once('signin_process.php');
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
    <link rel="stylesheet" href="CSS/style.css">
    <!-- =============================================== -->

</head>


<body>

    <!-- ====================================== -->
    <!-- ====================================== -->
    <!-- Page Background Image Start -->
    <div class="container-fluid sign-up-page-bg" style="background-image: url('img/REG-BG.jpg');">
        <!-- Page Background Image End -->
        <!-- ====================================== -->
        <!-- ====================================== -->





        <!-- ====================================== -->
        <!-- ====================================== -->
        <!-- Sign In Form Start -->
        <div class="container col-xxl-3 col-xl-3 col-lg-3 col-sm-6 col-md-6 col-xs-12 sign-in-form-div">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-12 form-hdg">
                    <center><a class="logo" href="index.php">
                            <h2>Show <span class="text-warning">Dekh</span></h2>
                        </a></center>
                </div>

                <div class="col-sm-12 col-md-12 col-12">

                    <form action="" method="post" class="row g-3 needs-validation" novalidate>


                        <div class="col-md-12 col-sm-12 col-12">
                            <!-- <label for="exampleInputEmail1" class="form-label">User Id</label> -->
                            <input type="text" name="userid" minlength="9" maxlength="9" placeholder="Enter Your User Id" class="form-control"
                                id="validationCustom01 exampleInputEmail1" aria-describedby="emailHelp" value=""
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <!-- <div class="col-md-12 col-sm-12 col-12">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control"
                                id="validationCustom01 exampleInputEmail1" aria-describedby="emailHelp" value=""
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div> -->

                        <div class="col-md-12 col-sm-12 col-12">
                            <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                            <input type="password" name="password" placeholder="********" class="form-control"
                                id="exampleInputPassword1 validationCustom01" value="" required>
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
                        <center>
                            <div class="col-12">
                                <button class="btn sign-in-btn" type="submit" name="signin">Sign In</button>
                            </div>
                            <p style="color:red; background-color:white;"><?php echo $err ?></p>
                        </center>

                    </form>
                </div>

            </div>

            <center><a href="sign_up.php"><button class="btn sign-up-page-open-btn">Don't Have An Account</button></a></center>

        </div>
        <!-- Sign In Form End -->
        <!-- ====================================== -->
        <!-- ====================================== -->
    </div>









    <!-- ===================================================== -->
    <!-- ===================================================== -->
    <!-- Form validation JavaScript Code Start -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
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
    <!-- Bootstrap5 JS CDN Link Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Bootstrap5 JS CDN Link End -->
    <!-- ===================================================== -->
    <!-- ===================================================== -->






</body>

</html>