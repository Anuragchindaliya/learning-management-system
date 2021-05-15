$(document).ready(function() {
    
    // check user is already exist or not through email is registered or not
    var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        $("#stuemail").on("blur",function(){
            
            var stuemail = $("#stuemail").val();
            // console.log(stuemail);
            $.ajax({
                url: 'student/addstudent.php',
                method:'post',
                data:{
                    checkemail:"checkemail",
                    stuemail:stuemail
                },
                success:function(data){
                    // console.log(data);
                    
                    if(data !=0){
                        $('#emailstatus').text("User already register");
                        $("#signupbtn").attr("disabled",true);
                    }else if(data == 0 && stuemail.length>4 && reg.test(stuemail)){
                        $('#emailstatus').html('<span class="text-success">There you go</span>');
                        $("#signupbtn").attr("disabled",false);
                    }else if(stuemail.length>4 && !reg.test(stuemail)){
                        $('#emailstatus').text('Please Enter valid email e.g example@mail.com');
                        $("#signupbtn").attr("disabled",true);
                    }
                    else{
                        $('#emailstatus').text("");
                        $("#signupbtn").attr("disabled",false);
                    }
                }
            })
        })



    // 
    // add student funtion on submit trigger
    // 
    $("#addstuform").submit(function(event) {
       
        var nameval =$("#username").val();
        var emailval =$("#stuemail").val();
        var passwordval =$("#password").val();
        
        if(nameval.trim()==''){
            $('#namestatus').text("Please enter Name!");
            $('#username').focus();
            return false;
        } else if(emailval.trim()==''){
            $('#emailstatus').text("Please enter Email!");
            $('#stuemail').focus();
            return false;
        }
        else if(passwordval.trim()==''){
            $('#passwordstatus').text("Please enter Password!");
            $('#password').focus();
            return false;
        }else if(emailval.trim()=='' && reg.test(emailval)){
            $('#emailstatus').text("Please Valid Eamil e.g example@gmail.com!");
            $('#stuemail').focus();

            return false;
        }
        var formData = {
            stusignup: "signup",
            stuname: nameval,
            stuemail:emailval,
            stupassword: passwordval
        };

        $.ajax({
            type: "POST",
            url: "student/addstudent.php",
            data: formData,
            dataType: "json",
            // encode: true,
            success: function(data){
                console.log(data);
                if (data == "OK") {
                $(".addstatus").html(`<div class="alert alert-success alert-dismissible fade show mt-2 mb-0" role="alert">
                              Account Created Successfully
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>`);

                    clearform();
                
            } else {
                $(".addstatus").html(`Registration successfully`);
            }
            }
        }).done(function(data) {
            // console.log(data);
            // setInterval(function() {
            // 		$(".addstatus").slideDown();
            // 	}, 2000);
            $('#namestatus').text("");
        });

        event.preventDefault();
        return false;
    });
});

function clearform(){
    $("#addstuform")[0].reset();
    $('#namestatus').text("");
    $('#emailstatus').text("");
    $('#paswordstatus').text("");
};

//student login signin ajax request
$("#signInForm").submit(function(event){
    var signInEmail = $("#signInEmail").val();
    var signInPassword = $("#signInPassword").val();
    $.ajax({
        url:"student/addstudent.php",
        method:"post",
        data:{
            checkSignIn:"checkSignIn",
            signInEmail:signInEmail,
            signInPassword:signInPassword
        },
        success: function(data){
            console.log(data);
            if(data==0){
                $("#signStatus").html(`<b class="text-danger mt-1">Invalid Email and password</b>`);
            }else if(data==1){
                $("#signStatus").html(`<div class="spinner-border text-success mt-1" role="status"></b>`);
                setTimeout(()=>{
                    window.location.href="index.php";
                },1000);
            }
           
        }
    });

    event.preventDefault();
});

