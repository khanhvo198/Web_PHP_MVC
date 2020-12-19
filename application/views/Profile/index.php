<?php
    if(!isset($_SESSION['signedin'])){
        header("Location: ./Login");
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

                    </table>
                    <button type="button" class="align-self-center btn btn-secondary edit-profile" data-toggle="modal" data-target="#staticBackdrop">UPDATE PROFILE</button>
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













    // console.log(firstName,lastName,email,phone)


</script>