@extends('web.layouts.app')

@section('main_section')


<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">Video Gallery</h2>
    </div>
</section>
<!--video gallery start-->
<section class="py-3">
    <div class="container">
        <div class="row">
            @for ($i = 1; $i <= 8; $i++) <div class="col-sm-3 text-center mb-3" data-toggle="modal" data-target="#exampleModal">
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
@endsection