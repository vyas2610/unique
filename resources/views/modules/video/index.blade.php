@extends('layouts.afterlogin')

@section('title', 'Category')

@section('admin_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <x-alert />
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <h5 class="card-header">
                    Add Category
                </h5>
                <div class="card-body">
                    {{ Form::open(['url' => route('admin.category.store')]) }}
                    @include('modules.category._form')
                    <div class="d-grid">
                        <button class="btn btn-primary">Save</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="card">
                <h5 class="card-header">View Categories</h5>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@push('extra_styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.6.1/css/colReorder.bootstrap5.min.css">
@endpush

@push('extra_scripts')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.6.1/js/dataTables.colReorder.min.js"></script>

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush