@extends('layouts.afterlogin')

@section('title', 'Edit Page » ' . $page->title)

@section('admin_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <x-alert />
    <div class="card">
        <h5 class="card-header">
            Edit {{ $page->title }}
        </h5>
        <div class="card-body">
            {{ Form::open(['url' => route('admin.page.update', $page), 'method' => 'PUT']) }}
            @include('modules.page._form')
            <div>
                <button class="btn btn-primary px-5">Update</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
<!-- /Content -->
@endsection