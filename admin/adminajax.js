$(document).ready(function () {

    //admin login signin ajax request
    $("#adminForm").submit(function (event) {
        var adminEmail = $("#adminemail").val();
        var adminPassword = $("#adminpassword").val();
        $.ajax({
            url: "./adminprocess.php",
            method: "post",
            data: {
                adminLogIn: "adminLogIN",
                adminEmail: adminEmail,
                adminPassword: adminPassword
            },
            success: function (data) {
                console.log(data);
                if (data == 0) {
                    $("#adminLog").html(`<b class="text-danger mt-1">Invalid Email and password</b>`);
                } else if (data == 1) {
                    $("#adminLog").html(`<div class="spinner-border text-success mt-1" role="status"></b>`);
                    setTimeout(() => {
                        window.location.href = "../pages/dashboard/admin-dashboard.php";
                    }, 1000);
                }
            }
        });

        event.preventDefault();
    });
});