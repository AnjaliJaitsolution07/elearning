$(document).ready(function(){
    //Ajax call from already exists Email Verification
    $("#stuemail").on("keypress blur", function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkemail",
                stuemail: stuemail,
            },
            success: function (data) {
                //console.log(data);
                if (data != 0){
                    $("#statusMsg4").html(
                        '<small style="color:red;">Email ID Already Used !</small>'
                    );
                    $("#signup").attr("disabled",true);
                }else if(data == 0 && reg.test(stuemail)){
                    $("#statusMsg4").html(
                        '<small style="color:green;">There You Go !</small>'
                    );
                    $("#signup").attr("disabled",false);
                }else if(!reg.test(stuemail)) {
                    $("#statusMsg4").html(
                        '<small style="color:red;">Please Enter valid Email e.g. example@gmail.com  !</small>'
                    );
                    $("#signup").attr("disabled", false);
                }
            },
        });
    });
});


function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var address = $("#address").val();
    var contactnum = $("#contactnum").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
    //console.log(stuname)

    ///checking Form Fields on Form Submission
    if(stuname.trim()==""){
        $("#statusMsg1").html(
            '<small style="color:red;">Please Enter Name !</small>'
        );
        $("#stuname").focus();
        return false;
    }else if (address.trim()==""){
        $("#statusMsg2").html(
            '<small style="color:red;">Please Enter Address !</small>'
        );
        $("#address").focus();
        return false;        
    }
    else if (contactnum.trim()==""){
        $("#statusMsg3").html(
            '<small style="color:red;">Please Enter Contact No. !</small>'
        );
        $("#contactnum").focus();
        return false;        
    }
    else if (stuemail.trim()==""){
        $("#statusMsg4").html(
            '<small style="color:red;">Please Enter Email !</small>'
        );
        $("#stuemail").focus();
        return false;        
    }else if (stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg4").html(
            '<small style="color:red;">Please Enter valid Email e.g. example@mail.com !</small>'
        );
        $("#stuemail").focus();
        return false;    
    }
    else if (stupass.trim()==""){
        $("#statusMsg5").html(
            '<small style="color:red;">Please Enter Password !</small>'
        );
        $("#stupass").focus();
        return false;        
    }else{
        $.ajax({
            url:'Student/addstudent.php',
            method: 'POST',
            dataType: "json",
            data:{
                stusignup: "stusignup",
                stuname: stuname,
                address : address,
                contactnum : contactnum,
                stuemail : stuemail,
                stupass : stupass,
            },
            success:function(data){
                console.log(data);
                if(data=="OK"){
                    $("#successMsg").html("<span class='alert alert-success'> Registration Successful !</span>");
                    clearStuRegField()
                }else if(data == "Failed"){
                    $("#successMsg").html("<span class='alert alert-danger'>Unable to Registration</span>");
                }
            },
        });

    }

   
}

///Empaty all fields
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
    $("#statusMsg4").html(" ");
    $("#statusMsg5").html(" ");
    
}

/// Ajax Call for student login Verification
function checkStuLogin() {
    var stuLogEmail = $("#stuLogmail").val();
    var stuLogPass = $("#stuLogpass").val();
    $.ajax({
        url: "Student/addstudent.php",
        method: "POST",
        data: {
            checkLogemail: "checklogemail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass,
        },
        success : function (data) {
            //console.log(data);
            if(data == 0){
                $("#statusLogMsg").html(
                    '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
                );
            }else if(data == 1){
                $("#statusLogMsg").html(
                    '<div class="spinner-border text-success" role="status"></div>'
                );
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }
        },
    });

}