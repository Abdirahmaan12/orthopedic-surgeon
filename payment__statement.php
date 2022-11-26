<?php
include 'include/header.php';
?>



  <div id="wrapper">
    <!-- Sidebar -->
   <?php
   include 'include/sidebar.php';

?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php
    include 'include/nav.php';
       ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
   
     <div class="cl-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>payment Table</h5>
                <span class="d-block m-t-5"> <code></code>   </span>
                <form id="paymentiform">

                <div class="row">
                    <div class="col-sm-4">
                    <select name="type" id="type" class="form-control">
                            <option value="0">All</option>
                            <option value="custom">custom</option>
                        </select>
                    </div>

                  

                    <div class="col-sm-5">
                        <input type="text" name="payment_id" id="payment_id" class="form-control">
                    </div>


                    <div class="col-sm-4">
                    <button type="submit" id="Adddnew" class="btn btn-info m-3">Add new transaction</button>
                    </div>
                </div>
                </form>

                <div class="row">
                    <div class="table-responsive" id="print_area">
                    <img width="30%";  height="130px" src="inter.png" class="mb-3">

                    <table class="table" id="paymenttTable">
                              <thead>
                              
                              </thead>
                              <tbody>
                                       
  
                              </tbody>

                    </table>

                    </div>
                    <div class="col-sm-4">
                    <button id="printstatement" class="btn btn-success ml-1"><i class="fa fa-print"></i>print</button>
                    <button id="exportstatement" class="btn btn-info mr-4"><i class="fa fa-file"></i>Export</button>
                    </div>
                </div>
</div>
               
        </div>
     </div>



        <!---Container Fluid-->
      </div>
    
    </div>
  </div>
  
  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
  <!-- Scroll to top -->
 <?php
 include 'include/footer.php';
 ?>

  <!-- Scroll to top -->



