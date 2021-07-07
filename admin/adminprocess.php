<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../dbcon.php";

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    }

#################
// admin login 
##################

if (!isset($_SESSION['is_admin_login'])) {


    if (isset($_POST['adminLogIn']) && isset($_POST['adminEmail']) && isset($_POST['adminPassword'])) {


        $adminEmail = test_input($_POST['adminEmail']);
        $adminPassword = test_input($_POST['adminPassword']);
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
// live search 
#############################
if(isset($_POST['check'])&& $_POST['check']=="search"){
    $adminName = test_input($_POST['course_admin']);
    $search_term = test_input($_POST['search']);
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
            
    $displayquery = "SELECT DISTINCT * FROM `course` WHERE UPPER(course_name) LIKE UPPER('%{$search_term}%')";
    $displayResult = $conn->query($displayquery);

    if ($displayResult->num_rows > 0) {
        $number = 1;
        while ($row = $displayResult->fetch_assoc()) {
            if ($adminName == $row['course_author']) {
                $editbtn = '<span class="dropdown">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Settings</span>
                                <button class="dropdown-item d-flex align-items-center" onclick="editCourse(' . $row['course_id'] . ')"><i class="fe fe-settings dropdown-item-icon"></i>Edit</button>
                                <button class="dropdown-item d-flex align-items-center" onclick="deleteCourse(' . $row['course_id'] . ')"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject</button>
                            </span>
                        </span>';
            } else {
                $editbtn = '';
            }
            $data .= '<tr>
                                    <td class="border-top-0">
                                        <a href="#!" class="text-inherit">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <img src="../../assets/images/course/course-'.$row['course_category'].'.jpg" alt="" class="img-4by3-lg rounded" />
                                                </div>
                                                <div class="ml-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 text-primary-hover">
                                                        ' . $row['course_name'] . '
                                                    </h4>
                                                    <span class="text-inherit">Added on ' . date('d M, y | h:i A ', strtotime($row['created_at'])) . '</span>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <div class="d-flex align-items-center">
                                            <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                            <h5 class="mb-0">' . $row['course_author'] . '</h5>
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
                                        
                                        ' . $editbtn . '
                                    </td>
                                </tr>';
        }
    }else{
        echo "no data found";
    }
    $data .= ' </tbody>
            </table>';
    echo $data;
}

###########################
// insert course in database
#############################
if (isset($_SESSION)) {
    if (isset($_POST['add_course']) && $_POST['add_course'] == 'add_course') {
        // sleep(3);
        $courseTitle = test_input($_POST['course_title']);
        $courseDesc = test_input($_POST['course_desc']);
        $adminName = test_input($_POST['course_admin']);
        $course_id = test_input($_POST['course_id']);
        $course_image = test_input($_POST['course_image']);
        $course_category = test_input($_POST['course_category']);
        $course_level = test_input($_POST['course_level']);
        $course_fees = test_input($_POST['course_fees']);
        $course_url = test_input($_POST['course_url']);
       


        // $courseTitle = $_POST['courseTitle'];
        // $courseDesc = $_POST['courseDescription'];
        // $adminName = $_POST['course_admin'];
        // $course_id = $_POST['course_id'];
        // $course_image = $_POST['courseCategory'];
        // $course_image = $_POST['courseLevel'];
        // $course_image = $_POST['courseBigDesc'];
        // $course_image = $_FILES['coursePhoto'];


        // echo '<pre>';
        // echo print_r($_REQUEST);
        // die;



        // $target_dir = "uploads/";
        // $target_file = $target_dir . basename($_FILES["course_image"]["name"]);
        // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if $uploadOk is set to 0 by an error
        // if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
            
        // } else {
        //     if (move_uploaded_file($_FILES["course_image"]["tmp_name"], $target_file)) {
        //         echo "The file " . htmlspecialchars(basename($_FILES["course_image"]["name"])) . " has been uploaded.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // }




        $sql = "INSERT INTO `course` (`course_id`,`course_name`, `course_desc`,`course_url`, `course_category`, `course_level`, `course_author`,`course_img`,`course_price`) VALUES ('$course_id','$courseTitle','$courseDesc','$course_url','$course_category','$course_level','$adminName','$course_image','$course_fees') on duplicate key update `course_name`='$courseTitle',`course_desc`='$courseDesc',`course_url`='$course_url',`course_category`='$course_category',`course_level`='$course_level', `course_author`='$adminName',`course_img`='$course_image',`course_price`='$course_fees'";
        $result = $conn->query($sql);

        if ($result) {
            echo json_encode("ok");
        }
        else{
            echo json_encode("php mistake");
        }
    }
}

// retrieve course from database
if (isset($_POST['readFlag'])) {
    $adminName = test_input($_POST['course_admin']);
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
            if ($adminName == $row['course_author']) {
                $editbtn = '<span class="dropdown">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Settings</span>
                                <button class="dropdown-item d-flex align-items-center" onclick="editCourse(' . $row['course_id'] . ')"><i class="fe fe-settings dropdown-item-icon"></i>Edit</button>
                                <button class="dropdown-item d-flex align-items-center" onclick="deleteCourse(' . $row['course_id'] . ')"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject</button>
                            </span>
                        </span>';
            } else {
                $editbtn = '';
            }
            $data .= '<tr>
                                    <td class="border-top-0">
                                        <a href="#!" class="text-inherit">
                                            <div class="d-lg-flex align-items-center">
                                                <div>
                                                    <img src="../../assets/images/course/course-'.$row['course_category'].'.jpg" alt="" class="img-4by3-lg rounded" />
                                                </div>
                                                <div class="ml-lg-3 mt-2 mt-lg-0">
                                                    <h4 class="mb-1 text-primary-hover">
                                                        ' . $row['course_name'] . '
                                                    </h4>
                                                    <span class="text-inherit">Added on ' . date('d M, y | h:i A ', strtotime($row['created_at'])) . '</span>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                        <div class="d-flex align-items-center">
                                            <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                            <h5 class="mb-0">' . $row['course_author'] . '</h5>
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
                                        
                                        ' . $editbtn . '
                                    </td>
                                </tr>';
        }
    }
    $data .= ' </tbody>
            </table>';
    echo $data;
}
// ***************************
// Delete course from database
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if (isset($_POST['deleteId'])) {
    $deleteId = test_input($_POST['deleteId']);

    $deleteQuery = "DELETE FROM `course` WHERE course_id = '$deleteId'";
    $conn->query($deleteQuery);
}

// get Details in input field from database

if (isset($_POST['editId'])) {
    $editId = test_input($_POST['editId']);
    $editQuery = "SELECT * FROM `course` WHERE course_id = '$editId'";
    $result = $conn->query($editQuery);
    $data = $result->fetch_assoc();
    echo json_encode($data);
}
