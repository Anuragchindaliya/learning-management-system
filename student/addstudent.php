<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../dbcon.php";

// checking email is already register or not
if (isset($_POST['checkemail']) && isset($_POST['stuemail'])) {
    $stuemail = test_input($_POST['stuemail']);
    $sql = "SELECT stu_email FROM student WHERE stu_email ='" . $stuemail . "'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}


// insert data into table

if (isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupassword'])) {

    $stuname = test_input($_POST['stuname']);
    $stuemail = test_input($_POST['stuemail']);
    $stupassword = test_input($_POST['stupassword']);
    $sql = "INSERT INTO student (stu_name,stu_email,stu_pass) values ('$stuname','$stuemail','$stupassword')";

    if ($conn->query($sql) == true) {
        echo json_encode("OK");
    } else {
        echo json_encode("Failed");
    }
}


// student login 
if (!isset($_SESSION['is_login'])) {
    if (isset($_POST['checkSignIn']) && isset($_POST['signInEmail']) && isset($_POST['signInPassword'])) {

        $signInEmail = $_POST['signInEmail'];
        $signInPassword = $_POST['signInPassword'];

        $sql = "SELECT stu_name,stu_email,stu_pass FROM student WHERE stu_email = '$signInEmail' AND stu_pass = '$signInPassword' ";
        $result = $conn->query($sql);
        $row = $result->num_rows;
        if ($row === 1) {
            $data=$result->fetch_assoc();
            $_SESSION['stuName'] = $data['stu_name'];
            $_SESSION['is_login'] = true;
            $_SESSION['stuSignEmail'] = $signInEmail;
            
            echo json_encode($row);
        } else if($row===0){
            echo json_encode($row);
        }
    }
}