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
                    <a href="#" class=" btn btn-outline-dark px-4" data-bs-toggle="modal" data-bs-target="#exampleModal1">Enquiry <i class="fas fa-angle-right"></i></a>
                </p>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your name Here ">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--End modal-->
@endsection