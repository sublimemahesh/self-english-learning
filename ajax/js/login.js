
//loging validation
$(document).ready(function () { 

    $('#login').click(function (event) {
        event.preventDefault();

        if (!$('#student_id').val() || $('#student_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter the student id..!",
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
        } else {

            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/post-and-get/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {

                    if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Invalid username or password..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success.!",
                            text: "You have successfully login..!",
                            type: 'success',
                            timer: 1500,
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
        return false;
    }); 
}); 