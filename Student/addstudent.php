<?php
include('C:\xampp\htdocs\elearning\dbConnection.php');

//Checking Email Alresy Registered
if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
    $stuemail= $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".
    $stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}
// Insert Student


if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['address'])
&& isset($_POST['contactnum']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){
    $stuname =$_POST['stuname'];
    $address = $_POST['address'];
    $contactnum = $_POST['contactnum'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];

    $sql = "INSERT INTO student(stu_name, stu_address, stu_contact,
    stu_email, stu_pass ) VALUES ('$stuname', '$address', '$contactnum',
    '$stuemail', '$stupass')";

    if($conn->query($sql) == TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("Failed");
    }

    
}


?>