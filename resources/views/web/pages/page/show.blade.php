@extends('web.layouts.app')

@section('main_section')

<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">{{ $page->title }}</h2>
    </div>
</section>
<section class="py-5">

    <div class="container">
        <div class="row align-items-center">
            @if(!empty($page->image))
            <div class="col-sm-5">
                <img src="{{ $page->image }}" class="w-100 rounded" />
            </div>
            @endif
            <div class="{{!empty($page->image) ? 'col-sm-7' : 'col-sm-12'}}">
                {!! $page->description !!}

            </div>
        </div>
    </div>
</section>

@endsection