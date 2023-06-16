@extends('layouts.afterlogin')

@section('title', 'Page')

@section('admin_content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <x-alert />
    <div class="card">
        <h5 class="card-header">View Pages</h5>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($pages as $page)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>{{ $page->title }}</strong>
                    <a href="{{ route('admin.page.edit', $page) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@push('extra_styles')

@endpush

@push('extra_scripts')
@endpush