<?php include_once "adminheader.php"; ?>
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">All Posts</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">CMS</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            All Post
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-primary">New Post</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card rounded-lg">
                            <!-- Card Header -->
                            <div class="card-header border-bottom-0 p-0">
                                <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="all-post-tab" data-toggle="pill" href="#all-post" role="tab" aria-controls="all-post" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="published-tab" data-toggle="pill" href="#published" role="tab" aria-controls="published" aria-selected="false">Published</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="scheduled-tab" data-toggle="pill" href="#scheduled" role="tab" aria-controls="scheduled" aria-selected="false">Scheduled</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="draft-tab" data-toggle="pill" href="#draft" role="tab" aria-controls="draft" aria-selected="false">Draft</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="deleted-tab" data-toggle="pill" href="#deleted" role="tab" aria-controls="deleted" aria-selected="false">Deleted</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 row">
                                <!-- Form -->
                                <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                                    <span class="position-absolute pl-3 search-icon">
                      <i class="fe fe-search"></i>
                    </span>
                                    <input type="search" class="form-control pl-6" placeholder="Search Post" />
                                </form>
                            </div>
                            <div>
                                <div class="tab-content" id="tabContent">
                                    <!-- Tab -->
                                    <div class="tab-pane fade show active" id="all-post" role="tabpanel" aria-labelledby="all-post-tab">
                                        <div class="table-responsive border-0">
                                            <!-- Table -->
                                            <table class="table mb-0 text-nowrap">
                                                <!-- Table Head -->
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkAll" />
                                                                <label class="custom-control-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="border-0">POST</th>
                                                        <th scope="col" class="border-0">TYPE</th>
                                                        <th scope="col" class="border-0">CATEGORY</th>
                                                        <th scope="col" class="border-0">DATE</th>
                                                        <th scope="col" class="border-0">Author</th>
                                                        <th scope="col" class="border-0">STATUS</th>
                                                        <th scope="col" class="border-0"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table body -->
                                                    <tr>
                                                        <td class="align-middle border-top-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postOne" />
                                                                <label class="custom-control-label" for="postOne"></label>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    Revolutionize how you build the web...
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <a href="#!" class="text-inherit">Courses</a>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            7 July, 2021 1:42pm
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Reva Yokk</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Draft
                                                        </td>
                                                        <td class="text-muted align-middle border-top-0 text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwo" />
                                                                <label class="custom-control-label" for="postTwo"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Guide to Static Sites with Gatsby.js
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-video font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Marketing</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            6 July, 2021 2:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">March Menon</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Draft
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postThree" />
                                                                <label class="custom-control-label" for="postThree"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    The Modern JavaScript Courses
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-link font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Workshop</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            5 July, 2021 5:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Lisa Menon</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown3" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postFour" />
                                                                <label class="custom-control-label" for="postFour"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Online WordPress Courses Become ..
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 10:42am
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Maria Pinto</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown4" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postFive" />
                                                                <label class="custom-control-label" for="postFive"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to become Java Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            4 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">John Deo</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown5" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postSix" />
                                                                <label class="custom-control-label" for="postSix"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">The Javascript Learning
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-video font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Marketing</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Misty Smaln</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span>Scheduled
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown6" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postSeven" />
                                                                <label class="custom-control-label" for="postSeven"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to become modern Stack Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">March Liso</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown7" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postEight" />
                                                                <label class="custom-control-label" for="postEight"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to become Full Stack Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-link font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Workshop</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            2 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Sina Ray</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span>Deleted
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown8" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="published" role="tabpanel" aria-labelledby="published-tab">
                                        <div class="table-responsive border-0">
                                            <table class="table mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkPublished" />
                                                                <label class="custom-control-label" for="checkPublished"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="border-0">POST</th>
                                                        <th scope="col" class="border-0">TYPE</th>
                                                        <th scope="col" class="border-0">CATEGORY</th>
                                                        <th scope="col" class="border-0">DATE</th>
                                                        <th scope="col" class="border-0">Author</th>
                                                        <th scope="col" class="border-0">STATUS</th>
                                                        <th scope="col" class="border-0"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postNine" />
                                                                <label class="custom-control-label" for="postNine"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    The Modern JavaScript Courses
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-link font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Workshop</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            5 July, 2021 5:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Lisa Menon</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown9" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTen" />
                                                                <label class="custom-control-label" for="postTen"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Online WordPress Courses Become ..
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 10:42am
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Maria Pinto</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown10" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postEleven" />
                                                                <label class="custom-control-label" for="postEleven"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to become Java Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            4 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">John Deo</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown11" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwelve" />
                                                                <label class="custom-control-label" for="postTwelve"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to become modern Stack Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">March Liso</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span>Published
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown12" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown12">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="scheduled" role="tabpanel" aria-labelledby="scheduled-tab">
                                        <div class="table-responsive border-0">
                                            <table class="table mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkScheduled" />
                                                                <label class="custom-control-label" for="checkScheduled"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="border-0">POST</th>
                                                        <th scope="col" class="border-0">TYPE</th>
                                                        <th scope="col" class="border-0">CATEGORY</th>
                                                        <th scope="col" class="border-0">DATE</th>
                                                        <th scope="col" class="border-0">Author</th>
                                                        <th scope="col" class="border-0">STATUS</th>
                                                        <th scope="col" class="border-0"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postThirteen" />
                                                                <label class="custom-control-label" for="postThirteen"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">The Javascript Learning
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-video font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Marketing</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Misty Smaln</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span>Scheduled
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown13" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown13">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postFourteen" />
                                                                <label class="custom-control-label" for="postFourteen"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Revolutionize how you build the web...
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Company</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-13.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Nikala Socha</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span>Scheduled
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown14" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown14">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postFifteen" />
                                                                <label class="custom-control-label" for="postFifteen"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">The modern Javascript Course
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-link font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Workshop</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Jeny D'Souza</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span>Scheduled
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown15" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown15">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postSixteen" />
                                                                <label class="custom-control-label" for="postSixteen"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Github learning course
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Course</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            3 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Samiksha Nitry</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span>Scheduled
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown16" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown16">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
                                        <div class="table-responsive border-0">
                                            <table class="table mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkDraft" />
                                                                <label class="custom-control-label" for="checkDraft"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="border-0">POST</th>
                                                        <th scope="col" class="border-0">TYPE</th>
                                                        <th scope="col" class="border-0">CATEGORY</th>
                                                        <th scope="col" class="border-0">DATE</th>
                                                        <th scope="col" class="border-0">Author</th>
                                                        <th scope="col" class="border-0">STATUS</th>
                                                        <th scope="col" class="border-0"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle border-top-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postSeventeen" />
                                                                <label class="custom-control-label" for="postSeventeen"></label>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    Revolutionize how you build the web...
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <a href="#!" class="text-inherit">Courses</a>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            7 July, 2021 1:42pm
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Reva Yokk</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Draft
                                                        </td>
                                                        <td class="text-muted align-middle border-top-0 text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown17" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown17">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle border-top-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postEighteen" />
                                                                <label class="custom-control-label" for="postEighteen"></label>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    Github learning course
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <i class="fe fe-video text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <a href="#!" class="text-inherit">Marketing</a>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            7 July, 2021 1:42pm
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Jone Deo</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Draft
                                                        </td>
                                                        <td class="text-muted align-middle border-top-0 text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown18" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown18">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle border-top-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postNineteen" />
                                                                <label class="custom-control-label" for="postNineteen"></label>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    how you build the website with Gatsby
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <a href="#!" class="text-inherit">Courses</a>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            7 July, 2021 1:42pm
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Dee Lumpa</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Draft
                                                        </td>
                                                        <td class="text-muted align-middle border-top-0 text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown19" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown19">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle border-top-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwenty" />
                                                                <label class="custom-control-label" for="postTwenty"></label>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">
                                    Become Full Stake Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <i class="fe fe-image text-primary font-size-md"></i>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <a href="#!" class="text-inherit">Courses</a>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            7 July, 2021 1:42pm
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Samara Lily</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle border-top-0">
                                                            <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span>Draft
                                                        </td>
                                                        <td class="text-muted align-middle border-top-0 text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown20" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown20">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="deleted" role="tabpanel" aria-labelledby="deleted-tab">
                                        <div class="table-responsive border-0">
                                            <table class="table mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkDeleted" />
                                                                <label class="custom-control-label" for="checkDeleted"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="border-0">POST</th>
                                                        <th scope="col" class="border-0">TYPE</th>
                                                        <th scope="col" class="border-0">CATEGORY</th>
                                                        <th scope="col" class="border-0">DATE</th>
                                                        <th scope="col" class="border-0">Author</th>
                                                        <th scope="col" class="border-0">STATUS</th>
                                                        <th scope="col" class="border-0"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwentyOne" />
                                                                <label class="custom-control-label" for="postTwentyOne"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to become Full Stack Developer
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-link font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Workshop</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            2 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Sina Ray</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span>Deleted
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown21" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown21">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwentyTwo" />
                                                                <label class="custom-control-label" for="postTwentyTwo"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">How to build website with React
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Course</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            2 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Ellonek Lincha</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span>Deleted
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown23" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown23">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwentyThree" />
                                                                <label class="custom-control-label" for="postTwentyThree"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Learning a basic bootstrap with us
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Course</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            2 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Misara Chopay</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span>Deleted
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown24" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown24">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwentyFour" />
                                                                <label class="custom-control-label" for="postTwentyFour"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Guide to Static Sites with Gatsby.js
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-video font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Marketing</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            2 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Misara Chopay</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span>Deleted
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown25" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown25">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                            </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="postTwentyFive" />
                                                                <label class="custom-control-label" for="postTwentyFive"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="mb-0">
                                                                <a href="#!" class="text-inherit">Online WordPress Courses Become ..
                                  </a>
                                                            </h5>
                                                        </td>
                                                        <td class="align-middle">
                                                            <i class="fe fe-image font-size-md text-primary"></i>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="#!" class="text-inherit">Course</a>
                                                        </td>
                                                        <td class="align-middle">
                                                            2 July, 2021 12:42pm
                                                        </td>
                                                        <td class="align-middle">
                                                            <div class="d-flex align-items-center">
                                                                <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                                <h5 class="mb-0">Zeban Juben</h5>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span>Deleted
                                                        </td>
                                                        <td class="text-muted align-middle text-right">
                                                            <span class="dropdown dropleft">
                                  <a class="text-muted text-decoration-none" href="#!" role="button"
                                    id="courseDropdown26" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown26">
                                    <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#!"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Delete</a>
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
                                            <a class="page-link mx-1 rounded" href="#!" tabindex="-1" aria-disabled="true"><i
                            class="mdi mdi-chevron-left"></i></a>
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
    <?php include_once "adminfooter.php"; ?>