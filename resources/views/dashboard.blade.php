@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        {{-- // On-going Courses --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">On-going Learnings</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                    </div>
    
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Instructor</th>
                                    <th scope="col">Enrolled Date</th>
                                    <th scope="col">Progress %</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#" class="mr-3">
                                                <img alt="Image placeholder" style="height: 100px; object-fit: cover;" src="https://img-a.udemycdn.com/course/240x135/2153774_bef0_4.jpg?suyLUitkfpwFA7z15q8P2JaAqf1ec4BaeyD9sKKfk72MDF0YIymd4ZgvOXnxPuxqWGjdCgVkopfJinYU4iL_y_NVgCno0dVGUE60BxcMnCir-tyPS6vk8pejH1bcF-Qf">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Modern HTML & CSS From The Beginning (Including Sass)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Brad Traversy</a>
                                    </td>
                                    <td>12/02/2020 11:00</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">80%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half text-warning"></i>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="">View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- // All Courses & Notifications --}}
        <div class="row">
            <div class="col-xl-8">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">All Courses</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="width: 25%">Name</th>
                                    <th scope="col">Instructor</th>
                                    <th scope="col">Enrolled Date</th>
                                    <th scope="col">Progress %</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#" class="mr-3">
                                                <img alt="Image placeholder" style="height: 100px; object-fit: cover;" src="https://img-a.udemycdn.com/course/240x135/2153774_bef0_4.jpg?suyLUitkfpwFA7z15q8P2JaAqf1ec4BaeyD9sKKfk72MDF0YIymd4ZgvOXnxPuxqWGjdCgVkopfJinYU4iL_y_NVgCno0dVGUE60BxcMnCir-tyPS6vk8pejH1bcF-Qf">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Modern HTML & CSS From The Beginning (Including Sass)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            Brad Traversy
                                        </a>
                                    </td>
                                    <td>
                                        12/02/2020 11:00
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">80%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half text-warning"></i>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="">View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#" class="mr-3">
                                                <img alt="Image placeholder" style="height: 100px; object-fit: cover;" src="https://img-a.udemycdn.com/course/240x135/1288044_d262_4.jpg?kAtFGh_P95VvLnHJV9BReeZJB_iUMCIvdkn3skWrkMNBAcjlkdR0TGRo6KRrDbIhVShHRV0n7c_QSv_YNu78PsH_qthTNYgmkE7e-R0t7Xyt5JwnJReH4fx4d5mgAoNK">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">The Complete Foundation Stock Trading Course</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">
                                            Mohsen Hassan
                                        </a>
                                    </td>
                                    <td>
                                        12/02/2020 11:00
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">100%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas far-star text-warning"></i>
                                        <i class="fas far-star text-warning"></i>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="">View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Notifications</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">From</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" style="object-fit: cover;" src="https://img-a.udemycdn.com/user/75x75/68766_46eb_13.jpg?xFaC7h7HzkHv0__xw105BOAIahkSloY6_8ZAiInGvHt6Cv81AZpWzjIliwxo7LTdepE11hvbLjokiL_YjCPnX39le3sOKNaWjeDkGnXWbGSQs-yb1CjgdyVpUA">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">Eric Shwartzman</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        The Talkwalker 2021 Social Media Trends Report, which ranks the top 10 social media marketing...
                                    </td>
                                    <td>
                                        12/02/2020 11:00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- // More Courses based on category --}}
        <div class="row">
            <div class="col-xl-12">
                <h1 class="display-3">More courses</h1>
                <p class="mt-0 mb-5">Find more courses based on your current learnings!</p>

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
                                        <span class="text-muted">(716)</span>
                                    </p>
                                    <p class="course-price font-weight-bold">
                                        $129.99
                                    </p>
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
                                        <span class="text-muted">(1,229)</span>
                                    </p>
                                    <p class="course-price font-weight-bold">
                                        $129.99
                                    </p>
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
                                        <span class="text-muted">(1,229)</span>
                                    </p>
                                    <p class="course-price font-weight-bold">
                                        $129.99
                                    </p>
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
                                        <span class="text-muted">(1,229)</span>
                                    </p>
                                    <p class="course-price font-weight-bold">
                                        $129.99
                                    </p>
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