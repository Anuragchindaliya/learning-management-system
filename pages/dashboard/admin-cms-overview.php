<?php include_once "adminheader.php"; ?>
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">CMS Dashboard</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">CMS</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Overview
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="admin-cms-post-new.html" class="btn btn-primary">New Post</a
									>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>Total Posts</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">2,000</h2>
											<span>100Last 30Days</span>
										</div>
										<div>
											<span
												class="bg-light-primary icon-shape icon-xl rounded-lg text-dark-primary"
											>
												<i class="mdi mdi-text-box-multiple mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card Body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>Assets</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">367</h2>
											<span>300+ Media Object</span>
										</div>
										<div>
											<span
												class="bg-light-warning icon-shape icon-xl rounded-lg text-dark-warning"
											>
												<i class="mdi mdi-folder-multiple-image mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card Body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>USers</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">13,234</h2>
											<span>1.5k in 30Days</span>
										</div>
										<div>
											<span
												class="bg-light-success icon-shape icon-xl rounded-lg text-dark-success"
											>
												<i class="mdi mdi-account-multiple mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card Body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>Comments</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">120</h2>
											<span>20+ Comments</span>
										</div>
										<div>
											<span
												class="bg-light-info icon-shape icon-xl rounded-lg text-dark-info"
											>
												<i class="mdi mdi-comment-text mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card header -->
								<div
									class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height"
								>
									<h4 class="mb-0">Recent Posts</h4>
									<span class="dropdown dropleft">
										<a
											class="text-muted text-decoration-none"
											href="#!"
											role="button"
											id="courseDropdown1"
											data-toggle="dropdown"
											aria-haspopup="true"
											aria-expanded="false"
										>
											<i class="fe fe-more-vertical"></i>
										</a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
											<span class="dropdown-header">Settings</span>
                                <a class="dropdown-item" href="#!">
                                    <i class="fe fe-edit dropdown-item-icon"></i>Edit
                                </a>
                                <a class="dropdown-item" href="#!">
                                    <i class="fe fe-trash dropdown-item-icon"></i>Remove
                                </a>
                                </span>
                                </span>
                            </div>
                            <!-- Table -->
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                        <tr>
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
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span> Draft
                                            </td>
                                            <td class="text-muted align-middle border-top-0 text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown2"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown2"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															Guide to Static Sites with Gatsby.js
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-video font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Marketing</a>
                                            </td>
                                            <td class="align-middle">6 July, 2021 2:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">March Menon</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span> Draft
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown3"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown3"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
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
                                            <td class="align-middle">5 July, 2021 5:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Lisa Menon</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown4"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown4"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															Online WordPress Courses Become ..
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-image text-primary font-size-md"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Company</a>
                                            </td>
                                            <td class="align-middle">3 July, 2021 10:42am</td>
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
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown5"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown5"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															How to become Java Developer
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-image text-primary font-size-md"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Company</a>
                                            </td>
                                            <td class="align-middle">4 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">John Deo</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown6"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown6"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															The Javascript Learning
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-video font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Marketing</a>
                                            </td>
                                            <td class="align-middle">3 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Misty Smaln</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span> Schedule
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown7"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown7"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															How to become modern Stack Developer
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-image font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Company</a>
                                            </td>
                                            <td class="align-middle">3 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">March Liso</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown8"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown8"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															How to become Full Stack Developer
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-link font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Workshop</a>
                                            </td>
                                            <td class="align-middle">2 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Sina Ray</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span> Deleted
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown9"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown9"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
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
		<?php include_once "adminfooter.php"; ?>