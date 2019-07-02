$(document).ready(function () {
    $('#registration').click(function (event) {
        event.preventDefault();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        
        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter full name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#student_id ').val() || $('#student_id ').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your student id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
       
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!emailReg.test($('#email').val())) {
            swal({
                title: "Error!",
                text: "please enter a valid email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#batch').val() || $('#batch').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the batch..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#password').val() || $('#password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#confirm-password').val() || $('#confirm-password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the confirm password..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if ($('#password').val() !== $('#confirm-password').val()) {
            swal({
                title: "Error!",
                text: "Please enter the Password does not match..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {

            var formData = new FormData($("form#register-form")[0]);

            $.ajax({
                url: "ajax/post-and-get/registration.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {

                    if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Some Error",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success.!",
                            text: " Your Account has been Active now.",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("index.php");
                            }, 2000);
                        });
                    }
                }
            });
        }
    });
});