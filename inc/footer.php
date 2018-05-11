<footer class="footer">

        <div class="top-footer row py-1 px-5 mx-0">

          <ul class="navbar-nav flex-column flex-lg-row flex-md-column">
              <?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>

                <li class="nav-item ml-5 mr-5 pull-left">
                    <label class="text-white pt-2">แผนผังเว็บไซต์</label>
                </li>

                <li class="nav-item ml-5 mr-5 pull-left">
                    <a class="nav-link text-white <?php if($actual_link == "http://workbythai-commerce.com//pttv2/dashboard.php" || $actual_link == "http://workbythai-commerce.com//pttv2/dashboard.php") echo "active-menu"; else ""; ?>" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item mr-5 pull-left">
                    <a class="nav-link text-white <?php if($actual_link == "http://workbythai-commerce.com/pttv2/product.php" || $actual_link == "http://workbythai-commerce.com/pttv2/product.php") echo "active-menu"; else ""; ?>" href="product.php">รายการสินค้า</a>
                </li>
                <li class="nav-item mr-5 pull-left">
                    <a class="nav-link text-white <?php if($actual_link == "http://workbythai-commerce.com/pttv2/request.php" || $actual_link == "http://workbythai-commerce.com/pttv2/request.php") echo "active-menu"; else ""; ?>" href="request.php">ใบสั่งซื้อ</a>
                </li>
                <li class="nav-item mr-5 pull-left">
                    <a class="nav-link text-white <?php if($actual_link == "http://workbythai-commerce.com/pttv2/report.php" || $actual_link == "http://workbythai-commerce.com/pttv2/report.php") echo "active-menu"; else ""; ?>" href="report.php">ติดต่อ</a>
                </li>
                <li class="nav-item mr-5 pull-left">
                    <a class="nav-link text-white <?php if($actual_link == "http://workbythai-commerce.com/pttv2/contact.php" || $actual_link == "http://workbythai-commerce.com/pttv2/contact.php") echo "active-menu"; else ""; ?>" href="contact.php">รายงาน</a>
                </li>

            </ul>

              <a class="nav-link text-white px-0 ml-auto" href="#"><span class="flaticon-facebook-letter-logo"></span></a>
              <a class="nav-link text-white px-0" href="#"><span class="flaticon-social-media"></span></a>
              <a class="nav-link text-white px-0 mr-5" href="#"><span class="flaticon-twitter-logo-silhouette"></span></a>

        </div>


        <div class="second-footer pt-2 pb-md-2 pl-md-5 px-5">

            <div class="row ml-3 mr-3 pt-4 pb-2">
              <div class="col-3">
                <img width='300px' height='auto' src="assets/images/logo/logo.png" alt="">
              </div>

              <div class="col-3">
                <div class="footer-text-frame">
                  <label class="text-white">555 ถนนวิภาวดีรังสิต แขวงจตุจักร เขตจตุจักร โทรศัพท์ : 0-2537-2000 โทรสาร : 0-2537-3498-9</label>
                </div>
              </div>

              <div class="col-3 flex-row">
                <div class="row">
                  <div class="col-2">
                  <img width='45px' height='auto' src="assets/images/footer/sp.jpg" alt="">
                  </div>
                  <div class="col-10">
                    <div class="footer-text-frame">
                      <label class="text-white">555 ถนนวิภาวดีรังสิต แขวงจตุจักร เขตจตุจักร โทรศัพท์ : 0-2537-2000 โทรสาร : 0-2537-3498-9</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 text-right">
                <label class="text-white">©workbythai.co.,Ltd, 2018</label>
              </div>

            </div>
        </div>

</footer>
