@extends('web.layouts.app')

@section('main_section')

<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">{{$product->name}}</h2>
    </div>
</section>
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ $product->image }}" alt="Image" title="Product-Image" class="w-100 rounded-3 border">
            </div>
            <div class="col-sm-8">
                <h3 class="">{{ $product->name }}</h3>
                {!! $product->description !!}
                <p class="my-5">
                    <a href="#" class=" btn btn-outline-dark px-4">Enquiry <i class="fas fa-angle-right"></i></a>
                </p>

            </div>
        </div>
    </div>
</section>

@endsection