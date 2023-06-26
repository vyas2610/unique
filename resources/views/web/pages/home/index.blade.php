@extends('web.layouts.app')

@section('main_section')

<!-- Slider Section Start -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-3">
                <div class="list-group rounded-1">
                    @foreach ($categories as $c) <a href="
                    
                    {{ route('shop.index', [$c->slug]) }}
                            
                    " class="list-group-item list-group-item-action" href="#">
                        {{ $c->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-8 col-lg-9">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach($slider as $s)
                        <div class="carousel-item active">
                            <img src="{{$s->image}}" class="d-block w-100 rounded" alt="...">
                        </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider Section End -->

<!-- About Us Section Start -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-sm-5">
                <img src="<?php echo $about->image ?>" class="w-100 rounded" />
            </div>
            <div class="col-sm-7">
                <h6>Know More About Us</h6>
                <h3 class="mb-3">Welcome to Our Company</h3>
                <p>
                    {!! substr($about->description,3,367) !!}

                </p>
                <a href="{{ route('page.show', ['about-us']) }}" class="rounded-pill btn btn-outline-dark px-4">Know More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!--Category Start-->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center  mb-3">Our Category</h3>
        <div class="row">
            @foreach ($categories as $c) <div class="col-sm-4 mb-3">
                <div class="position-relative">
                    <a href="#" class="d-block">
                        <img src="{{ $c->products[0]->image }}" alt="" class="w-100">
                    </a>

                    <div class="position-absolute bottom-0 m-3">
                        <!-- <p class="text-uppercase">new Session</p> -->
                        <h2 class="text-uppercase">{{ $c->name }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>
<!--Category end-->
<!-- Popular Production Section Start -->
<section class="py-5">
    <div class="container">
        <h3 class="text-center pb-2 mb-3 border-bottom">Popular Products</h3>
        <div class="row">
            @foreach ($products as $p) <div class="col-sm-3 product text-center mb-5">
                <div class="position-relative">
                    <a href="{{ route('shop.show', [$p->slug]) }}" class="d-block">
                        <img src="{{$p->image}}" alt="Product Image" class="w-100">
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
                    <h4>{{$p->name}}</h4>
                    <p>{{$p->description}}</p>
                    <a href="#" class="btn btn-outline-dark px-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">Enquiry Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Popular Production Section End -->

<!--Our Gallery Start-->
<section class="py-1">
    <div class="container">
        <h3 class="text-center">Image Gallery</h3>
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($galleries as $g)
                        <a href="{{$g->image}}" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="{{$g->image}}" class="img-fluid">
                        </a>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!--Our Gallery End-->

<!--video gallery start-->
<section class="py-3">
    <div class="container">
        <h3 class="text-center py-3 border-bottom">Video Gallery</h3>
        <div class="row">
            @foreach ($video as $v) <div class="col-sm-4 text-center mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="position-relative">

                    <img src="{{$v->image}}" class="w-100 object-fit-cover" style="height: 250px;" data-toggle="modal" data-target="#exampleModalLong">

                    <div class="position-absolute start-50 top-50 text-white" style="transform: translate(-50%, -50%); font-size: 64px;">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--video gallery end-->

<!--Google Review Start-->
<section class="py-3">
    <div class="container">
        <h3 class="text-center pb-1 border-bottom">Google Review</h3>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 text-center">
                <img src="https://sysinventory.in/catalogue/assets/img/reivew.png" class="w-100" alt="Google Review" title="Google Review">
            </div>
        </div>
    </div>
</section>
<!--Google Review End-->

<!--Our Partner start-->
<section class="py-3">
    <div class="container">
        <h3 class="text-center">Our Partners</h3>

    </div>
    <div class="container-fluid bg-light text-center">
        <div class="container py-5">
            <div class="row text-center">

                <div class="col-sm-2 ">
                    <img src="https://sysinventory.in/catalogue/assets/img/partner/logo-partner1.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://sysinventory.in/catalogue/assets/img/partner/logo-partner2.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://sysinventory.in/catalogue/assets/img/partner/logo-partner3.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://sysinventory.in/catalogue/assets/img/partner/logo-partner4.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://sysinventory.in/catalogue/assets/img/partner/logo-partner5.png" alt="">
                </div>
                <div class="col-sm-2">
                    <img src="https://sysinventory.in/catalogue/assets/img/partner/logo-partner6.png" alt="">
                </div>
                </span>
            </div>
        </div>
    </div>
</section>
<!--Our Partner End-->

<!--Supply section start-->
<section class="py-5">
    <div class="container">
        <h3 class="text-center text-uppercase">Supplying in pan india</h3>
        <div class="row py-3">
            <ul class="city-lists">
                <div class="col-sm-2">
                    @foreach ($City as $c)

                    <li><a href="#">{{$c->name}}</a></li>
                    @endforeach

            </ul>
        </div>
    </div>
    </div>
</section>

<!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$v->url}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--Supply Section end-->

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