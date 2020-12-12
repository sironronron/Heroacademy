@extends('layouts.app')

@section('title', 'Messages')

@section('content')
    @include('users.partials.header', [
        'title' => __('Messages'),
        'description' => __("Send a message to your instructor about any questions that you have. Don't be shy!"),
        'class' => 'col-lg-10'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-8">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">You have 0 unread messages</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            Select a message thread to read it here.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row">
                            <div class="col-8">
                                <form action="#" class="form-inline" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="search" name="search" placeholder="Search messages" class="form-control form-control-sm">
                                </form>
                            </div>
                            <div class="col-4">
                                <div class="float-right">
                                    <button type="button" class="btn btn-sm btn-primary">
                                        Compose
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center text-sm">
                            You don't have any message threads
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection