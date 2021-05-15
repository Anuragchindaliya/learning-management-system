<?php include_once "adminheader.php"; ?>
<!-- Container fluid -->
<div class="container-fluid p-4 ">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- page header -->
            <div class="border-bottom pb-4 mb-4 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 font-weight-bold">Analytics</h1>
                </div>
                <div class="d-flex">
                    <!-- form -->
                    <div class="input-group mr-3">
                        <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon2">
                        <div class="input-group-append input-button">
                            <span class="input-group-text text-muted" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                        </div>
                    </div>
                    <!-- button -->
                    <a href="#!" class="btn btn-primary">Setting</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <span class="font-weight-semi-bold text-uppercase font-size-xs">User</span>
                        </div>
                        <!-- col -->
                        <div class="col-6">
                            <h1 class="font-weight-bold mt-2 mb-0 h2">30.6k</h1>
                            <p class="text-success font-weight-semi-bold mb-0"><i class="fe fe-trending-up mr-1"></i>+20.9$</p>
                        </div>
                        <!-- chart -->
                        <div class="col-6 d-flex align-items-center">
                            <div id="userChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <span class="font-weight-semi-bold text-uppercase font-size-xs">Unique Visitors</span>
                        </div>
                        <!-- col -->
                        <div class="col-6">

                            <h1 class="font-weight-bold mt-2 mb-0 h2">256k</h1>
                            <p class="text-danger font-weight-semi-bold mb-0"><i class="fe fe-trending-down mr-1"></i>5%</p>
                        </div>
                        <!-- chart -->
                        <div class="col-6 d-flex align-items-center">
                            <div id="visitorChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <span class="font-weight-semi-bold text-uppercase font-size-xs">Bounce Rate</span>
                        </div>
                        <!-- col -->
                        <div class="col-6">

                            <h1 class="font-weight-bold mt-2 mb-0 h2">51.46%</h1>
                            <p class="text-success font-weight-semi-bold mb-0"><i class="fe fe-trending-up mr-1"></i>+1200</p>
                        </div>
                        <!-- chart -->
                        <div class="col-6 d-flex align-items-center">
                            <div id="bounceChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <span class="font-weight-semi-bold text-uppercase font-size-xs">Average visit time</span>
                        </div>
                        <!-- col -->
                        <div class="col-6">
                            <h1 class="font-weight-bold mt-2 mb-0 h2">1m:17s</h1>
                            <p class="text-success font-weight-semi-bold mb-0"><i class="fe fe-trending-up mr-1"></i>12%</p>
                        </div>
                        <!-- chart -->
                        <div class="col-6 d-flex align-items-center">
                            <div id="userChartExample"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-12 col-md-12 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0">Sessions</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <!-- chart -->
                    <div id="sessionChart"></div>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Active User</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <div class="row">
                        <!-- col -->
                        <div class="col-4">
                            <span class="font-weight-semi-bold">30 days</span>
                            <h1 class="font-weight-bold mt-2 mb-0 h2">12,698</h1>
                            <p class="text-success font-weight-semi-bold mb-0"><i class="fe fe-trending-up mr-1"></i>4.6%</p>
                        </div>
                        <!-- col -->
                        <div class="col-4">
                            <span class="font-weight-semi-bold">7 days</span>
                            <h1 class="font-weight-bold mt-2 mb-0 h2">2.65K</h1>
                            <p class="text-danger font-weight-semi-bold mb-0"><i class="fe fe-trending-down mr-1"></i>4.6%</p>
                        </div>
                        <!-- col -->
                        <div class="col-4">
                            <span class="font-weight-semi-bold">1 days</span>
                            <h1 class="font-weight-bold mt-2 mb-0 h2">1.34K</h1>
                            <p class="text-success font-weight-semi-bold mb-0"><i class="fe fe-trending-up mr-1"></i>4.6%</p>
                        </div>
                    </div>
                    <!-- chart -->
                    <div id="support-chart1"></div>
                    <div class="font-size-xs d-flex justify-content-between mt-2 pl-2">
                        <div class="chart-label">01 Jan, 2020</div>
                        <div class="chart-label">30 Jan, 2020</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Users by Country</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <!-- map -->
                    <div id="locationmap" style="width:100%; height:250px"></div>
                    <table class="w-100 mt-3">
                        <tbody>
                            <tr>
                                <td class="text-dark font-weight-medium py-1">United States</td>
                                <td class="text-right font-weight-semi-bold py-1 text-dark">22,120</td>
                                <td class="text-right py-1">34.54%</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-1">India</td>
                                <td class="text-right font-weight-semi-bold py-1 text-dark">12,756</td>
                                <td class="text-right py-1 ">22.43%</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-1">United Kingdom</td>
                                <td class="text-right font-weight-semi-bold py-1 text-dark">8,864</td>
                                <td class="text-right py-1">34.54%</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium pt-1">Sweden</td>
                                <td class="text-right font-weight-semi-bold pt-1 text-dark">6,749</td>
                                <td class="text-right pt-1">5.29%</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Traffic Channel</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <!-- chart -->
                    <div id="trafficDountChart"></div>
                    <!-- table -->

                    <table class="w-100 mt-5">
                        <tbody>
                            <tr>
                                <td class="text-dark font-weight-medium py-1"><i class="mdi mdi-square-rounded text-primary font-size-xs mr-2"></i>Organic Search
                                </td>
                                <td class="text-right font-weight-semi-bold py-1 text-dark">2,120</td>
                                <td class="text-right  py-1">4.54%</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-1"><i class="mdi mdi-square-rounded text-success font-size-xs mr-2"></i>Direct
                                </td>
                                <td class="text-right font-weight-semi-bold py-1 text-dark">639</td>
                                <td class="text-right  py-1">4.37%</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-1"><i class="mdi mdi-square-rounded text-danger font-size-xs mr-2"></i>Refferrals
                                </td>
                                <td class="text-right font-weight-semi-bold py-1 text-dark">520</td>
                                <td class="text-right py-1">45.14%</td>
                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium pt-1"><i class="mdi mdi-square-rounded text-info font-size-xs mr-2"></i>Social Media
                                </td>
                                <td class="text-right font-weight-semi-bold  pt-1 text-dark">116</td>
                                <td class="text-right pt-1">12.24%</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Operating System</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <div id="operatingSystem"></div>
                    <div class="mt-4 d-flex justify-content-center">
                        <!-- list -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-3">
                                <h5 class="mb-0 d-flex align-items-center font-size-sm lh-1"><i class="mdi mdi-square-rounded text-danger font-size-xs mr-2"></i>Window
                                </h5>
                            </li>
                            <li class="list-inline-item mx-3">
                                <h5 class="mb-0 d-flex align-items-center  font-size-sm lh-1"><i class="mdi mdi-square-rounded text-success font-size-xs mr-2"></i>macOS
                                </h5>
                            </li>
                            <li class="list-inline-item mx-3">
                                <h5 class="mb-0 d-flex align-items-center  font-size-sm lh-1"><i class="mdi mdi-square-rounded text-primary font-size-xs mr-2"></i>Linux
                                </h5>
                            </li>
                            <li class="list-inline-item ml-3">
                                <h5 class="mb-0 d-flex align-items-center  font-size-sm lh-1"><i class="mdi mdi-square-rounded text-info font-size-xs mr-2"></i>Android
                                </h5>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Browsers</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <!-- table -->
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td class="text-dark font-weight-medium pb-2"> <img src="../../assets/images/browser-svg/chrome.svg" alt="" class="mr-2"><span class="align-middle text-dark ">Google
                                        Chrome</span></td>
                                <td class="text-right font-weight-semi-bold text-dark pb-2 ">21.54%</td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-2"> <img src="https://codescandy.com/geeks/assets/images/browser-svg/firefox.svg" alt="" class="mr-2"><span class="align-middle text-dark ">Mozilla
                                        Firefox</span></td>
                                <td class="text-right font-weight-semi-bold text-dark py-2">14.43%</td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-2"> <img src="https://codescandy.com/geeks/assets/images/browser-svg/brave.svg" alt="" class="mr-2"><span class="align-middle text-dark">Brave</span></td>
                                <td class="text-right font-weight-semi-bold text-dark py-2">14.43%</td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium py-2"> <img src="https://codescandy.com/geeks/assets/images/browser-svg/safari.svg" alt="" class="mr-2"><span class="align-middle text-dark">Apple
                                        Safari</span></td>
                                <td class="text-right font-weight-semi-bold text-dark py-2">8.54%</td>

                            </tr>


                            <tr>
                                <td class="text-dark font-weight-medium py-2"> <img src="https://codescandy.com/geeks/assets/images/browser-svg/ie.svg" alt="" class="mr-2"><span class="align-middle text-dark">Internet Export</span>
                                </td>
                                <td class="text-right font-weight-semi-bold text-dark py-2">6.21%</td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium pt-2 pb-0"> <img src="https://codescandy.com/geeks/assets/images/browser-svg/opera.svg" alt="" class="mr-2"><span class="align-middle text-dark">Opera
                                        Mini</span></td>
                                <td class="text-right font-weight-semi-bold text-dark pt-2 pb-0">8%</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Social Media Traffic</h4>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <!-- table -->
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td class="text-dark font-weight-medium pb-2"> <i class="mdi mdi-facebook text-primary font-size-md"></i><span class="text-dark ml-2 d-none d-md-inline-block">Facebook</span>
                                </td>
                                <td class="text-right pb-2"><span class="font-weight-semi-bold text-dark">3,454</span> <span>(24%)</span></td>
                                <td class="w-25 pl-3  pb-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium  py-2"> <i class="mdi mdi-instagram text-primary font-size-md"></i><span class="ml-2 d-none d-md-inline-block">Instagram</span>
                                </td>
                                <td class="text-right py-2"><span class="font-weight-semi-bold text-dark">2,351</span> <span>(18.5%)</span></td>
                                <td class="w-25 pl-3  py-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium  py-2"><i class="mdi mdi-twitter text-primary font-size-md"></i><span class="ml-2 d-none d-md-inline-block">Twitter</span>
                                </td>
                                <td class="text-right py-2"><span class="font-weight-semi-bold text-dark">2,243</span> <span>(6.5%)</span></td>
                                <td class="w-25 pl-3  py-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium  py-2"> <i class="mdi mdi-linkedin text-primary font-size-md"></i><span class="ml-2 d-none d-md-inline-block">LinkedIn</span>
                                </td>
                                <td class="text-right py-2"><span class="font-weight-semi-bold text-dark">812</span> <span>(5.1%)</span></td>
                                <td class="w-25 pl-3  py-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium  py-2"> <i class="mdi mdi-github text-primary font-size-md"></i><span class="ml-2 d-none d-md-inline-block">Github</span>
                                </td>
                                <td class="text-right py-2"><span class=" font-weight-semi-bold text-dark">621</span><span>(0.3%)</span></td>
                                <td class="w-25 pl-3  py-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-dark font-weight-medium  py-2"> <i class="mdi mdi-youtube text-primary font-size-md"></i><span class="ml-2 d-none d-md-inline-block">Youtube</span>
                                </td>
                                <td class="text-right py-2"><span class=" font-weight-semi-bold text-dark">450</span> <span>(0.12%)</span></td>
                                <td class="w-25 pl-3  py-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 col-xl-4 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card header -->
                <div class="card-header">
                    <h4 class="mb-0">Most View Pages</h4>
                </div>
                <!-- table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col" class="pb-2 border-bottom-0 border-top-0">Page</th>
                                <th scope="col" class="text-right pb-2 border-bottom-0 border-top-0">Exits</th>
                                <th scope="col" class="text-right pb-2 border-bottom-0 border-top-0">Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="py-2">/ <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a></td>
                                <td class="py-2 text-right">32</td>
                                <td class="py-2 text-right text-dark font-weight-semi-bold">1,243</td>
                            </tr>
                            <tr>

                                <td class="py-2">/landings/courses.html <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                                </td>
                                <td class="py-2 text-right">26</td>
                                <td class="py-2 text-right text-dark font-weight-semi-bold">943</td>
                            </tr>
                            <tr>

                                <td class="py-2">/landings/lead.html <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a>
                                </td>
                                <td class="py-2 text-right">22</td>
                                <td class="py-2 text-right text-dark font-weight-semi-bold">856</td>
                            </tr>
                            <tr>

                                <td class="py-2">/dashboard.html <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a></td>
                                <td class="py-2 text-right">18</td>
                                <td class="py-2 text-right text-dark font-weight-semi-bold">621</td>
                            </tr>
                            <tr>

                                <td class="py-2">/checkout.html <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a></td>
                                <td class="py-2 text-right">14</td>
                                <td class="py-2 text-right text-dark font-weight-semi-bold">316</td>
                            </tr>
                            <tr>

                                <td class="pt-2 pb-0">/blog.html <a href="#" class="text-inherit"><i class="fe fe-external-link"></i></a></td>
                                <td class="pt-2 pb-0 text-right">9</td>
                                <td class="pt-2 pb-0 text-right text-dark font-weight-semi-bold">253</td>
                            </tr>
                        </tbody>
                    </table>


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
                                <label class="custom-control-label" for="paymentRadioOne"><img src="https://codescandy.com/geeks/assets/images/creditcard/americanexpress.svg" alt="" /></label>
                            </div>
                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline mr-1">
                                <input type="radio" id="paymentRadioTwo" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioTwo"><img src="https://codescandy.com/geeks/assets/images/creditcard/mastercard.svg" alt="" /></label>
                            </div>

                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="paymentRadioFour" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioFour"><img src="https://codescandy.com/geeks/assets/images/creditcard/visa.svg" alt="" /></label>
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
                                    <i class="fas fa-question-circle ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="A 3 - digit number, typically printed on the back of a card."></i></label>
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
                        <img src="https://codescandy.com/geeks/assets/images/svg/feature-icon-1.svg" alt="" class=" bg-primary icon-shape icon-xxl rounded-circle">
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
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i class="mdi mdi-play font-size-md"></i></span>
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
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i class="mdi mdi-play font-size-md"></i></span>
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
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i class="mdi mdi-play font-size-md"></i></span>
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
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i class="mdi mdi-play font-size-md"></i></span>
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
                                        <img src="https://codescandy.com/geeks/assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle">
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
                                        <img src="https://codescandy.com/geeks/assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle">
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
                                        <img src="https://codescandy.com/geeks/assets/images/avatar/avatar-19.jpg" alt="" class="rounded-circle">
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
                                        <img src="https://codescandy.com/geeks/assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle">
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
                                        <img src="https://codescandy.com/geeks/assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle">
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
                                        <img src="https://codescandy.com/geeks/assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle">
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