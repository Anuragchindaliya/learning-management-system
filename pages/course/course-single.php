<base href="../../">
<?php include '../../dbcon.php'; ?>

<?php include "../../header.php"; ?>
<?php
if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
    $sql = "SELECT * FROM course WHERE course_id='$course_id'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    if ($course_id != $row['course_id']) {
        echo ("<script>location.href = 'http://localhost/geeks-online';</script>");
    } else {
        // course view count
        $viewSql = $conn->query("UPDATE course set view_count = view_count+1 where course_id = $course_id");

        // total course of a author
        $author = $row['course_author'];
        $countQuery = $conn->query("SELECT COUNT(*) total FROM course WHERE course_author='$author'");
        $totalCourse = $countQuery->fetch_assoc();
        $totalResult = $totalCourse['total'];

        // total student
        $countStudent = $conn->query("select count(*) as students from student");
        $fetchStudent = $countStudent->fetch_assoc();
        $totalStudent = $fetchStudent['students'];
    }
} else {
    
    echo ("<script>location.href = 'http://localhost/geeks-online';</script>");
}
?>


<!-- Page header -->
<div class="pt-lg-8 pb-lg-16 pt-8 pb-12 bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div>
                    <h1 class="text-white display-4 font-weight-semi-bold"><?= $row['course_name'] ?></h1>
                    <p class="text-white mb-6 lead">
                        <?= $row['course_desc'] ?>
                    </p>
                    <div class="d-flex align-items-center">
                        <a href="#!" class="bookmark text-white text-decoration-none">
                            <i class="fe fe-bookmark text-white-50 mr-2"></i>Bookmark
                        </a>

                        <span class="text-white ml-3"><i class="fe fe-user text-white-50"></i> 1200 Enrolled </span>
                        <span class="ml-4">
                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                            <i class="mdi mdi-star mr-n1-half text-warning"></i>
                            <span class="text-white">(140)</span>
                        </span>
                        <span class="text-white ml-4 d-none d-md-block">
                            <svg width="16" height="16" viewBox="0 0 16
                              16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9"></rect>
                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                            </svg>
                            <span class="align-middle">
                                <?php
                                if ($row['course_level'] == 0) {
                                    echo 'Beginner';
                                } elseif ($row['course_level'] == 1) {
                                    echo 'Intermidiate';
                                } elseif ($row['course_level'] == 2) {
                                    echo 'Advance';
                                }
                                ?>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card rounded-lg">
                    <!-- Card header -->
                    <div class="card-header border-bottom-0 p-0">
                        <div>
                            <!-- Nav -->
                            <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="table-tab" data-toggle="pill" href="#table" role="tab" aria-controls="table" aria-selected="true">Contents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="description-tab" data-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="transcript-tab" data-toggle="pill" href="#transcript" role="tab" aria-controls="transcript" aria-selected="false">Transcript</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faq-tab" data-toggle="pill" href="#faq" role="tab" aria-controls="faq" aria-selected="false">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
                                <!-- Card -->
                                <div class="accordion" id="courseAccordion">
                                    <div>
                                        <h1><?= ucFirst($row['course_name']) ?></h1>
                                        <p><?= $row['course_desc'] ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b>Difficulty level : </b>
                                                <?php
                                                if ($row['course_level'] == 0) {
                                                    echo 'Beginner';
                                                } elseif ($row['course_level'] == 1) {
                                                    echo 'Intermidiate';
                                                } elseif ($row['course_level'] == 2) {
                                                    echo 'Advance';
                                                }
                                                ?>
                                            </div>
                                            <div>
                                                <b>Course category</b>
                                                <?= $row['course_category'] ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b>Instructor : </b>
                                                <?= ucFirst($row['course_author']) ?>
                                            </div>
                                            <div>
                                                <b>Published on : </b>
                                                <?= date('d M, y | h:i A ', strtotime($row['created_at'])); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <!-- Description -->
                                <?= $row['course_desc'] ?>
                                <!-- <div class="mb-4">
                                    <h3 class="mb-2">Course Descriptions</h3>
                                    <p>
                                        If you’re learning to program for the first time, or if you’re coming from a
                                        different language, this course, JavaScript: Getting Started, will give you the
                                        basics for coding in JavaScript. First, you'll discover the types of
                                        applications that can be
                                        built with JavaScript, and the platforms they’ll run on.
                                    </p>
                                    <p>
                                        Next, you’ll explore the basics of the language, giving plenty of examples.
                                        Lastly, you’ll put your JavaScript knowledge to work and modify a modern,
                                        responsive web page. When you’re finished with this course, you’ll have the
                                        skills and knowledge in JavaScript
                                        to create simple programs, create simple web applications, and modify web pages.
                                    </p>
                                </div>
                                <h4 class="mb-3">What you’ll learn</h4>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success mr-2 mt-2"></i>
                                                <span>Recognize the importance of understanding your objectives when
                                                    addressing an
                                                    audience.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success mr-2 mt-2"></i>
                                                <span>Identify the fundaments of composing a successful close.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success mr-2 mt-2"></i>
                                                <span>Explore how to connect with your audience through crafting
                                                    compelling stories.</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success mr-2 mt-2"></i>
                                                <span>Examine ways to connect with your audience by personalizing your
                                                    content.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success mr-2 mt-2"></i>
                                                <span>Break down the best ways to exude executive presence.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success mr-2 mt-2"></i>
                                                <span>Explore how to communicate the unknown in an impromptu
                                                    communication.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Maecenas viverra condimentum nulla molestie condimentum. Nunc ex libero, feugiat quis
                                    lectus vel, ornare euismod ligula. Aenean sit amet arcu nulla.</p>
                                <p>Duis facilisis ex a urna blandit ultricies. Nullam sagittis ligula non eros semper,
                                    nec mattis odio ullamcorper. Phasellus feugiat sit amet leo eget consectetur.</p>
                            -->
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <!-- Reviews -->
                                <div class="mb-3">
                                    <h3 class="mb-4">How students rated this courses</h3>
                                    <div class="row align-items-center">
                                        <div class="col-auto text-center">
                                            <h3 class="display-2 font-weight-bold">4.5</h3>
                                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            <i class="mdi mdi-star mr-n1-half text-warning"></i>
                                            <p class="mb-0 font-size-xs">(Based on 27 reviews)</p>
                                        </div>
                                        <!-- Progress bar -->
                                        <div class="col pt-3 order-3 order-md-2">
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-0" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-6 order-2 order-md-3">
                                            <!-- Rating -->
                                            <div>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <span class="ml-1">53%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <span class="ml-1">36%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <span class="ml-1">9%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <span class="ml-1">3%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <i class="mdi mdi-star mr-n1 text-light"></i>
                                                <span class="ml-1">2%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- hr -->
                                <hr class="my-5" />
                                <div class="mb-3">
                                    <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                        <!-- Reviews -->
                                        <div class="mb-3 mb-lg-0">
                                            <h3 class="mb-0">Reviews</h3>
                                        </div>
                                        <div>
                                            <!-- Form -->
                                            <form class="form-inline">
                                                <div class="d-flex align-items-center mr-2">
                                                    <span class="position-absolute pl-3">
                                                        <i class="fe fe-search"></i>
                                                    </span>
                                                    <input type="search" class="form-control pl-6" placeholder="Search Review" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="media border-bottom pb-4 mb-4">
                                        <img src="assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class="media-body ml-3">
                                            <h4 class="mb-1">
                                                Max Hawkins
                                                <span class="ml-1 font-size-xs text-muted">2 Days ago</span>
                                            </h4>
                                            <div class="font-size-xs mb-2">
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            </div>
                                            <p>Lectures were at a really good pace and I never felt lost. The instructor
                                                was well informed and allowed me to learn and navigate Figma easily.</p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="media border-bottom pb-4 mb-4">
                                        <img src="assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class="media-body ml-3">
                                            <h4 class="mb-1">Arthur Williamson <span class="ml-1 font-size-xs text-muted">3 Days ago</span>
                                            </h4>
                                            <div class="font-size-xs mb-2">
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            </div>
                                            <p>Its pretty good.Just a reminder that there are also students with
                                                Windows, meaning Figma its a bit different of yours. Thank you!</p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="media border-bottom pb-4 mb-4">
                                        <img src="assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class="media-body ml-3">
                                            <h4 class="mb-1">Claire Jones <span class="ml-1 font-size-xs text-muted">4
                                                    Days ago</span></h4>
                                            <div class="font-size-xs mb-2">
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            </div>
                                            <p>
                                                Great course for learning Figma, the only bad detail would be that some
                                                icons are not included in the assets. But 90% of the icons needed are
                                                included, and the voice of the instructor was very clear and easy to
                                                understood.
                                            </p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="media">
                                        <img src="assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class="media-body ml-3">
                                            <h4 class="mb-1">
                                                Bessie Pena
                                                <span class="ml-1 font-size-xs text-muted">5 Days ago</span>
                                            </h4>
                                            <div class="font-size-xs mb-2">
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                                <i class="mdi mdi-star mr-n1 text-warning"></i>
                                            </div>
                                            <p>
                                                I have really enjoyed this class and learned a lot, found it very
                                                inspiring and helpful, thank you!
                                                <i class="em em-heart_eyes ml-2 font-size-xs"></i>
                                            </p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#!" class="btn btn-xs btn-primary ml-lg-3">Yes</a>
                                                <a href="#!" class="btn btn-xs btn-outline-white ml-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="transcript" role="tabpanel" aria-labelledby="transcript-tab">
                                <!-- Description -->
                                Not available
                                <!-- <div>
                                    <h3 class="mb-3">Transcript from the "Introduction" Lesson</h3>
                                    <div class="mb-4">
                                        <h4>Course Overview <a href="#!" class="text-primary ml-2 h4">[00:00:00]</a>
                                        </h4>
                                        <p class="mb-0">
                                            My name is John Deo and I work as human duct tape at Gatsby, that means that
                                            I do a lot of different things. Everything from dev roll to writing content
                                            to writing code. And I used to work as an architect at IBM. I live in
                                            Portland, Oregon.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Introduction <a href="#!" class="text-primary ml-2 h4">[00:00:16]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Why Take This Course? <a href="#!" class="text-primary ml-2 h4">[00:00:37]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>A Look at the Demo Application <a href="#!" class="text-primary ml-2 h4">[00:00:54]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Summary <a href="#!" class="text-primary ml-2 h4">[00:01:31]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                            <!-- Tab pane -->
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                <!-- FAQ -->
                                <div>
                                    <h3 class="mb-3">Course - Frequently Asked Questions</h3>
                                    <div class="mb-4">
                                        <h4>How this course help me to design layout?</h4>
                                        <p>
                                            My name is Jason Woo and I work as human duct tape at Gatsby, that means
                                            that I do a lot of different things. Everything from dev roll to writing
                                            content to writing code. And I used to work as an architect at IBM. I live
                                            in Portland, Oregon.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>What is important of this course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Why Take This Course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Is able to create application after this course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use
                                            the pieces of it that we need to build in Gatsby. We're not gonna be doing a
                                            deep dive into what GraphQL is or the language specifics. We're also gonna
                                            get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mt-lg-n22">
                <!-- Card -->
                <div class="card mb-3 mb-4">
                    <div class="p-1">
                        <div class="d-flex justify-content-center position-relative rounded py-10 border-white border rounded-lg bg-cover" style="background-image: url(assets/images/course/course-<?= $row['course_category'] ?>.jpg);">
                            <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl text-decoration-none" href="<?= $row['course_url'] ?>">
                                <i class="fe fe-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Price single page -->
                        <div class="mb-3">
                            <span class="text-dark font-weight-bold h2">FREE</span>
                            <del class="font-size-md text-muted">
                                ₹<?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price']); ?>
                            </del>
                        </div>
                        <a class="popup-youtube btn btn-primary btn-block icon-shape  text-decoration-none" href="<?= $row['course_url'] ?>">
                            Start Free Month
                        </a>

                        <a href="pricing.html" class="btn btn-outline-primary btn-block">Get Full Access</a>
                    </div>
                </div>
                <!-- Card -->
                <div class="card mb-4">
                    <div>
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">What’s included</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent"><i class="fe fe-play-circle align-middle mr-2 text-primary"></i>12 hours video</li>
                            <li class="list-group-item bg-transparent"><i class="fe fe-award mr-2 align-middle text-success"></i>Certificate</li>
                            <li class="list-group-item bg-transparent"><i class="fe fe-calendar align-middle mr-2 text-info"></i>12 Article
                            </li>
                            <li class="list-group-item bg-transparent"><i class="fe fe-video align-middle mr-2 text-secondary"></i>Watch Offline</li>
                            <li class="list-group-item bg-transparent border-bottom-0"><i class="fe fe-clock align-middle mr-2 text-warning"></i>Lifetime access</li>
                        </ul>
                    </div>
                </div>
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="position-relative">
                                <img src="assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle avatar-xl" />
                                <a href="#!" class="position-absolute mt-2 ml-n3" data-toggle="tooltip" data-placement="top" title="Verifed">
                                    <img src="assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
                                </a>
                            </div>
                            <div class="ml-4">
                                <h4 class="mb-0"><?= $row['course_author'] ?></h4>
                                <p class="mb-1 font-size-xs">Front-end Developer, Designer</p>
                                <span class="font-size-xs"><span class="text-warning">4.5</span><span class="mdi mdi-star text-warning mr-2"></span>Instructor Rating</span>
                            </div>
                        </div>
                        <div class="border-top row mt-3 border-bottom mb-3 no-gutters">
                            <div class="col">
                                <div class="pr-1 pl-2 py-3">
                                    <h5 class="mb-0"><?= $totalStudent ?></h5>
                                    <span>Students</span>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class="pr-1 pl-3 py-3">
                                    <h5 class="mb-0"><?= $totalResult ?></h5>
                                    <span>Courses</span>
                                </div>
                            </div>
                            <div class="col border-left">
                                <div class="pr-1 pl-3 py-3">
                                    <h5 class="mb-0">12,230</h5>
                                    <span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <p>I am an Innovation designer focussing on UX/UI based in Berlin. As a creative resident at
                            Figma explored the city of the future and how new technologies.</p>
                        <a href="instructor-profile.html" class="btn btn-outline-white btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div class="pt-12 pb-3">
            <div class="row d-md-flex align-items-center mb-4">
                <div class="col-12">
                    <h2 class="mb-0">Related Courses</h2>
                </div>
            </div>
            <div class="row">
                <?php
                // related course with same category
                $courseCategory = $row['course_category'];
                $relatedcourse = $conn->query("select * from course where course_category='$courseCategory'");

                if ($relatedcourse->num_rows > 0) {
                    // output data of each row
                    while ($row = $relatedcourse->fetch_assoc()) {
                ?>
                        <div class="col-lg-3 col-md-6 col-12">
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

                                        <span class="text-dark font-weight-bold">₹
                                            <?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price']);
                                            ?></span>
                                        <del class="font-size-xs text-muted">₹<?= preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $row['course_price'] + 200); ?></del>
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
</div>
<!-- Footer -->
<!-- Footer -->
<?php include "../../footer.php" ?>