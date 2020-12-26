<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: ./Login");
        exit();  
    }
?>


<?php $this->view("layout/header"); ?>

    <div class="profile row justify-content-center" style="height:80vh;">
    <div class="alert alert-primary fade hidden" style="display:none">
        Update success.
        <button type="button" class="close-alert close">&times;</button>
    </div>
        <div class="col-md-12">
            <div class="row justify-content-center">
                <!-- <div class="col-md-4 d-flex align-items-center flex-column">
                    <img class="profile-img" src="<?php echo $this->get_url("../public/images/profile/TC_Avatar.png") ?>" alt="">

                </div> -->
                <div class="col-md-4 d-flex align-items-center flex-column">
                    <div class="avatar-wrapper mt-0">
                        <img class="profile-img" src="<?php 
                            if ($this->data['avatar'] != '') { 
                                echo $this->get_url("../".$this->data['avatar'].'"') ;
                            } 
                            else echo $this->get_url("../public/images/profile/TC_Avatar.png");
                            ?>" alt="">
                            <!-- <img src="<?php echo $this->get_url("../".$this->data['avatar'].'"') ;?> class="profile-img" alt=""> -->
                        <div class="upload-button">
                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </div>
                        <input class="file-upload" type="file" name="avatar" accept="image/*"/>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-submit-img" style="display:none">Submit</button>
                    </div>
                </div>
                

                <div class="col-md-6 d-flex flex-column justify-content-start">
                    <table class="table">
                    </table>
                    <button type="button" class="align-self-center btn btn-secondary edit-profile" data-toggle="modal" data-target="#staticBackdrop">UPDATE PROFILE</button>
                    <a href="./ChangePassword" class="align-self-center" style="font-size: 14px;font-weight: 600;" >Change password</a>
                </div>
            </div>
        </div>

        <div class="align-self-start mt-5">
            <img src="<?php echo $this->get_url("../public/images/product/text.png") ?>" alt="">
        </div>
        <div class="align-self-center">
            <img src="<?php echo $this->get_url("../public/images/product/astronaut.png") ?>" alt="">
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
                            <input type="text" class="form-control" name="firstname"  id="edit_firstname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name:</label>
                            <input type="text" class="form-control" name="lastname" id="edit_lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" class="form-control" name="email" id="edit_email" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone:</label>
                            <input type="number" class="form-control" name="phone" id="edit_phone">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="update-profile">Update</button>
                </div>
            </div>
        </div>
    </div>

<?php $this->view("layout/footer"); ?>
<script>

    $("body").on("click",".edit-profile" , () => {
        let firstName = document.getElementById("firstname").innerText
        let lastName = document.getElementById("lastname").innerText
        let email = document.getElementById("email").innerText
        let phone = document.getElementById("phone").innerText

        $("#edit_firstname").val(firstName)
        $("#edit_lastname").val(lastName)
        $("#edit_email").val(email)
        $("#edit_phone").val(phone)
    })


    $("#update-profile").on("click" , ()=> {
        // console.log($("#edit_firstname").val())
        $.ajax({
            dataType:'json',
            url: './Profile/update',
            type:'post',
            data: {
                firstName : $("#edit_firstname").val(),
                lastName  : $("#edit_lastname").val(),
                email      : $("#edit_email").val(),
                phone: $("#edit_phone").val()
            },
            success: function() {
                $("#edit_firstname").val('')
                $("#edit_lastname").val('')
                $("#edit_phone").val('')
                getProfileUser()
                $(".modal").modal('hide')
            }
        })
    })


    const getProfileUser = () => {
        $.ajax({
            dataType: 'json',
            url:'./Profile/getProfileUser',
            type:'post',
            data: {
                email: '<?php echo $_SESSION['email']; ?>'
            },
            success: (data) => {
                printData(data)
            }

        })
    }


    const printData = (data) => {
        rows = ``
        rows += `<tbody>`
        rows += `<tr>`
        rows += `<th scope="row">FirstName</th>`
        rows += `<td id="firstname" >${data.FirstName}</td>`
        rows += `</tr>`
        rows +=  `<tr>`
        rows += `<th scope="row">Last Name:</th>`
        rows += `<td id="lastname">${data.LastName}</td>`
        rows += `</tr>`
        rows += `<tr>`
        rows += `<th scope="row">Email:</th>`
        rows += `<td id="email">${data.Email}</td>`
        rows += `</tr>`
        rows += `<tr>`
        rows += `<th scope="row">Phone:</th>`
        rows += `<td id="phone">${data.Phone}</td>`
        rows += `</tr>`
        rows += `</tbody>`
        $("table").html(rows)
    }


    getProfileUser();



    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-img').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
        $(".file-upload").click();
        $(".btn-submit-img").show()
    });

    $("body").on('click', '.btn-submit-img' , function() {
        // console.log($('.profile-img').attr('src'))

        let formData = new FormData();
        let files = $('.file-upload')[0].files;
        // console.log(files)
        // Check file selected or not
        if(files.length > 0 ){
        formData.append('avatar',files[0]);
        // console.log(formData)
        $.ajax({
            url: './Profile/updateAvatar',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data){
                $(".alert").removeClass('hidden')
                $(".alert").addClass('show')
                $('.alert').css("display","")
                $('.btn-submit-img').hide()
            },
        });
        } else{
            alert("Please select a file.");
        }

    })


    $("body").on('click', '.close-alert', function() {
        $(".alert").css("display","none")
        $(".alert").removeClass('show')
        $('.alert').addClass('hidden')
    })








    // console.log(firstName,lastName,email,phone)


</script>