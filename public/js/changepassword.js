$(document).ready(function(){
    $("#btnSubmit").click(function() {
        // get form input
        oldpassword = $("#oldpassword").val();
        newpassword = $("#newpassword").val();
        confirmpassword = $("#confirmpassword").val();
        // reset form
        $("#oldpassword").val("");
        $("#newpassword").val("");
        $("#confirmpassword").val("");
        // validate input
        if (oldpassword == '' || newpassword == '' || confirmpassword == '') {
            $("#resultModalLabel").html("Error");
            $("#resultModalBody").html("Empty field !");
            $('#resultModal').modal('show');
            return;
        }
        if (newpassword != confirmpassword) {
            $("#resultModalLabel").html("Error");
            $("#resultModalBody").html("Password not match !");
            $('#resultModal').modal('show');
            return;       
        }
        // post request
        $.ajax({
            url: './ChangePassword/process',
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
     
    });

    $("#btnOK").click(function() {
        $('#resultModal').modal('hide');
    });
});