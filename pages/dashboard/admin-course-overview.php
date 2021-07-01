<?php include_once "adminheader.php"; ?>
<!-- Container fluid -->
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page Header -->
            <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h1 class="mb-1 h2 font-weight-bold">Courses</h1>
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="admin-dashboard.php">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Courses</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                All
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="../add-course.php" class="btn btn-primary" data-toggle="modal" data-target=".gd-example-modal-lg">Add New Courses</a>
                </div>
            </div>
        </div>
    </div>

    <!-- addcourse modal start from here -->

    <div class="modal fade gd-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="">
                        <h1 class="mb-1 font-weight-bold">Basic Information</h1>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addcourse" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="courseTitle" class="form-label">Course Title</label>
                            <input id="courseTitle" class="form-control" type="text" placeholder="Course Title" name="courseTitle" required>
                            <small>Write a 60 character course title.</small>
                        </div>

                        <div class="form-group">
                            <label for="courseDesc" class="form-label">Course Description</label>
                            <input id="courseDesc" class="form-control" type="text" placeholder="Course Description" name="courseDescription" required>
                            <small>Write a 250 character course description.</small>
                        </div>
                        <div class="form-group">
                            <label for="courseUrl" class="form-label">Course Video URL</label>
                            <input id="courseUrl" class="form-control" type="url" placeholder="https://www.youtube.com/watch?v=BLl32FvcdVM" name="courseDescription" required>
                                <small>Drop only Video ID not ChannelName.</small>
                        </div>

                        <div class="form-group">
                            <label for="courseImage" class="form-label">Course Image</label>
                            <div class="form-group d-grid" style="grid-template-columns: 70% 30%;">
                                <input id="courseImage" class="form-control" type="file" placeholder="Course Image" name="coursePhoto" required>
                                <label id="setImage" class="btn btn-primary" onclick="checkImage($('#setImage'))">Upload image</label>
                                <small>Image should less than 100kb*</small>
                            </div>



                        </div>
                        <!-- 
                        <div class="input-group">
                            <label for="courseDesc" class="form-label">Course Image</label>
                            <input id="courseDesc" class="form-control" type="file" placeholder="Course Image" required>
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            <small>Write a 250 character course description.</small>
                        </div> -->

                        <div class="form-group">
                            <label class="form-label">Courses category</label>
                            <div class="dropdown bootstrap-select" style="width: 100%;">
                                <select id="courseCategory" class="selectpicker" data-width="100%" name="courseCategory" required>
                                    <option value="">Select category</option>
                                    <option value="react">React</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="html">HTML</option>
                                    <option value="Vue">Vue js</option>
                                    <option value="gatsby">Gatsby</option>
                                    <option value="angular">Angular</option>
                                    <option value="bootstrap">Bootstrap</option>
                                    <option value="css">CSS</option>
                                    <option value="laravel">Laravel</option>
                                    <option value="node">Node</option>
                                    <option value="python">Python</option>
                                    <option value="Sass">Sass</option>
                                    <option value="wordpress">WordPress</option>
                                </select>
                                <!-- <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select category">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Select category</div>
                                            </div>
                                        </div>
                                    </button> -->
                                <!-- <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div> -->
                            </div>
                            <small>Help people find your courses by choosing
                                categories that represent your course.</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="form-label">Courses level</label>
                                <div class="dropdown bootstrap-select" style="width: 100%;">
                                    <select class="selectpicker" data-width="100%" name="courseLevel" id="courseLevel" required>
                                        <option value="">Select level</option>
                                        <option value="0">Intermediate</option>
                                        <option value="1">Beignners</option>
                                        <option value="2">Advance</option>
                                    </select>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="courseTitle" class="form-label">Course Fees</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₹</span>
                                    </div>
                                    <input id="courseFees" type="number" placeholder="₹0.00" class="form-control" aria-label="Amount (to the nearest rupees)">
                                </div>

                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-6">
                                <label for="courseTitle" class="form-label">Course Fees</label>
                                <input id="courseTitle" class="form-control" type="text" placeholder="Course Title" name="courseTitle" required>
                                <small>Write a 60 character course title.</small>
                            </div>
                            <div class="col-md-6">

                                <label for="courseTitle" class="form-label">Course Duration</label>
                                <input id="courseDuration" class="form-control" type="time" required>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="form-label">Course Description</label>

                            <div id="editor" class="ql-container ql-snow">
                                <div class="ql-editor" data-gramm="false" contenteditable="true">
                                    <p>Insert course description</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p><br></p>
                                </div>
                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                <div class="ql-tooltip ql-hidden">
                                    <a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>
                                    <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" name="courseBigDesc" required>
                                    <a class="ql-action"></a>
                                    <a class="ql-remove"></a>
                                </div>
                            </div>
                            <small>A brief summary of your courses.</small>

                        </div>
                        <div style="display: flex;    gap: 1rem;    justify-content: flex-end;">
                            <input type="hidden" id="course_id">
                            <input type="reset" class="btn btn-primary" id="clearText" value="clear" onclick="$('.selectpicker').selectpicker('refresh');"></input>
                            <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" id="addCourseBtn" value="Add course"></input>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <!-- addcourse modal end from here -->







    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card rounded-lg">
                <!-- Card header -->
                <div class="card-header border-bottom-0 p-0 bg-white">
                    <div>
                        <!-- Nav -->
                        <ul class="nav nav-lb-tab" id="tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="courses-tab" data-toggle="pill" href="#courses" role="tab" aria-controls="courses" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="approved-tab" data-toggle="pill" href="#approved" role="tab" aria-controls="approved" aria-selected="false">Approved</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pending-tab" data-toggle="pill" href="#pending" role="tab" aria-controls="pending" aria-selected="false">Pending
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-4 row">
                    <!-- Form -->
                    <form class="d-flex align-items-center col-12 col-md-12 col-lg-12">
                        <span class="position-absolute pl-3 search-icon">
                            <i class="fe fe-search"></i>
                        </span>
                        <input type="search" class="form-control pl-6" placeholder="Search Course" />
                    </form>
                </div>
                <div>

                    <!-- Table -->
                    <div class="tab-content" id="tabContent">
                        <!--Tab pane -->
                        <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap" id="course_table" id="table_id">
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
                                    </thead>
                                    <tbody>

                                        <!-- <tr>
                                            <td class="border-top-0">
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Revolutionize how you build the web...
                                                            </h4>
                                                            <span class="text-inherit">Added on 7 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Reva Yokk</h5>
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
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-graphql.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Guide to Static Sites with Gatsby...
                                                            </h4>
                                                            <span class="text-inherit">Added on 6 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Brooklyn Simmons</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                                <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-html.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                The Modern JavaScript Courses ...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Miston Wilson</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                                <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-javascript.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Courses JavaScript Heading Title ...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Guy Hawkins</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-node.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with Node Heading Title ...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Sina Ray</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-laravel.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with Laravel...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Sobo Rikhan</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-react.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with React...
                                                            </h4>
                                                            <span class="text-inherit">Added on 4 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">April Noms</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-angular.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with Angular...
                                                            </h4>
                                                            <span class="text-inherit">Added on 3 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Jacob Jones</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                                <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Tab pane -->
                        <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab">
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
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
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0">
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-javascript.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Courses JavaScript Heading Title ...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Guy Hawkins</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-node.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with Node Heading Title ...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Liston Zebon</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-laravel.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with Laravel...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Jacob Jones</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-react.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with React...
                                                            </h4>
                                                            <span class="text-inherit">Added on 4 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Reema Messlemn</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Live
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown12">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Tab pane -->
                        <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
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
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0">
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Revolutionize how you build the web...
                                                            </h4>
                                                            <span class="text-inherit">Added on 7 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Reva Yokk</h5>
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
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown13">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-graphql.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Guide to Static Sites with Gatsby...
                                                            </h4>
                                                            <span class="text-inherit">Added on 6 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Brooklyn Simmons</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                                <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown14">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-html.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                The Modern JavaScript Courses ...
                                                            </h4>
                                                            <span class="text-inherit">Added on 5 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Jenny Wilson</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                                <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown15">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#!" class="text-inherit">
                                                    <div class="d-lg-flex align-items-center">
                                                        <div>
                                                            <img src="../../assets/images/course/course-angular.jpg" alt="" class="img-4by3-lg rounded" />
                                                        </div>
                                                        <div class="ml-lg-3 mt-2 mt-lg-0">
                                                            <h4 class="mb-1 text-primary-hover">
                                                                Get Start with Angular...
                                                            </h4>
                                                            <span class="text-inherit">Added on 3 July, 2021</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Jacob Jones</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Pending
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="btn btn-outline-white btn-sm">Reject</a>
                                                <a href="#!" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="dropdown">
                                                    <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown16">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#!"><i class="fe fe-x-circle dropdown-item-icon"></i>Reject
                                                            with Feedback</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link mx-1 rounded" href="#!" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link mx-1 rounded" href="#!">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link mx-1 rounded" href="#!">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link mx-1 rounded" href="#!">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link mx-1 rounded" href="#!"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Scripts -->
<!-- Libs JS -->


<?php include_once "adminfooter.php"; ?>