<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light nav-border">

      <div style="text-align:center;" data-aos="fade-left" data-aos-dulation="700">
        <a class="navbar-brand" href="dashboard.php">
          <div>
          <img class="logo" src="assets/images/logo/logo.png" alt="">
          </div>
        </a>
      </div>





        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="navbar-collapse flex-column collapse" id="navbarSupportedContent" style="text-align:center;">

            <ul class="navbar-nav ml-auto mb-0 pt-1 pr-3 top-nav">

                <li class="nav-item mr-3">
                  <div class="dropdown">
                      <button class="btn dropdown-toggle logged-in-button" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="profile-icon" src="assets/images/avatar.png" alt="">
                        <label>
                         Mana Jaidee
                        </label>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu" style="text-align:left;">
                          <button class="dropdown-item py-2 text-grey" type="button" onclick="window.location.href='editprofile.php';">PROFILE</button>
                          <button class="dropdown-item py-2 text-grey" type="button" onclick="window.location.href='reset-password.php';">RESET PASSWORD</button>
                          <button class="dropdown-item py-2 text-grey" type="button">LOGOUT</button>
                      </div>
                  </div>
                </li>
                <li class="nav-item pt-1  mr-2">
                   <a href="#" class="nav-badge">
                     <span class="flaticon-shopping-cart icon-darkblue nav-icon"></span>
                     <span class="badge"> 1 </span>
                   </a>
                </li>
                <li class="nav-item pt-1  mr-2">
                   <a href="#" class="nav-badge">
                     <span class="flaticon-technology icon-darkblue nav-icon"></span>
                     <span class="badge"> 1 </span>
                   </a>
                </li>
                <li class="nav-item pt-1  mr-2">
                    <a href="inbox.php" class="nav-badge">
                      <span class="flaticon-letter icon-darkblue nav-icon"></span>
                      <span class="badge-2-digit"> 10 </span>
                    </a>
                </li>

            </ul>


            <ul class="navbar-nav flex-column flex-lg-row flex-md-column pt-3 pr-2 mr-auto secondnav">
                <?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>


                  <li class="nav-item ml-3 mr-5">
                      <a class="text-black nav-link <?php if($actual_link == "http://workbythai-commerce.com//ptt/dashboard.php" || $actual_link == "http://workbythai-commerce.com//ptt/dashboard.php") echo "active-menu"; else ""; ?>" href="dashboard.php">DASHBOARD</a>
                  </li>
                  <li class="nav-item mr-5">
                      <a class="text-black nav-link <?php if($actual_link == "http://workbythai-commerce.com/ptt/product.php" || $actual_link == "http://workbythai-commerce.com/ptt/product.php") echo "active-menu"; else ""; ?>" href="product.php">PRODUCT</a>
                  </li>
                  <li class="nav-item mr-5">
                      <a class="text-black nav-link <?php if($actual_link == "http://workbythai-commerce.com/ptt/request.php" || $actual_link == "http://workbythai-commerce.com/ptt/request.php") echo "active-menu"; else ""; ?>" href="request.php">REQUEST ENTRY</a>
                  </li>
                  <li class="nav-item mr-5">
                      <a class="text-black nav-link <?php if($actual_link == "http://workbythai-commerce.com/ptt/report.php" || $actual_link == "http://workbythai-commerce.com/ptt/report.php") echo "active-menu"; else ""; ?>" href="report.php">REPORT</a>
                  </li>
                  <li class="nav-item mr-5">
                      <a class="text-black nav-link <?php if($actual_link == "http://workbythai-commerce.com/ptt/contact.php" || $actual_link == "http://workbythai-commerce.com/ptt/contact.php") echo "active-menu"; else ""; ?>" href="contact.php">CONTACT US</a>
                  </li>


                  <li class="nav-item ml-auto">


                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="search">
                      <button class="btn btn-search ml-2" type="submit"><i class="fas fa-search"></i></button>
                    </div>

                  </li>
              </ul>

        </div>


</nav>
