<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>
<!-- ============================ content ============================================= -->
     <div class="content-fluid">

        <div class="row py-4 px-5">
          <div class="col-sm-12">
            <form class="form-inline" style="margin-bottom: 0px;">
              <p class="mr-2 text-grey">ใบสั่งซื้อ</p>
              <p class="mr-2 text-grey">></p>
              <p class="mr-2 text-darkblue">KEEP ON SHELF</p>
            </form>
          </div>


           <div class="col-sm-12 grey-box">
              <div class="row mt-4 mb-4 ml-4 mr-4">
                    <div class="col-sm-2 mt-4 text-grey">
                       Request No :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="RE-01-001" disabled>
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                        Request Data :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="02/01/2561" disabled>
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                      Data Require :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="01/01/2561" disabled>
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                      Confirm Data :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="01/01/2561" disabled>
                    </div>



                    <div class="col-sm-2 mt-4 text-grey">
                      Plant :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <select class="form-control text-grey">
                        <option>test1</option>
                        <option>test2</option>
                        <option>test3</option>
                        <option>test4</option>
                      </select>
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                      Division :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <select class="form-control text-grey">
                        <option>test1</option>
                        <option>test2</option>
                        <option>test3</option>
                        <option>test4</option>
                      </select>
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                      Request Name :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="Mana jaidee">
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                      Tel :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="080-0000000">
                    </div>



                    <div class="col-sm-2 mt-4 text-grey">
                      Work Order No :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="RE 01-000015" disabled>
                    </div>



                    <div class="col-sm-2 mt-4 text-grey">
                      Email :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="..." placeholder="Mana@gmail.com">
                    </div>

                    <div class="col-sm-2 mt-4 text-grey">
                      Cost Center :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="...">
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                      Type of Contact :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <select class="form-control text-grey">
                        <option>test1</option>
                        <option>test2</option>
                        <option>test3</option>
                        <option>test4</option>
                      </select>
                    </div>


                    <div class="col-sm-2 mt-4 text-grey">
                        Work location :
                    </div>
                    <div class="col-sm-4 mt-4">
                      <select class="form-control text-grey">
                        <option>test1</option>
                        <option>test2</option>
                        <option>test3</option>
                        <option>test4</option>
                      </select>
                    </div>
                    <div class="col-sm-6 mt-4">
                    </div>


                    <div class="col-sm-2 mt-4 mb-4 text-grey">
                      Head Note :
                    </div>
                    <div class="col-sm-10 mt-4 mb-4">
                      <input type="text" class="form-control text-grey" style="margin:0px;text-align:left;" aria-label="...">
                    </div>

              </div>
           </div>

        </div>


<!-- =================== Table ====================================== -->
        <div class="row px-4 mb-4">
          <div class="col-sm-9">
            <div class="ml-1">
              <button class="button plus-btn"><i class="fa fa-plus"></i></button>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="row text-right pr-2">
              <div class="col-3"><a class="flaticon-copy-content inbox-icon-size"></a></div>
              <div class="col-3"><a class="flaticon-letter inbox-icon-size"></a></div>
              <div class="col-3"><a class="flaticon-printing-tool inbox-icon-size"></a></div>
              <div class="col-3"><a class="flaticon-download-button inbox-icon-size"></a></div>
            </div>
          </div>


          <div class="col-sm-12 mt-2">
            <table class="table width100" style="margin:auto;">
              <thead>
                <tr>
                  <th class="text-center" style="width: 3%">No.</th>
                  <th class="text-center" style="width: 14.8%">รูปสินค้า</th>
                  <th class="text-center" style="width: 14.8%">รหัสสินค้า</th>
                  <th class="text-center" style="width: 14.8%">รายการสินค้า</th>
                  <th class="text-center" style="width: 10%">QTY.</th>
                  <th class="text-center" style="width: 5%">Unit</th>
                  <th class="text-center" style="width: 5%">Price</th>
                  <th class="text-center" style="width: 14.8%">Total Price (Bath)</th>
                  <th class="text-center" style="width: 14.8%">Status</th>
                  <th class="text-center" style="width: 3%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="inbox-border-table text-center vertical-middle">1.</td>
                  <td class="inbox-border-table text-center vertical-middle"><img src="assets/images/product/product_1.png" width="70%"></td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">RE-01-001</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">สีทาถนนไปสะท้อนแสง JOTUN สีดำ</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">50</td>
                  <td class="inbox-border-table text-center vertical-middle">ชิ้น</td>
                  <td class="inbox-border-table text-center vertical-middle">100</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">5,000</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle text-green" style="border-right: none;">NEW REQUSET</td>
                  <td class="inbox-border-table vertical-middle" style="border-left: none;">
                      <button class="button inbox-quantity-minus"><i class="fa fa-minus"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="inbox-border-table text-center vertical-middle">2.</td>
                  <td class="inbox-border-table text-center vertical-middle"><img src="assets/images/img-300.jpg" width="70%"></td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">RE-01-002</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">น้ำยาลอกสี</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">50</td>
                  <td class="inbox-border-table text-center vertical-middle">ชิ้น</td>
                  <td class="inbox-border-table text-center vertical-middle">100</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle">5,000</td>
                  <td class="inbox-border-table px-3 text-center vertical-middle text-green" style="border-right: none;">NEW REQUSET</td>
                  <td class="inbox-border-table vertical-middle" style="border-left: none;position: relative;">
                      <button class="button inbox-quantity-minus"><i class="fa fa-minus"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="inbox-border-table request-total text-darkblue" colspan="10">Total 20,000 Bath</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row">
            <div class="col-sm-12 mt-4 mb-5">
              <div class="text-center">
                <button type="button" class="btn btn-main request-bnt-size">ยืนยันข้อมูล</button>
                <button type="button" class="btn btn-ghost request-bnt-size">กลับไปเลือกสินค้าต่อ</button>
              </div>
            </div>
        </div>

     </div>


<!-- ============================ #END content ============================================= -->
    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
