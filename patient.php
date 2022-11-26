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
        <div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="text-end">
        <button type="button" class="btn btn-outline-primary  m-2" data-bs-toggle="modal" data-bs-target="#patientmodal">
       Add patient
         </button>
         </div>
        <table class="table  table-hover table-bordered border-primary" id="patientTable">

        <thead>
       

            
        </thead>

        <tbody>
   
        <!-- <tr>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          
        </tr>
        <tr>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          
        </tr>
        <tr>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          
        </tr>
        <tr>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          <td>welcome</td>
          
        </tr> -->
        
     
        </tbody>
        </table>
        </div>
       </div>
    </div>
  </div>
</div>
        <!---Container Fluid-->
      </div>
    
    </div>
  </div>


  <div class="modal fade" id="patientmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Patients</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="patientform">
        <input type="hidden" name="update_id" id="update_id">
        <div class="row">
            <div class="col-12">
             <div class="alert alert-success d-none" role="alert">
            This is a success alert—check it out!
            </div>
            <div class="alert alert-danger d-none" role="alert">
            This is a danger alert—check it out!
            </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                <label for="">first_name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                <label for="">last_name</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
                </div>

            </div>

            <div class="col-sm-12">
                <div class="form-group">
                <label for="">phone</label>
                <input type="number" name="phone" id="phone" class="form-control">
                </div>

            </div>

            <div class="col-sm-12">
                <div class="form-group">
                <label for="">Adress</label>
                <input type="text" name="adress" id="adress" class="form-control">
                </div>

            </div>

            <div class="col-sm-12">
                <div class="form-group">
                <label for="">state</label>
                <input type="text" name="state" id="state" class="form-control">
                </div>

            </div>

           
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="insert" class="btn btn-primary">Save Info</button>
      </div>
     </form>
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