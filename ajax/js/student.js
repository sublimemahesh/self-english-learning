$(document).ready(function () {
    $('#create').click(function (event) {
        event.preventDefault();
        
       
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/post-and-get/student.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'beginner') {
                        swal({
                            title: "Congratulation.!",
                            text: "Now you have selected to beginner level.",
                            type: 'warning',
                            showCancelButton: false,
                            confirmButtonColor: "rgb(240, 169, 0)",
                            confirmButtonText: "Continue.",
                        }, function () {
                            window.location = "index.php";
                        });
                    } else if (result.status == 'intermediate') {
                        swal({
                            title: "Congratulation.!",
                            text: "Now you selected intermediate level.",
                            type: 'warning',
                            showCancelButton: false,
                            confirmButtonColor: "rgb(240, 169, 0)",
                            confirmButtonText: "Continue.",
                        }, function () {
                            window.location = "index.php";
                        });
                    } else if (result.status == 'advance') {
                        swal({
                            title: "Congratulation.!",
                            text: "Now you selected advanced level.",
                            type: 'warning',
                            showCancelButton: false,
                            confirmButtonColor: "rgb(240, 169, 0)",
                            confirmButtonText: "Continue.",
                        }, function () {
                            window.location = "index.php";
                        });
                    }
                }
            });
       
    });
    
    
    
    

});

