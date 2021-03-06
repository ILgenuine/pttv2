<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>


              <div class="banner mx-5">

                    <div style="height:540px; width:100%">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="assets/images/bg/header-bg.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/images/bg/header-bg.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/images/bg/header-bg.jpg" alt="Third slide">
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="banner-title">
                        <div class="banner-text-frame">
                          <font class="banner-title-text">SP PTTGC</font>
                        </div>
                        <div class="banner-text-frame">
                          <hr class="banner-title-hr">
                        </div>
                    </div>
                    <div class="banner-title-2">
                        <div class="banner-text-frame-2">
                          <font class="banner-title-text-2">PARTNERSHIP OF CONSUMABLE CONTRACT</font>
                        </div>
                    </div>

                </div>





                <div class="container">
                  <div class="row py-4 px-5">
                    <div class="col-sm-12 mb-2">
                      <div class="text-center text-darkblue"><h2>WELCOME</h2></div>
                    </div>


                    <div class="col-sm-7 mb-2" style="margin: auto;">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn login-input-group" type="button"><i class="flaticon-user-1 login-icon-left" aria-hidden="true"></i></button>
                        </div>
                        <input type="text" class="form-control login-input-border" placeholder="User" aria-label="" aria-describedby="basic-addon1">
                      </div>
                    </div>

                    <div class="col-sm-7" style="margin: auto;">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <button class="btn login-input-group" type="button"><i class="flaticon-keys login-icon-left" aria-hidden="true"></i></button>
                        </div>
                        <input type="password" class="form-control login-input-border" placeholder="Password" aria-label="" aria-describedby="basic-addon1">
                      </div>
                    </div>


                    <div class="col-sm-7 mb-2" style="margin: auto;">
                      <div class="mb-3">
                        <u><a href="forget.php" class="login-forget-pass">Forget password</a></u>
                      </div>
                    </div>


                    <div class="col-sm-12 mb-2">
                      <div class="text-center">
                        <button type="button" class="btn btn-main"  style="width: 175px;" onclick="window.location.href='dashboard.php';">LOGIN</button>
                      </div>
                    </div>

                  </div>
                </div>





    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
