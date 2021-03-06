<?php include "header.php" ?>
<!-- Page Content -->
<div class="bg-primary">
    <div class="container">
        <!-- Hero Section -->
        <div class="row align-items-center no-gutters">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="py-5 py-lg-0">
                    <h1 class="text-white display-4 font-weight-bold">Welcome to Geeks Tech Learning Application
                    </h1>
                    <p class="text-white-50 mb-4 lead">
                        Hand-picked Instructor and expertly crafted courses, designed for the modern students and
                        entrepreneur.
                    </p>
                    <a href="./editor/index.php" class="btn btn-success">Static Editor</a>
                    <a href="admin/adminsignin.php" class="btn btn-white instructor">Are You Instructor?</a>
                </div>
            </div>
            <div class=" col-xl-7 col-lg-6 col-md-12 text-lg-right text-center">
                <img src="assets/images/hero/hero-img.png" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-4 shadow-sm">
    <div class="container">
        <div class="row align-items-center no-gutters">
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                <div class="d-flex align-items-center">
                    <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md ">
                        <i class="fe fe-video"> </i></span>
                    <div class="ml-3">
                        <h4 class="mb-0 font-weight-semi-bold">30,000 online courses</h4>
                        <p class="mb-0">Enjoy a variety of fresh topics</p>
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                <div class="d-flex align-items-center">
                    <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md ">
                        <i class="fe fe-users"> </i></span>
                    <div class="ml-3">
                        <h4 class="mb-0 font-weight-semi-bold">Expert instruction</h4>
                        <p class="mb-0">Find the right instructor for you</p>
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="d-flex align-items-center">
                    <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md ">
                        <i class="fe fe-clock"> </i></span>
                    <div class="ml-3">
                        <h4 class="mb-0 font-weight-semi-bold">Lifetime access</h4>
                        <p class="mb-0">Learn on your schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Recommended to you</h2>
            </div>
        </div>
        <div class="position-relative">
            <ul class="controls " id="sliderFirstControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="sliderFirst">
                <?php
                include "./dbcon.php";
                $sql = "SELECT * FROM course";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="item">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="card-img-top"><img src="assets/images/course/course-<?= $row['course_category'] ?>.jpg" alt="" class="rounded-top card-img-top"></a>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="text-inherit"><?= $row['course_name'] ?></a></h4>
                                    <!-- List -->
                                    <ul class="mb-3 list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
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
                                    <!-- Price -->
                                    <div class="lh-1 mt-3">

                                        <span class="text-dark font-weight-bold">???
                                            <?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price']);
                                            ?></span>
                                        <del class="font-size-xs text-muted">???<?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price'] + 200); ?></del>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="col ml-2">
                                            <span><?= ucfirst($row['course_author']) ?></span>
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



                <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                ?>


            </div>
        </div>
    </div>
</div>
<div class="pb-lg-3 pt-lg-3">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Most Popular</h2>
            </div>
        </div>
        <div class="position-relative">
            <ul class="controls " id="sliderSecondControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="sliderSecond">

                <?php
                include "./dbcon.php";
                $sql = "SELECT * FROM course ORDER BY view_count desc  limit 6";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="item">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="card-img-top"><img src="assets/images/course/course-<?= $row['course_category'] ?>.jpg" alt="" class="rounded-top card-img-top"></a>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="text-inherit"><?= $row['course_name'] ?></a></h4>
                                    <!-- List -->
                                    <ul class="mb-3 list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
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
                                    <!-- Price -->
                                    <div class="lh-1 mt-3">

                                        <span class="text-dark font-weight-bold">???
                                            <?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price']);
                                            ?></span>
                                        <del class="font-size-xs text-muted">???<?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price'] + 200); ?></del>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="col ml-2">
                                            <span><?= ucfirst($row['course_author']) ?></span>
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



                <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                ?>
            </div>
            
        </div>
    </div>
</div>
<div class="pb-lg-8 pt-lg-3 py-6">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Trending</h2>
            </div>

        </div>
        <div class="position-relative">
            <ul class="controls" id="sliderThirdControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="sliderThird">

                <?php
                include "./dbcon.php";
                $sql = "SELECT * FROM course ORDER BY course_id desc  limit 8";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="item">
                            <!-- Card -->
                            <div class="card  mb-4 card-hover">
                                <a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="card-img-top"><img src="assets/images/course/course-<?= $row['course_category'] ?>.jpg" alt="" class="rounded-top card-img-top"></a>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course/course-single.php?course_id=<?= $row['course_id'] ?>" class="text-inherit"><?= $row['course_name'] ?></a></h4>
                                    <!-- List -->
                                    <ul class="mb-3 list-inline">
                                        <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
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
                                    <!-- Price -->
                                    <div class="lh-1 mt-3">

                                        <span class="text-dark font-weight-bold">???
                                            <?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price']);
                                            ?></span>
                                        <del class="font-size-xs text-muted">???<?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price'] + 200); ?></del>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <img src="assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="col ml-2">
                                            <span><?= ucfirst($row['course_author']) ?></span>
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



                <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                ?>



            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>