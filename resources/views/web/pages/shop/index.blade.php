@extends('web.layouts.app')

@section('main_section')
<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">{{$category}}</h2>
    </div>
</section>
<!-- Category Section Start -->
<section class="py-5">
    <div class="container">
        <div class="row">
            @for ($i = 1; $i <= 12; $i++) <div class="col-sm-3 product text-center mb-5">
                <div class="position-relative">
                    <a href="{{ route('shop.show', ['product-slug-' . $i]) }}" class="d-block">
                        <img src="https://sysinventory.in/catalogue/assets/img/products/prod-16-1-1.jpg" alt="Product Image" class="w-100">
                    </a>

                    <div class="product-share position-absolute bottom-0 end-0 m-3">
                        <a href="http://wa.me/9636150842/?text=hello" target="_target" class="d-block">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="d-block">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="d-block">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4>Chain print bermuda shorts</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    <a href="#" class="btn btn-outline-dark px-5">Enquiry Now</a>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>
<!-- End Category Section End -->
@endsection