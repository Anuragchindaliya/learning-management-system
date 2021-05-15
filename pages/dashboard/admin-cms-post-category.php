<?php include_once "adminheader.php"; ?>
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">Category</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">CMS</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Category
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#newCatgory">Add New
                    Category</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4 ">
                            <!-- Card Header -->
                            <div class="card-header border-bottom-0">
                                <!-- Form -->
                                <form class="d-flex align-items-center ">
                                    <span class="position-absolute pl-3 search-icon">
                      <i class="fe fe-search"></i>
                    </span>
                                    <input type="search" class="form-control pl-6" placeholder="Search Category" />
                                </form>
                            </div>
                            <!-- Table -->
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="border-0">CATEGORY</th>
                                            <th class="border-0">SLUG</th>
                                            <th class="border-0">POSTS</th>
                                            <th class="border-0"> DATE CREATED</th>
                                            <th class="border-0">
                                                DATE UPDATED
                                            </th>
                                            <th class="border-0">
                                                STATUS
                                            </th>
                                            <th class="border-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
                                            <td class="align-middle border-top-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck1">
                                                    <label class="custom-control-label" for="categoryCheck1"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#!" class="text-inherit position-relative">
                                                    <h5 class="mb-0 text-primary-hover"><i class="fe fe-chevron-down font-size-md mr-2 text-muted position-absolute ml-n4 mt-1"></i> Courses
                                                    </h5>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                desgincourse
                                            </td>
                                            <td class="align-middle border-top-0">
                                                1
                                            </td>
                                            <td class="align-middle border-top-0">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle border-top-0">16 Nov, 2020</td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle border-top-0">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr id="collapseOne">
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck2">
                                                    <label class="custom-control-label" for="categoryCheck2"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover ml-3">Child Category</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                childcategory
                                            </td>
                                            <td class="align-middle ">
                                                4
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-warning"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown2"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck3">
                                                    <label class="custom-control-label" for="categoryCheck3"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                Workshop
                                            </td>
                                            <td class="align-middle ">
                                                6
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown3"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck4">
                                                    <label class="custom-control-label" for="categoryCheck4"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                tutorial
                                            </td>
                                            <td class="align-middle ">
                                                3
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown4"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck5">
                                                    <label class="custom-control-label" for="categoryCheck5"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Company</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                company
                                            </td>
                                            <td class="align-middle ">
                                                4
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown5"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck6">
                                                    <label class="custom-control-label" for="categoryCheck6"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Technology</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                technology
                                            </td>
                                            <td class="align-middle ">
                                                6
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown6"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck7">
                                                    <label class="custom-control-label" for="categoryCheck7"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Business</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                business
                                            </td>
                                            <td class="align-middle">
                                                2
                                            </td>
                                            <td class="align-middle">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-warning"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown7"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck8">
                                                    <label class="custom-control-label" for="categoryCheck8"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Technology</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                technology
                                            </td>
                                            <td class="align-middle ">
                                                1
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown8"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck9">
                                                    <label class="custom-control-label" for="categoryCheck9"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Business</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                business
                                            </td>
                                            <td class="align-middle ">
                                                1
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown9"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck10">
                                                    <label class="custom-control-label" for="categoryCheck10"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                tutorial
                                            </td>
                                            <td class="align-middle ">
                                                4
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown10"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" align-middle ">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck11">
                                                    <label class="custom-control-label" for="categoryCheck11"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle ">
                                                workshop
                                            </td>
                                            <td class="align-middle ">
                                                4
                                            </td>
                                            <td class="align-middle ">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle ">16 Nov, 2020</td>
                                            <td class="align-middle ">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle ">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown11"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
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
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center d-flex">
                <h4 class="modal-title" id="paymentModalLabel">
                    Add New Payment Method
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
					</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <!-- Form -->
                    <form class="form-row mb-4">
                        <div class="form-group col-12 col-md-12 mb-4">
                            <h5 class="mb-3">Credit / Debit card</h5>
                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline mr-1">
                                <input type="radio" id="paymentRadioOne" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioOne"><img
											src="../../assets/images/creditcard/americanexpress.svg" alt="" /></label>
                            </div>
                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline mr-1">
                                <input type="radio" id="paymentRadioTwo" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioTwo"><img
											src="../../assets/images/creditcard/mastercard.svg" alt="" /></label>
                            </div>

                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="paymentRadioFour" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioFour"><img src="../../assets/images/creditcard/visa.svg"
											alt="" /></label>
                            </div>
                        </div>
                        <!-- Name on card -->
                        <div class="form-group col-12 col-md-4">
                            <label for="nameoncard" class="form-label">Name on card</label>
                            <input id="nameoncard" type="text" class="form-control" name="nameoncard" placeholder="Name" required />
                        </div>
                        <!-- Month -->
                        <div class="form-group col-12 col-md-4">
                            <label class="form-label">Month</label>
                            <select class="selectpicker" data-width="100%">
									<option value="">Month</option>
									<option value="Jan">Jan</option>
									<option value="Feb">Feb</option>
									<option value="Mar">Mar</option>
									<option value="Apr">Apr</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="Aug">Aug</option>
									<option value="Sep">Sep</option>
									<option value="Oct">Oct</option>
									<option value="Nov">Nov</option>
									<option value="Dec">Dec</option>
								</select>
                        </div>
                        <!-- Year -->
                        <div class="form-group col-12 col-md-4">
                            <label class="form-label">Year</label>
                            <select class="selectpicker" data-width="100%">
									<option value="">Year</option>
									<option value="June">2018</option>
									<option value="July">2019</option>
									<option value="August">2020</option>
									<option value="Sep">2021</option>
									<option value="Oct">2022</option>
								</select>
                        </div>
                        <!-- Card number -->
                        <div class="form-group col-md-8 col-12">
                            <label for="cc-mask" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="cc-mask" data-inputmask="'mask': '9999 9999 9999 9999'" inputmode="numeric" placeholder="xxxx-xxxx-xxxx-xxxx" required />
                        </div>
                        <!-- CVV -->
                        <div class="form-group col-md-4 col-12">
                            <div class="form-group">
                                <label for="cvv" class="form-label">CVV Code
										<i class="fas fa-question-circle ml-1" data-toggle="tooltip" data-placement="top" title=""
											data-original-title="A 3 - digit number, typically printed on the back of a card."></i></label>
                                <input type="password" class="form-control" name="cvv" id="cvv" placeholder="xxx" maxlength="3" inputmode="numeric" required />
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-md-6 col-12">
                            <button class="btn btn-primary" type="submit">
									Add New Card
								</button>
                            <button class="btn btn-outline-white" type="button" data-dismiss="modal">
									Close
								</button>
                        </div>
                    </form>
                    <span><strong>Note:</strong> that you can later remove your card at
							the account setting page.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addSectionModal" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addSectionModalLabel">
                    Add New Section
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
        </button>
            </div>
            <div class="modal-body">
                <input class="form-control mb-3" type="text" placeholder="Add new section" />
                <button class="btn btn-primary" type="Button">
            Add New Section
          </button>
                <button class="btn btn-outline-white" data-dismiss="modal" aria-label="Close">
            Close
          </button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addLectureModal" tabindex="-1" role="dialog" aria-labelledby="addLectureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addLectureModalLabel">
                    Add New Lecture
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
        </button>
            </div>
            <div class="modal-body">
                <input class="form-control mb-3" type="text" placeholder="Add new lecture" />
                <button class="btn btn-primary" type="Button">
            Add New Lecture
          </button>
                <button class="btn btn-outline-white" data-dismiss="modal" aria-label="Close">
            Close
          </button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">
                    Create New Category
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
        </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-2">
                        <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Write a Category" id="title" required>
                        <small>Field must contain a unique value</small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label">Slug</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="slug">https://example.com</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="slug" placeholder="designcourses" required>
                        </div>
                        <small>Field must contain a unique value</small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label">Parent</label>
                        <select class="selectpicker" data-width="100%">
                <option value="">Select</option>
                <option value="Course">Course</option>
                <option value="Tutorial">Tutorial</option>
                <option value="Workshop">Workshop</option>
                <option value="Company">Company</option>
              </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Description</label>
                        <div id="editor">
                            <br>
                            <h4>One Ring to Rule Them All</h4>
                            <br>
                            <p>
                                Three Rings for the
                                <i> Elven-kingsunder</i> the sky,
                                <br> Seven for the
                                <u>Dwarf-lords</u> in halls of stone, Nine for Mortal Men,
                                <br> doomed to die, One for the Dark Lord on his dark throne.
                                <br> In the Land of Mordor where the Shadows lie.
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Enabled</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add New Category</button>
                        <button type="button" class="btn btn-outline-white" data-dismiss="modal">
                Close
              </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->


<!-- Course Modal -->
<div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header py-4 align-items-lg-center">
                <div class="d-lg-flex">
                    <div class="mb-3 mb-lg-0">
                        <img src="../../assets/images/svg/feature-icon-1.svg" alt="" class=" bg-primary icon-shape icon-xxl rounded-circle">
                    </div>
                    <div class="ml-lg-4">
                        <h2 class="font-weight-bold mb-md-1 mb-3">Introduction to JavaScript <span class="badge badge-warning ml-2">Free</span></h2>
                        <p class="text-uppercase font-size-xs font-weight-semi-bold mb-0"><span class="text-dark">Courses -
                  1</span> <span class="ml-3">6 Lessons</span> <span class="ml-3">1 Hour 12 Min</span></p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
           <i class="fe fe-x-circle "></i>
          </button>
            </div>
            <div class="modal-body">
                <h3>In this course you’ll learn:</h3>
                <p class="font-size-md">Vanilla JS is a fast, lightweight, cross-platform framework for building incredible, powerful JavaScript applications.</p>
                <ul class="list-group list-group-flush">
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Introduction</span>
                            </div>
                            <div class="text-truncate">
                                <span>1m 7s</span>
                            </div>
                        </a>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Installing Development Software</span>
                            </div>
                            <div class="text-truncate">
                                <span>3m 11s</span>
                            </div>
                        </a>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Hello World Project from GitHub</span>
                            </div>
                            <div class="text-truncate">
                                <span>2m 33s</span>
                            </div>
                        </a>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Our Sample Javascript Files</span>
                            </div>
                            <div class="text-truncate">
                                <span>22m 30s</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- new chat modal-->


<!-- Modal -->
<div class="modal fade" id="newchatModal" tabindex="-1" role="dialog" aria-labelledby="newchatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
        <div class="modal-content ">
            <div class="modal-header align-items-center">
                <h4 class="mb-0" id="newchatModalLabel">Create New Chat</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                  <i class="fe fe-x-circle "></i>
                 </button>
            </div>
            <div class="modal-body px-0">
                <!-- contact list -->
                <ul class="list-unstyled contacts-list mb-0">
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-away">
                                        <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Pete Martin</h5>
                                        <p class="mb-0 text-muted">On going description of group...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">2/10/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-offline">
                                        <img src="../../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Olivia Cooper</h5>
                                        <p class="mb-0 text-muted">On going description of group...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">2/3/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-busy">
                                        <img src="../../assets/images/avatar/avatar-19.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Jamarcus Streich</h5>
                                        <p class="mb-0 text-muted">Start design system for UI.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">1/24/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-busy">
                                        <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Lauren Wilson</h5>
                                        <p class="mb-0 text-muted">Start design system for UI...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">3/3/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img src="../../assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">User Name</h5>
                                        <p class="mb-0 text-muted">On going description of group..
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">1/5/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Rosalee Roberts</h5>
                                        <p class="mb-0 text-muted">On going description of group..
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">1/14/2021</small>
                            </div>
                        </div>


                    </li>



                </ul>
            </div>

        </div>
    </div>
</div>
<?php include_once "adminfooter.php"; ?>