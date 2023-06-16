@extends('layouts.afterlogin')

@section('title', 'Edit Composition')

@section('admin_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <x-alert />
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <h5 class="card-header">
                    Edit Composition
                </h5>
                <div class="card-body">
                    {{ Form::open(['url' => route('admin.composition.update', $composition), 'method' => 'PUT']) }}
                    @include('modules.composition._form')
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