$(document).ready(function(){
    $("#btnEnroll").click(function() {
        // post request
        $.ajax({
            url: './Course/enroll',
            type: 'post',
            dataType: 'json',
            // data: {'oldpassword': oldpassword, 'newpassword': newpassword},
            success: function (response) {
                // if(response["status"] == "success") {
                //     $("#resultModalLabel").html("Success");
                //     $("#resultModalBody").html("Password reset successfully !");
                // } else {
                //     $("#resultModalLabel").html("Fail");
                //     $("#resultModalBody").html("Cannot reset password !");
                // }
                // $('#resultModal').modal('show');
            },
        });
     
    });

    // $("#btnOK").click(function() {
    //     $('#resultModal').modal('hide');
    // });
});