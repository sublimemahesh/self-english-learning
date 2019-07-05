
window.onload = function () {
    var id = $('#id').val();

    $.ajax({
        url: "ajax/post-and-get/check-login.php",
        type: "POST",
        data: {
            action: 'CHECKLOGIN',
            id: id
        },
        dataType: "JSON",
        success: function (jsonStr) {

            if (jsonStr.status == 'true') {

                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    cancelButtonText: "Start Begginer",
                    showCancelButton: true,
                    confirmButtonColor: "rgb(240, 169, 0)",
                    confirmButtonText: "Test Paper",

                }, function (isConfirm) {
                    if (isConfirm) {
                        window.location = "test-paper.php";
                    } else {
                        $.ajax({
                            url: "ajax/post-and-get/check-login.php",
                            type: "POST",
                            data: {
                                action: 'UPDATESTATUS',
                                id: id
                            },
                            dataType: "JSON",
                            success: function (jsonStr) {
                               if(jsonStr.status == 'success'){
                                    swal({
                                        title: "Congratulation.!",
                                        text: "Now you selected beginner level.",
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
                    }
                });
            }

        }
    });

};




