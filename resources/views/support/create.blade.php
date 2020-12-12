@extends('layouts.app')

@section('title', 'Submit a Support Ticket')

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __("This is where you can submit a ticket regarding any issues that you encounter in the system. Don't be afraid to report!"),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Submit a Support Ticket</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('support.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Subject</label>
                                    <input type="text" name="subject" id="input-subject" class="form-control {{ $errors->has('subject') }}" placeholder="Subject" value="{{ old('subject') }}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-control-label">Email Address</label>
                                    <input type="text" name="email" id="input-email" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label for="" class="form-control-label">Message</label>
                                    <textarea name="message" id="input-message" cols="30" rows="5" class="form-control">{{ old('message') }}</textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
