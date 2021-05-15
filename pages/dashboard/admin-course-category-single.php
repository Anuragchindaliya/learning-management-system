<?php include_once "adminheader.php"; ?>
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">
                                    Web Development
                                    <span class="font-size-sm">(210 Courses)</span>
                                </h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Category</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Web Development
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-outline-white">Back to All Category</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card Header -->
                            <div class="card-header border-bottom-0">
                                <form class="d-flex align-items-center">
                                    <span class="position-absolute pl-3 search-icon">
                    <i class="fe fe-search"></i>
                  </span>
                                    <input type="search" class="form-control pl-6" placeholder="Search Courses" />
                                </form>
                            </div>
                            <!-- Table  -->
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0">COURSES</th>
                                            <th scope="col" class="border-0">INSTRUCTOR</th>
                                            <th scope="col" class="border-0">Enrolled</th>
                                            <th scope="col" class="border-0"></th>
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
                                            <td class="align-middle border-top-0">12,234</td>
                                            <td class="align-middle border-top-0">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">2,000</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">22,345</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">5,235</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown4"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">7,200</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">22,500</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown6"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">6,759</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown7"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
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
                                            <td class="align-middle">7,234</td>
                                            <td class="align-middle">
                                                <span class="dropdown dropleft">
                          <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown8"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                            <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-layers dropdown-item-icon"></i>Change
                              Category</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Delete
                              Course</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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