@extends('dashboard.master')

@section('title') AdminDashboard | Index @endsection

@section('content')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('https://google.com')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-shopping-bag h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">123</span>
                            </p>
                            <p class="mb-0 text-black-50">Today Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('https://google.com')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-users h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">456</span>
                            </p>
                            <p class="mb-0 text-black-50">Total User</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('item_list.html')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-package h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">223</span>
                            </p>
                            <p class="mb-0 text-black-50">Total Items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('https://google.com')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="feather-map-pin h1 text-primary"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">14</span>
                            </p>
                            <p class="mb-0 text-black-50">Support Location</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row align-items-end">
        <div class="col-12 col-xl-7">
            <div class="card overflow-hidden shadow mb-4">
                <div class="">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h4 class="mb-0">Order & Viewer</h4>
                        <div class="">
                            <img src="img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                            <img src="img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                            <img src="img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                            <img src="img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                            <img src="img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                        </div>
                    </div>
                    <canvas id="ov" height="100"></canvas>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
            <div class="card mb-4 item-carousel-card">
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel item-carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="bottom: -30px">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="bg-secondary active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-secondary"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-secondary"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-secondary"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="w-50">

                                            <h4 class="">Coffee Cup</h4>
                                            <p class="font-weight-bolder text-black-50 mb-3">¥120</p>
                                            <div class="progress mb-4">
                                                <div class="progress-bar " role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="img/item/item1.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="w-50">

                                            <h4 class="">Stick</h4>
                                            <p class="font-weight-bolder text-black-50 mb-3">¥600</p>
                                            <div class="progress mb-4">
                                                <div class="progress-bar " role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="img/item/item2.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="w-50">
                                            <h4 class="">Book</h4>
                                            <p class="font-weight-bolder text-black-50 mb-3">¥1300</p>
                                            <div class="progress mb-4">
                                                <div class="progress-bar " role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="img/item/item3.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="item-card">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="w-50">

                                            <h4 class="">Name Card</h4>
                                            <p class="font-weight-bolder text-black-50 mb-3">¥800</p>
                                            <div class="progress mb-4">
                                                <div class="progress-bar " role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <img src="img/item/item4.png" class="item-card-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h4 class="mb-0">Order & Place</h4>
                        <div class="">
                            <i class="feather-pie-chart h4 mb-0 text-primary"></i>
                        </div>
                    </div>
                    <canvas id="op" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-7">
            <div class="card overflow-hidden mb-4">

                <div class="">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <p class="mb-0">Subscriber List</p>
                        <div class="">
                            <i class="feather-more-vertical h4 mb-0 text-primary"></i>
                        </div>
                    </div>
                    <table class="table table-hover sub-list mb-0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Michael Austin</td>
                            <td>ABC Fintech LTD.</td>
                            <td>Jan 1,2019</td>
                            <td><span class="badge badge-pill badge-danger">Close</span></td>
                            <td>¥ 1000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>İris Yılmaz</td>
                            <td>Collboy Tech LTD.</td>
                            <td>Jan 12,2019</td>
                            <td><span class="badge badge-pill badge-success">Open</span></td>
                            <td>¥ 2000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Lidia Livescu</td>
                            <td>My Fintech LTD.</td>
                            <td>Jan 14,2019</td>
                            <td><span class="badge badge-pill badge-danger">Close</span></td>
                            <td>¥ 1100.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Michael Austin</td>
                            <td>ABC Fintech LTD.</td>
                            <td>Jan 1,2019</td>
                            <td><span class="badge badge-pill badge-danger">Close</span></td>
                            <td>¥ 1000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>Aldin Rakić</td>
                            <td>ACME Pvt LTD.</td>
                            <td>Jan 10,2019</td>
                            <td><span class="badge badge-pill badge-success">Open</span></td>
                            <td>¥ 3000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        <tr>
                            <td>İris Yılmaz</td>
                            <td>Collboy Tech LTD.</td>
                            <td>Jan 12,2019</td>
                            <td><span class="badge badge-pill badge-success">Open</span></td>
                            <td>¥ 2000.00</td>
                            <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('foot')
    <script src="js/dashboard.js"></script>
@stop

