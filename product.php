<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>


    <div class="row mx-0">


        <div class="col-2 side-nav">
          <div class="side-nav-menu text-blue">
            ประเภทสินค้า (CATEGORIES)
          </div>
          <div class="side-nav-menu">
            วัสดุสิ้นเปลือง


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


          </div>
          <div class="side-nav-menu">
            สี
          </div>
          <div class="side-nav-menu">
            เครื่องมือช่าง
          </div>
          <div class="side-nav-menu">
            บรรจุภัณฑ์
          </div>
          <div class="side-nav-menu">
            อุปกรณ์เซฟตี้
          </div>
          <div class="side-nav-menu">
            เคมีภัณฑ์
          </div>
          <div class="side-nav-menu">
            สินค้า (BRANDS)
          </div>
          <div class="side-nav-menu all">
            <a class="text-blue" href="#">สินค้า (BRANDS)</a>
          </div>
        </div>


        <div class="col-10 p-4">
          <div class="row">
            <div class="col-sm-6">
              <input placeholder="ค้นหา" type="text" class="form-control search-form text-center">
              <button class="search-box">
                 <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                  <select class="form-control">
                    <option>Plant</option>
                    <option>ENTRY</option>
                    <option>REQUEST</option>
                    <option>ENTRY</option>
                    <option>REQUEST</option>
                  </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                  <select class="form-control">
                    <option>Division</option>
                    <option>ENTRY</option>
                    <option>REQUEST</option>
                    <option>ENTRY</option>
                    <option>REQUEST</option>
                  </select>
                </div>
            </div>
          </div>
        </div>

    </di>








    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
