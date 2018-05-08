<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

    <div class="container-fluid">
      <div class="row py-4 px-5">

          <h4 class="text-darkblue">ข้อมูลส่วนตัว</h4>

          <div class="col-12">

            <div class="grey-box p-3 my-3">
              <div class="row mx-0">
                <div class="col-9">


                  <div class="row mx-0 mb-5">
                    <div class="col-3">
                        <font>คำนำหน้า (ภาษาไทย)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="นาย">
                    </div>

                    <div class="col-3">
                        <font>คำนำหน้า (ภาษาอังกฤษ)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="MR.">
                    </div>
                  </div>


                  <div class="row mx-0 mb-5">
                    <div class="col-3">
                        <font>ชื่อจริง (ภาษาไทย)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="มานะ">
                    </div>

                    <div class="col-3">
                        <font>ชื่อจริง (ภาษาอังกฤษ)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="Mana">
                    </div>
                  </div>

                  <div class="row mx-0 mb-5">
                    <div class="col-3">
                        <font>นามสกุลจริง (ภาษาไทย)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="ใจดี">
                    </div>

                    <div class="col-3">
                        <font>นามสกุลจริง (ภาษาอังกฤษ)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="Jaidee">
                    </div>
                  </div>

                  <div class="row mx-0 mb-5">
                    <div class="col-3">
                        <font>เบอร์โทร (ภาษาไทย)</font>
                    </div>
                    <div class="col-3">
                      <input type="text" class="form-control text-grey" aria-label="..." placeholder="090-0000000">
                    </div>
                    <div class="col-2">
                        <font>Email (ภาษาอังกฤษ)</font>
                    </div>
                    <div class="col-4">
                      <input type="email" class="form-control text-grey" aria-label="..." placeholder="mana@gmail.com">
                    </div>
                  </div>


                  <div class="row mx-0 mb-5">
                    <div class="col-3">
                        <font>Email (ภาษาอังกฤษ)</font>
                    </div>
                    <div class="col-9">
                      <select class="form-control text-grey">
                        <option>test1</option>
                        <option>test2</option>
                        <option>test3</option>
                        <option>test4</option>
                      </select>
                    </div>
                  </div>


                  <div class="row mx-0 mb-5">
                    <div class="col-3">
                        <font>ที่อยู่</font>
                    </div>
                    <div class="col-9">
                      <textarea class="form-control text-grey" rows="10">
                      </textarea>
                    </div>
                  </div>


                </div>
                <!--  END Left section -->



                <!--  Right section -->
                <div class="col-3">
                    <div class="row mx-0">
                      <div class="col-12 mb-4">
                          <div class="profile-img-frame">

                            <img class="card-img-top" src="assets/images/profile-picture.png" alt="Card image cap" width="100%" height="100%">

                            <div class="edit">
                              <span class="btn btn-file">
                                <span class="flaticon-create-new-pencil-button text-grey" aria-hidden="true"></span>
                                <input type="file">
                              </span>
                            </div>

                          </div>
                      </div>

                      <div class="col-12 mb">
                        <div class="profile-img-frame">

                          <img class="card-img-top" src="assets/images/sign-picture.png" alt="Card image cap" width="100%" height="100%">

                          <div class="edit">
                            <span class="btn btn-file">
                              <span class="flaticon-create-new-pencil-button text-grey" aria-hidden="true"></span>
                              <input type="file">
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>

          </div>


          <!--  BOTTOM section -->
          <div class="col-12">
            <div class="grey-box p-4 my-3">
              <div class="row mx-0 mb-4">
                <div class="col-2 mr-2">
                    <font>User Name</font>
                </div>
                <div class="col-3 ml-4">
                  <input type="text" class="form-control text-grey" aria-label="..." placeholder="MANA JAIDEE">
                </div>
              </div>
              <div class="row mx-0">
                <div class="col-2 mr-2">
                    <font>PASSWORD</font>
                </div>
                <div class="col-3 ml-4">
                  <input type="password" class="form-control text-grey" aria-label="...">
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 py-4 text-center">
            <button type="button" class="btn btn-main profile-btn"><font class="producdetail-btn">ยืนยันข้อมูล</font></button>
            <a href="dashboard.php" type="button" class="btn btn-ghost profile-btn"><font class="producdetail-btn">ยกเลิก</font></a>
          </div>

      </div>
    </div>



    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
