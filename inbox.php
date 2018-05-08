<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

<!-- ===================================== TABLE ==================================== -->
<div class="container-fluid">
  <div class="row py-4 px-3">
    <div class="col-md-6">
      <div><h3 class="text-darkblue">Inbox</h3></div>
    </div>
    <div class="col-md-4">
      <div>
        <input placeholder="ค้นหา" type="text" class="form-control search-form text-center">
        <button class="search-box">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-right">
        <button class="button plus-btn"><i class="fa fa-plus"></i></button>
        <b class="text-grey"> เพิ่มหัวข้อคำถาม</b>
      </div>
    </div>






<!-- =================== Inbox - table ==================================== -->
      <div class="col-sm-12 mt-4">
          <div class="report-table-responsive">
            <table class="width-100 ptt-table">
              <thead >
                <tr>
                  <th class="text-center" style="width: 5%;">No.</th>
                  <th class="text-center" style="width: 50%;">Topic</th>
                  <th class="text-center" style="width: 9%;">Message From</th>
                  <th class="text-center" style="width: 9%;">Message Date ▼</th>
                  <th class="text-center" style="width: 9%;">Message Reply</th>
                  <th class="text-center" style="width: 9%;">Message Date ▼</th>
                  <th class="text-center" style="width: 9%;"></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="text-center text-grey">1</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม AA</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">มานี ดีใจ</td>
                  <td class="text-center text-grey">01/01/2561 10.00</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">2</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม BB</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">3</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม CC</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">4</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม DD</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">5</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม EE</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">6</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม FF</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">7</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม GG</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">8</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม HH</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">9</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม II</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
                <tr>
                  <td class="text-center text-grey">10</td>
                  <td class="text-left text-darkblue">หัวข้อคำถาม JJ</td>
                  <td class="text-center text-grey">มานะ ใจดี</td>
                  <td class="text-center text-grey">01/01/2561 09.00</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center text-grey">-</td>
                  <td class="text-center"><a href="#" class="fa fa-reply text-grey" aria-hidden="true" data-toggle="modal" data-target="#exampleModal"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-sm-12 py-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center report-pagination5">
              <li class="page-item">
                <a class="page-link bnt-pagination-previous text-blue" href="#" tabindex="-1"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
              </li>
              <li class="page-item"><a class="page-link text-blue" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-blue" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-blue" href="#">3</a></li>
              <li class="page-item"><a class="page-link text-blue" href="#">4</a></li>
              <li class="page-item"><a class="page-link text-blue" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link bnt-pagination-next text-blue" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </nav>
        </div>

      </div>


            <!-- Button trigger modal -->
<!--       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
      </button>
 -->

    </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b class="text-darkblue">หัวข้อคำถาม AA</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="flaticon-cancel icon-darkblue nav-icon inbox-bnt-closd"></span>
              </button>
            </div>



            <div class="modal-body">
              <div class="row">
                  <!-- left chat-->
                  <div class="col-sm-12 mb-2">
                    <div class="pull-left">
                        <font class="text-grey">มานะใจดี 30/03/2561 09.00 น.</font><br>
                          <div class="pull-left">
                            <img src="assets/images/profile-picture.png" class="footer-sp" style="position:relative;top:5px">
                          </div>
                          <div class="pull-left left-chat-mt">
                            <font class="left-chat-bubble">
                              สอบถาม
                            </font>
                          </div>
                    </div>
                  </div>
                  <!-- Right chat-->
                  <div class="col-sm-12 mb-2 pull-right">
                    <div class="pull-right">
                      <font class="text-grey pull-right">Web Master 30/03/2561 09.10 น.</font><br>
                      <div class="pull-right">
                        <img src="assets/images/profile-picture.png" class="footer-sp" style="position:relative;top:5px">
                      </div>
                      <div class="pull-right right-chat-mt">
                        <font class="right-chat-bubble">
                          คำตอบ
                        </font>
                      </div>
                    </div>
                  </div>
                  <!-- left chat-->
                  <div class="col-sm-12 mb-2">
                    <div class="pull-left">
                        <font class="text-grey">มานะใจดี 30/03/2561 09.15 น.</font><br>
                          <div class="pull-left">
                            <img src="assets/images/profile-picture.png" class="footer-sp" style="position:relative;top:5px">
                          </div>
                          <div class="pull-left left-chat-mt">
                            <font class="left-chat-bubble">
                              สอบถาม
                            </font>
                          </div>
                    </div>
                  </div>
                  <!-- Right chat-->
                  <div class="col-sm-12  mb-2 pull-right">
                    <div class="pull-right">
                      <font class="text-grey  pull-right">Web Master 30/03/2561 09.10 น.</font><br>
                      <div class="pull-right">
                        <img src="assets/images/profile-picture.png" class="footer-sp" style="position:relative;top:5px">
                      </div>
                      <div class="pull-right right-chat-mt">
                        <font class="right-chat-bubble">
                          คำตอบ
                        </font>
                      </div>
                    </div>
                  </div>
                  <!-- left chat-->
                  <div class="col-sm-12 mb-2">
                    <div class="pull-left">
                        <font class="text-grey">มานะใจดี 30/03/2561 09.15 น.</font><br>
                          <div class="pull-left">
                            <img src="assets/images/profile-picture.png" class="footer-sp" style="position:relative;top:5px">
                          </div>
                          <div class="pull-left left-chat-mt">
                            <font class="left-chat-bubble">
                              สอบถาม
                            </font>
                          </div>
                    </div>
                  </div>
              </div>
            </div>



            <div class="modal-footer" style="padding-top: 35px;">
                <div class="col-sm-10">
                  <div class="inbox-footer-left-30px">
                    <input type="text" class="form-control" style="margin-top: -50px;">
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="text-right inbox-footer-right-35px mb-2"><button type="button" class="btn btn-main modal-btn">ส่ง</button></div>
                  <div class="text-right inbox-footer-right-35px">
                    <label class="fileContainer">
                        <button type="button" class="btn btn-ghost modal-btn">แนบไฟล์</button>
                        <input type="file">
                    </label>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>




<!-- ================================== END ============================================= -->
    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
