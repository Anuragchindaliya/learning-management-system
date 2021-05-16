
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
                    <form id="addcourse">
                        <div class="form-group">
                            <label for="courseTitle" class="form-label">Course Title</label>
                            <input id="courseTitle" class="form-control" type="text" placeholder="Course Title" required>
                            <small>Write a 60 character course title.</small>
                        </div>

                        <div class="form-group">
                            <label for="courseDesc" class="form-label">Course Description</label>
                            <input id="courseDesc" class="form-control" type="text" placeholder="Course Description" required>
                            <small>Write a 250 character course description.</small>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Courses category</label>
                            <div class="dropdown bootstrap-select" style="width: 100%;">
                                <select id="defaultSelect" class="selectpicker" data-width="100%" required>
                                    <option value="">Select category</option>
                                    <option value="React">React</option>
                                    <option value="Javascript">Javascript</option>
                                    <option value="HTML">HTML</option>
                                    <option value="Vue">Vue js</option>
                                    <option value="Gulp">Gulp js</option>
                                </select>
                                <!-- <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select category">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Select category</div>
                                            </div>
                                        </div>
                                    </button> -->
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div>
                            <small>Help people find your courses by choosing
                                categories that represent your course.</small>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Courses level</label>
                            <div class="dropdown bootstrap-select" style="width: 100%;">
                                <select class="selectpicker" data-width="100%" required>
                                    <option value="">Select level</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="Beignners">Beignners</option>
                                    <option value="Advance">Advance</option>
                                </select>
                                <!-- <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Select level">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Select level</div>
                                            </div>
                                        </div>
                                    </button> -->
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Course Description</label>
                            <!-- <div class="ql-toolbar ql-snow">
                                    <span class="ql-formats">
                                        <span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0">
                                                <svg viewBox="0 0 18 18">
                                                    <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                    <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                                </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;">
                                            <option value="1"></option>
                                            <option value="2"></option>
                                            <option value="3"></option>
                                            <option selected="selected"></option>
                                        </select>
                                    </span>
                                    <span class="ql-formats">
                                        <button type="button" class="ql-bold">
                                            <svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                                <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                            </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                            </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                                <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                            </svg></button><button type="button" class="ql-link"><svg viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                                <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                                <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="ql-formats">
                                        <button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                                <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                                <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                                <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                                <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
                                                <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                                <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
                                            </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                                <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                                <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                                <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                                <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                                <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                                            </svg></button></span><span class="ql-formats"><button type="button" class="ql-clean"><svg class="" viewBox="0 0 18 18">
                                                <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                                <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                                <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                                <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                                <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
                                            </svg></button></span>
                                </div> -->
                            <div id="editor" class="ql-container ql-snow">
                                <div class="ql-editor" data-gramm="false" contenteditable="true">
                                    <p>Insert course description</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p><br></p>
                                </div>
                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                <div class="ql-tooltip ql-hidden">
                                    <a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>
                                    <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" required>
                                    <a class="ql-action"></a>
                                    <a class="ql-remove"></a>
                                </div>
                            </div>
                            <small>A brief summary of your courses.</small>

                        </div>
                        <div style="display: flex;    gap: 1rem;    justify-content: flex-end;">
                        <input type="hidden" id="course_id">
                            <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="reset" class="btn btn-primary" id="clearText" value="clear" onclick="$('.selectpicker').selectpicker('refresh');"></input>
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