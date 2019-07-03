$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "full_name": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the first name..!"
                    }
                ]
            },
            "email": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the email..!"
                    },
                    {
                        "type": "email",
                        "message": "Please enter the valid email..!"
                    }
                ]
            },
            "student_id": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the Student ID..!"
                    }
                ]
            },
            "password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your password..!"
                    }
                ]
            },
            "birth_month": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your birth month..!"
                    }
                ]
            },
            "birth_day": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your birth  day..!"
                    }
                ]
            }, 
            "birth_day": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your birth  day..!"
                    }
                ]
            },  
            "birth-year": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your birth year ..!"
                    }
                ]
            }, "batch": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your batch..!"
                    }
                ]
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function () {
        form.test();
        if (form.errors() == 0) {
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/post-and-get/registration.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) { 
                    window.location.replace("index.php");
                }
            });
        }
        return false;
    });


});