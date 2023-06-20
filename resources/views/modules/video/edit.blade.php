@extends('layouts.afterlogin')

@section('title', 'Edit Video Gallery')

@section('admin_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <x-alert />
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <h5 class="card-header">
                    Edit Video Gallery
                </h5>
                <div class="card-body">
                    {{ Form::open(['url' => route('admin.video.update', $video), 'method' => 'PUT']) }}
                    @include('modules.video._form')
                    <div class="d-grid">
                        <button class="btn btn-primary">Update</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Content -->
@endsection