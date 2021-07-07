<?php
include "./dbcon.php";

$search_term = $_GET['q'];

$sql = "SELECT DISTINCT * FROM `course` WHERE UPPER(course_name) LIKE UPPER('%{$search_term}%')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}



include "./header.php"; ?>
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                <div class="row d-lg-flex justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-8 col-xl-9 ">
                        <h4 class="mb-3 mb-lg-0">Displaying <?= $result->num_rows ?> courses</h4>
                    </div>
                    
                    <div class="d-inline-flex col-md-6 col-lg-4 col-xl-3 ">
                        <div class="mr-2">
                            <!-- Nav -->
                            <div class="nav btn-group flex-nowrap" role="tablist">
                                <button class="btn btn-outline-white active" data-toggle="tab" data-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
                                    <span class="fe fe-grid"></span>
                                </button>
                                <button class="btn btn-outline-white" data-toggle="tab" data-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false">
                                    <span class="fe fe-list"></span>
                                </button>
                            </div>
                        </div>
                        <!-- List  -->
                        <select class="selectpicker" data-width="100%">
                            <option value="">Sort by</option>
                            <option value="Newest">Newest</option>
                            <option value="Free">Free</option>
                            <option value="Most Popular">Most Popular</option>
                            <option value="Highest Rated">Highest Rated</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Tab content -->
            <div class="col-xl-12 col-lg-12 col-md-8 col-12">
                <div class="tab-content">
                    <!-- Tab pane -->
                    <div class="tab-pane fade show active pb-4 " id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                        <div class="row">
                            <?php
                            if ($result->num_rows > 0) {


                                foreach ($data as $row) {
                            ?>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card  mb-4 card-hover">
                                            <a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="card-img-top"><img src="assets/images/course/course-<?= $row['course_category'] ?>.jpg" alt="" class="card-img-top rounded-top"></a>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="text-inherit"><?= $row['course_name']; ?></a>
                                                </h4>
                                                <!-- List inline -->
                                                <ul class="mb-3 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item">

                                                        <?php if ($row['course_level'] == 0) { ?>
                                                            <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                            </svg> Beginner
                                                        <?php } else if ($row['course_level'] == 1) { ?>
                                                            <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                            </svg> Intermediate
                                                        <?php } else if ($row['course_level'] == 2) { ?>
                                                            <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                            </svg> Advance
                                                        <?php } ?>


                                                    </li>
                                                </ul>
                                                <div class="lh-1">
                                                    <span>
                                                        <i class="mdi mdi-star text-warning mr-n1"></i>
                                                        <i class="mdi mdi-star text-warning mr-n1"></i>
                                                        <i class="mdi mdi-star text-warning mr-n1"></i>
                                                        <i class="mdi mdi-star text-warning mr-n1"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                    </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="font-size-xs text-muted">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer">
                                                <!-- Row -->
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ml-2">
                                                        <span><?= $row['course_author'] ?></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#!" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark  "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } else {
                                echo 'No record found';
                            }
                            ?>


                        </div>
                    </div>
                    <!-- Tab pane -->
                    <div class="tab-pane fade pb-4" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">

                        <?php
                        if ($result->num_rows > 0) {
                            foreach ($data as $row) {
                        ?>
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <div class="row no-gutters">
                                        <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded" style="background-image: url(assets/images/course/course-<?=$row['course_category']?>.jpg);" href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>">
                                            <img src="assets/images/course/course-<?=$row['course_category']?>.jpg" alt="..." class="img-fluid d-lg-none invisible">
                                        </a>
                                        <div class="col-lg-9 col-md-12 col-12">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <h3 class="mb-2 text-truncate-line-2 "><a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="text-inherit"><?=$row['course_name']?></a></h3>
                                                <!-- List inline -->
                                                <ul class="mb-5 list-inline">
                                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m
                                                    </li>
                                                    <li class="list-inline-item">
                                                    
                                                    <?php if ($row['course_level'] == 0) { ?>
                                                            <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                            </svg> Beginner
                                                        <?php } else if ($row['course_level'] == 1) { ?>
                                                            <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                                                            </svg> Intermediate
                                                        <?php } else if ($row['course_level'] == 2) { ?>
                                                            <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                                                            </svg> Advance
                                                        <?php } ?>
                                                        
                                                        
                                                        </li>
                                                    <li class="list-inline-item"> <span>
                                                            <i class="mdi mdi-star text-warning mr-n1"></i>
                                                            <i class="mdi mdi-star text-warning mr-n1"></i>
                                                            <i class="mdi mdi-star text-warning mr-n1"></i>
                                                            <i class="mdi mdi-star text-warning mr-n1"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="font-size-xs text-muted">(9,300)</span>
                                                    </li>
                                                </ul>
                                                <!-- Row -->
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="col ml-2">
                                                        <span><?= $row['course_author']?></span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#!" class="text-muted bookmark">
                                                            <i class="fe fe-bookmark"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } else {
                            echo 'No record found';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./footer.php" ?>