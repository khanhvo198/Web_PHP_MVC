<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: http://localhost/Web_Assignment_02/Login");
        exit();  
    }
?>


<?php $this->view("layout/header"); ?>

    <div class="profile row justify-content-center" style="height:80vh;">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-4 d-flex justify-content-center">
                    <img class="profile-img" src="./public/images/profile/TC_Avatar.png" alt="">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-start">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">First Name:</th>
                                <td><?php echo $this->data["firstname"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Last Name:</th>
                                <td><?php echo $this->data["lastname"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td><?php echo $this->data["email"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Phone:</th>
                                <td><?php echo $this->data["phone"] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="align-self-center btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop">UPDATE PROFILE</button>
                    <a href="./ChangePassword" class="align-self-center" style="font-size: 14px;font-weight: 600;" >Change password</a>
                </div>
            </div>
        </div>

        <div class="align-self-start mt-5">
            <img src="./public/images/product/text.png" alt="">
        </div>
        <div class="align-self-center">
            <img src="./public/images/product/astronaut.png" alt="">
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Update Profile</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name:</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name:</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone:</label>
                            <input type="number" class="form-control" id="phone">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>


<?php $this->view("layout/footer"); ?>