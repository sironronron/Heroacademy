@extends('layouts.app')

@section('title', 'Wishlist')

@section('content')
    @include('users.partials.header', [
        'title' => __('Wishlist'),
        'description' => __('You will be notified if a course on your wishlist is on sale!'),
        'class' => 'col-lg-10'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12">
                
            </div>
        </div>
    </div>
@endsection