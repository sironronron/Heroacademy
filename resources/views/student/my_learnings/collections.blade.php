@extends('layouts.app')

@section('title', 'Collections')

@section('content')
    @include('users.partials.header', [
        'title' => __('Collections'),
        'description' => __('This is your collections page. Organize and access your courses faster!'),
        'class' => 'col-lg-10',
        'link' => 'welcome',
        'linkName' => 'Create new Collection'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-3">
                        <a href="#">
                            <div class="card shadow">
                                <img class="card-img-top" src="https://img-b.udemycdn.com/course/240x135/437398_46c3_9.jpg?secure=YDk24Yu8nQZyUqwCggPjjg%3D%3D%2C1607281609 1x, https://img-a.udemycdn.com/course/480x270/437398_46c3_9.jpg?5t-NUTDXAR8QeY9IJWgsVuxqO1anbbeC-vtYvBL0WB5tAAuKjaikrh7z3qSzj-yfbqctN6yRYwsW2b6yHSdE85ykO_SJqQRGSrylWcjwwTHR8mlUDa5C0ZWPHaB4JMY 2x" alt="Card image cap">
                                <div class="card-body course-body">
                                    <h5 class="card-title text-capitalize text-muted font-weight-normal">By: <b>Jonas Schmedtmann</b></h5>
                                    <p class="card-text">Build Responsive Real World Websites with HTML5 and CSS3</p>
                                    <p class="text-sm"> <span class="text-warning font-weight-bold">3.4</span>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </p>
                                    <div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                        <span class="text-sm">80%</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3">
                        <a href="#">
                            <div class="card shadow">
                                <img src="https://img-b.udemycdn.com/course/240x135/3442782_5f7f.jpg?secure=BA2KG2NcPM4qeHS9GYcqOQ%3D%3D%2C1607292242" alt="" class="card-img-top">
                                <div class="card-body course-body">
                                    <h5 class="card-title text-capitalize text-muted font-weight-normal">By: <b>Fatah Gabrial</b></h5>
                                    <p class="card-text">Front End Web Development: Complete Guide (Step by Step)</p>
                                    <p class="text-sm"> <span class="text-warning font-weight-bold">4.4</span>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half text-warning"></i>
                                    </p>
                                    <div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                        <span class="text-sm">80%</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3">
                        <a href="#">
                            <div class="card shadow">
                                <img src="https://img-a.udemycdn.com/course/240x135/1430746_2f43_10.jpg?tDYuZsrnqOS0z7EKXDLLCi9S5gkcjBY5aIs5eJwc_K2Ttll4kXmRF0Ui6UgxqrqgYfB4HIY8WDrX4RwVV0OKtbayU_GLViFutm-v8U4xnYYKbrRUd_mQaq2fG061sSD9sA" alt="" class="card-img-top">
                                <div class="card-body course-body">
                                    <h5 class="card-title text-capitalize text-muted font-weight-normal">By: <b>Andrei Neagoie</b></h5>
                                    <p class="card-text">The Complete Web Developer in 2021: Zero to Mastery</p>
                                    <p class="text-sm"> <span class="text-warning font-weight-bold">4.4</span>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half text-warning"></i>
                                    </p>
                                    <div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                        <span class="text-sm">80%</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3">
                        <a href="#">
                            <div class="card shadow">
                                <img src="https://img-a.udemycdn.com/course/240x135/2887266_c696_5.jpg?JnWZylV9oUFx2eE5bmSl-3XXXYhFn5voW1ZuF_ThqPRcexBv3bJynLOTnP7Ol4yNH-W_-Ymcz46LTuBHDFbG8HRVVENccO2_31o30QqO0wUrOqTBk3fqPTPmNWHvr7DU" alt="" class="card-img-top">
                                <div class="card-body course-body">
                                    <h5 class="card-title text-capitalize text-muted font-weight-normal">By: <b>Stephen Grider</b></h5>
                                    <p class="card-text">Microservices with Node JS and React</p>
                                    <p class="text-sm"> <span class="text-warning font-weight-bold">4.4</span>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half text-warning"></i>
                                    </p>
                                    <div>
                                        <div class="progress mb-0">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                        <span class="text-sm">80%</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection