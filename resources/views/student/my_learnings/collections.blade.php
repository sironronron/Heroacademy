@extends('layouts.app')

@section('title', 'Collections')

@section('content')
    @include('users.partials.header', [
        'title' => __('Collections'),
        'description' => __('This is your collections page. Organize and access your courses faster!'),
        'class' => 'col-lg-10'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">All Courses</h3>
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
        </div>  

        @include('layouts.footers.auth')
    </div>
@endsection