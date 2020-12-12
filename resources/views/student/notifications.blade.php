@extends('layouts.app')

@section('title', 'Notifications')
    
@section('content')
    @include('users.partials.header', [
        'title' => __('Notifications'),
        'description' => __('Checkout new deals and new announcements from your instructors!'),
        'class' => 'col-lg-10'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="mb-0">Notifications</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            No Notifications
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection