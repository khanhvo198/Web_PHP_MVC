$(document).ready(function(){
    $("#btnSubmit").click(function() {
        oldpassword = $("#oldpassword").val();
        newpassword = $("#newpassword").val();
        confirmpassword = $("#confirmpassword").val();
        $("#oldpassword").val("");
        $("#newpassword").val("");
        $("#confirmpassword").val("");
        if (oldpassword != '' && newpassword != '' && confirmpassword != '' && newpassword == confirmpassword) {
            $.ajax({
                url: 'http://localhost/Web_Assignment_02/ChangePassword/process',
                type: 'post',
                dataType: 'json',
                data: {'oldpassword': oldpassword, 'newpassword': newpassword},
                success: function (response) {
                    if(response["status"] == "success") {
                        $("#resultModalLabel").html("Success");
                        $("#resultModalBody").html("Password reset successfully !");
                    } else {
                        $("#resultModalLabel").html("Fail");
                        $("#resultModalBody").html("Cannot reset password !");
                    }
                    $('#resultModal').modal('show');
                },
            });
        }
    });

    $("#btnOK").click(function() {
        $('#resultModal').modal('hide');
    });
});