/// Ajax Call for admindent login Verification
function checkAdminLogin() {
    //console.log("Button Clicked");
    var adminLogEmail = $("#adminLogmail").val();
    var adminLogPass = $("#adminLogpass").val();
    $.ajax({
        url: "Admin/admin.php",
        method: "POST",
        data: {
            checkLogemail: "checklogemail",
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success : function (data) {
            //console.log(data);
            if(data == 0){
                $("#statusAdminLogMsg").html(
                    '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
                );
            }else if(data == 1){
                $("#statusAdminLogMsg").html(
                    '<small class="alert alert-success">Success Loading..........</small>'
                );
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }
        },
    });

}