@extends('web.layouts.app')

@section('main_section')

<!-- Slider Section Start -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-3">
                <div class="list-group rounded-1">
                    @for ($i = 1; $i <= 11; $i++) <a href="
                    
                    {{ route('shop.index', ['category-slug-' . $i]) }}
                            
                    " class="list-group-item list-group-item-action" href="#">Category
                        {{ $i }}</a>
                        @endfor
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
                        <div class="carousel-item active">
                            <img src="https://sysinventory.in/catalogue/assets/img/slider/home-07/m7-s2-1.jpg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://sysinventory.in/catalogue/assets/img/slider/home-07/m7-s2-1.jpg" class="d-block w-100 rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://sysinventory.in/catalogue/assets/img/slider/home-07/m7-s2-1.jpg" class="d-block w-100 rounded" alt="...">
                        </div>
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
                <img src="https://www.indonez.com/html-demo/revusion/images/sample_images/about_img.jpg" class="w-100 rounded" />
            </div>
            <div class="col-sm-7">
                <h6>Know More About Us</h6>
                <h3 class="mb-3">Welcome to Our Company</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <a href="{{ route('page.show', 'about-us') }}" class="rounded-pill btn btn-outline-dark px-4">Know More <i class="fas fa-angle-right"></i></a>
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
            @for ($i = 1; $i <= 6; $i++) <div class="col-sm-4 mb-3">
                <div class="position-relative">
                    <a href="#" class="d-block">
                        <img src="https://sysinventory.in/catalogue/assets/img/banner/m02-banner7.jpg" alt="" class="w-100">
                    </a>

                    <div class="position-absolute bottom-0 m-3">
                        <p class="text-uppercase">new Session</p>
                        <h2 class="text-uppercase">the interview</h2>
                    </div>
                </div>
        </div>
        @endfor
    </div>

    </div>

</section>
<!--Category end-->
<!-- Popular Production Section Start -->
<section class="py-5">
    <div class="container">
        <h3 class="text-center pb-2 mb-3 border-bottom">Popular Products</h3>
        <div class="row">
            @for ($i = 1; $i <= 8; $i++) <div class="col-sm-3 product text-center mb-5">
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
<!-- Popular Production Section End -->

<!--Our Gallery Start-->
<section class="py-1">
    <div class="container">
        <h3 class="text-center">Image Gallery</h3>
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <a href="https://unsplash.it/1200/768.jpg?image=251" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        </a>
                        <a href="https://unsplash.it/1200/768.jpg?image=252" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                        </a>
                        <a href="https://unsplash.it/1200/768.jpg?image=253" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid">
                        </a>
                    </div>
                    <div class="row">
                        <a href="https://unsplash.it/1200/768.jpg?image=254" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid">
                        </a>
                        <a href="https://unsplash.it/1200/768.jpg?image=255" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid">
                        </a>
                        <a href="https://unsplash.it/1200/768.jpg?image=256" data-lightbox="gallery" class="col-sm-4 mb-3">
                            <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid">
                        </a>
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
            @for ($i = 1; $i <= 6; $i++) <div class="col-sm-4 text-center mb-3" data-toggle="modal" data-target="#exampleModal">
                <div class="position-relative">
                    <img src="https://sysinventory.in/catalogue/assets/img/banner/m02-banner6.jpg" class="w-100 object-fit-cover" style="height: 250px;" data-toggle="modal" data-target="#exampleModalLong">

                    <div class="position-absolute start-50 top-50 text-white" style="transform: translate(-50%, -50%); font-size: 64px;">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
        </div>
        @endfor

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
            @for ($i = 1; $i <= 6; $i++) <div class="col-sm-2">
                <ul class="city-lists">
                    <li><a href="#">Agartala</a></li>
                    <li><a href="#">Agra</a></li>
                    <li><a href="#">Amritsar</a></li>
                    <li><a href="#">Ajmer</a></li>
                    <li><a href="#">Aligarh</a></li>
                    <li><a href="#">Allahabad</a></li>
                    <li><a href="#">Alwar</a></li>
                    <li><a href="#">Ambala</a></li>
                    <li><a href="#">Amritsar</a></li>
                    <li><a href="#">Others</a></li>
                </ul>
        </div>
        @endfor
    </div>
    </div>
</section>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div><!--Supply Section end-->

@endsection