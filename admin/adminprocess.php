<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../dbcon.php";

#################
// admin login 
##################
if (!isset($_SESSION['is_admin_login'])) {



    if (isset($_POST['adminLogIn']) && isset($_POST['adminEmail']) && isset($_POST['adminPassword'])) {

        $adminEmail = $_POST['adminEmail'];
        $adminPassword = $_POST['adminPassword'];

        $sql = "SELECT admin_name,admin_email,admin_pass FROM admin WHERE admin_email = '$adminEmail' AND admin_pass = '$adminPassword' ";
        $result = $conn->query($sql);
        $row = $result->num_rows;
        if ($row === 1) {
            $data = $result->fetch_assoc();
            $_SESSION['admin_name'] = $data['admin_name'];
            $_SESSION['is_admin_login'] = true;
            $_SESSION['admin_email'] = $adminEmail;

            echo json_encode($row);
        } else if ($row === 0) {
            echo json_encode($row);
        }
    }
}

###########################
// insert course in database
#############################
if(isset($_SESSION)){
if (isset($_POST['course_title']) && isset($_POST['course_desc'])) {
    $courseTitle = $_POST['course_title'];
    $courseDesc = $_POST['course_desc'];
    $adminName = $_POST['course_admin'];
    $course_id = $_POST['course_id'];
    


    $sql = "INSERT INTO `course` (`course_id`,`course_name`, `course_desc`, `course_author`) VALUES ('$course_id','$courseTitle','$courseDesc','$adminName') on duplicate key update `course_name`='$courseTitle',`course_desc`='$courseDesc', `course_author`='$adminName'";
    $result = $conn->query($sql);

    if ($result) {
        echo json_encode("ok");
    }
}
}

        // retrieve course from database
        if (isset($_POST['readFlag'])) {
            $adminName = $_POST['course_admin'];
            $data = '<table class="table mb-0 text-nowrap" id="course_table">
            <thead>
                <tr>
                    <th scope="col" class="border-0 text-uppercase">
                        Courses
                    </th>
                    <th scope="col" class="border-0 text-uppercase">
                        Instructor
                    </th>
                    <th scope="col" class="border-0 text-uppercase">
                        STATUS
                    </th>
                    <th scope="col" class="border-0 text-uppercase">
                        ACTION
                    </th>
                    <th scope="col" class="border-0 text-uppercase"></th>
                </tr>
            </thead>';
            $displayquery = "SELECT * FROM `course`";
            $displayResult = $conn->query($displayquery);
           
            if ($displayResult->num_rows > 0) {
                $number = 1;
                    while ($row = $displayResult->fetch_assoc()) {
                        if($adminName==$row['course_author']){
                            $editbtn='<span class="dropdown">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Settings</span>
                                <button class="dropdown-item d-flex align-items-center" onclick="editCourse('.$row['course_id'].')"><i class="fe fe-settings dropdown-item-icon"></i>Edit</button>
                                <button class="dropdown-item d-flex align-items-center" onclick="deleteCourse('.$row['course_id'].')"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject</button>
                            </span>
                        </span>';
                        }else
                        {
                            $editbtn='';
                        }
                        $data .= '<tr>
                                    <td class="border-top-0">
                                        <a href="#!" class="text-inherit">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded" />
                                                </div>
                                                <div class="ml-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 text-primary-hover">
                                                        '.$row['course_name'].'
                                                    </h4>
                                                    <span class="text-inherit">Added on '.date('d M, y h:i A ',strtotime($row['created_at'])).'</span>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <div class="d-flex align-items-center">
                                            <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                            <h5 class="mb-0">'.$row['course_author'].'</h5>
                                        </div>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                        <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        
                                        '.$editbtn.'
                                    </td>
                                </tr>';
                    }
            }
            $data .=' </tbody>
            </table>';
            echo $data;
        }
        // ***************************
        // Delete course from database
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        if(isset($_POST['deleteId'])){
            $deleteId = $_POST['deleteId'];

            $deleteQuery = "DELETE FROM `course` WHERE course_id = '$deleteId'";
            $conn->query($deleteQuery);
        }
       
        // get Details in input field from database

        if(isset($_POST['editId'])){
            $editId = $_POST['editId'];
            $editQuery = "SELECT * FROM `course` WHERE course_id = '$editId'";
            $result = $conn->query($editQuery);
            $data = $result->fetch_assoc();
            echo json_encode($data);

        }
