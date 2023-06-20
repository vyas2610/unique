@extends('layouts.afterlogin')

@section('title', 'Add New Product')

@section('admin_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <x-alert />
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <h5 class="card-header">
                    Add New Product
                </h5>
                <div class="card-body">
                    {{ Form::open(['url' => route('admin.product.store'), 'method' => 'POST']) }}
                    @include('modules.product._form')
                    <div class="d-grid">
                        <button class="btn btn-primary">Save</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Content -->
@endsection