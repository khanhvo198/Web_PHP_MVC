<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: ./Login");
        exit();  
    }
?>

<?php $this->view("layout/header"); ?>
    
    <div class="changepassword row d-flex flex-column align-items-center">
        <h1 style="margin-bottom: 1em;">Change Password</h1>
        <form class="text-center d-flex flex-column align-items-center" style="width: 526px;">
            <input name="oldpassword" type="password" class="form-control" id="oldpassword" placeholder="Old password*">
            <input name="newpassword" type="password" class="form-control" id="newpassword" placeholder="New password*">
            <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" placeholder="Confirm new password*">
            <button name="btnSubmit" id="btnSubmit" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#resultModal">SUBMIT</button>

            <div class="align-self-start mt-5">
                <img src="./public/images/product/text.png" alt="">
            </div>
            <div class="align-self-center">
                <img src="./public/images/product/astronaut.png" alt="">
            </div>
        </form>
    </div>

<?php $this->view("layout/footer"); ?>



<!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resultModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="resultModalBody" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button id="btnOK" type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>