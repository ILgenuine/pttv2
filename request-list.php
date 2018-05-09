<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

<!-- ===================================== TABLE ==================================== -->

<!-- ===================================== TABLE ==================================== -->
    <div class="container-fluid">    

<!-- ================================ Input - Search ================================= -->
      <div class="row py-4 px-5">
        
        <div class="col-sm-12">
            <form class="form-inline" style="margin-bottom: 0px;">
              <p class="mr-2 text-grey">ใบสั่งซื้อสินค้า</p>
              <p class="mr-2 text-grey">></p>
              <p class="mr-2 text-darkblue">รายการใบสั่งซื้อทั้งหมด</p>
            </form>
        </div>

        <div class="col-md-9 col-12">
            <div class="form-group" style="width: 40%;">
              <select class="form-control" id="sel1">
                <option>Type Reqyest</option>
                <option>Type</option>
                <option>Reqyes</option>
                <option>รายการใบสั่งซื้อทั้งหมด</option>
              </select>
            </div>
        </div>


        <div class="col-md col-12">
          <div class="text-right">
            <button class="button plus-btn request-plus-btn-set"><i class="fa fa-plus"></i></button>
            <font class="ml-3">Keep On Shelf</font>
          </div>
        </div>

        <div class="col-md col-12">
          <div class="text-right">
            <button class="button plus-btn request-plus-btn-set"><i class="fa fa-plus"></i></button>
            <font class="ml-3">As Request</font>
          </div>
        </div>
        <!-- ====================================== Table ==================================== -->

        <div class="col-sm-12 mt-4">
          <div class="report-table-responsive">
            <table class="width-100 ptt-table">
              <thead >
                <tr>
                  <th class="text-center" style="width: 5%;">No.</th>
                  <th class="text-center" style="width: 11.25%;">Request Entry</th>
                  <th class="text-center" style="width: 11.25%;">Request Date ▼</th>
                  <th class="text-center" style="width: 11.25%;">Request No.</th>
                  <th class="text-center" style="width: 11.25%;">QTY</th>
                  <th class="text-center" style="width: 11.25%;">Unit</th>
                  <th class="text-center" style="width: 11.25%;">Price Total ▼</th>
                  <th class="text-center" style="width: 11.25%;">Delivery Date ▼</th>
                  <th class="text-center" style="width: 11.25%;"></th>
                  <th class="text-center" style="width: 5%;"></th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td class="text-center text-grey">1</td>
                  <td class="text-center text-blue">Keep On Shelf</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-001</td>
                  <td class="text-center text-grey">134</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">400,212 B.</td>
                  <td class="text-center text-grey">02/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">2</td>
                  <td class="text-center text-red">As Request</td>
                  <td class="text-center text-grey">05/01/2561</td>
                  <td class="text-center text-grey">RE-01-002</td>
                  <td class="text-center text-grey">26</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">98,011 B.</td>
                  <td class="text-center text-grey">06/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">3</td>
                  <td class="text-center text-red">As Request</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-003</td>
                  <td class="text-center text-grey">134</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">400,212 B.</td>
                  <td class="text-center text-grey">02/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">4</td>
                  <td class="text-center text-red">As Request</td>
                  <td class="text-center text-grey">05/01/2561</td>
                  <td class="text-center text-grey">RE-01-003</td>
                  <td class="text-center text-grey">26</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">98,011 B.</td>
                  <td class="text-center text-grey">06/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">5</td>
                  <td class="text-center text-blue">Keep On Shelf</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-006</td>
                  <td class="text-center text-grey">134</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">400,212 B.</td>
                  <td class="text-center text-grey">02/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">6</td>
                  <td class="text-center text-blue">Keep On Shelf</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-006</td>
                  <td class="text-center text-grey">134</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">400,212 B.</td>
                  <td class="text-center text-grey">02/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">7</td>
                  <td class="text-center text-blue">Keep On Shelf</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-007</td>
                  <td class="text-center text-grey">26</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">98,011 B.</td>
                  <td class="text-center text-grey">06/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">8</td>
                  <td class="text-center text-red">As Request</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-008</td>
                  <td class="text-center text-grey">134</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">400,212 B.</td>
                  <td class="text-center text-grey">02/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">9</td>
                  <td class="text-center text-red">As Request</td>
                  <td class="text-center text-grey">05/01/2561</td>
                  <td class="text-center text-grey">RE-01-009</td>
                  <td class="text-center text-grey">26</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">98,011 B.</td>
                  <td class="text-center text-grey">06/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
                </tr>

                <tr>
                  <td class="text-center text-grey">10</td>
                  <td class="text-center text-blue">Keep On Shelf</td>
                  <td class="text-center text-grey">01/01/2561</td>
                  <td class="text-center text-grey">RE-01-010</td>
                  <td class="text-center text-grey">134</td>
                  <td class="text-center text-grey">ชิ้น</td>
                  <td class="text-center text-grey">400,212 B.</td>
                  <td class="text-center text-grey">02/01/2561</td>
                  <td class="text-center text-grey"><u><a href="#" class="text-grey">ดูรายล่ะเอียด</a></u></td>
                  <td class="text-center"><a href="#" class="flaticon-download-button text-grey"></a></td>
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


      </div> <!-- row -->
    </div> <!-- Container -->






    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
