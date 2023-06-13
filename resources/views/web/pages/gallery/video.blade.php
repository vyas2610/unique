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
            @for ($i = 1; $i <= 8; $i++) <div class="col-sm-3 text-center mb-3">
                <div class="position-relative">
                    <img src="https://sysinventory.in/catalogue/assets/img/banner/m02-banner6.jpg" class="w-100 object-fit-cover" style="height: 250px;" data-toggle="modal" data-target="#exampleModalLong">

                    <div class="position-absolute start-50 top-50 text-white" style="transform: translate(-50%, -50%); font-size: 64px;">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
        </div>
        @endfor
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--End modal-->
    </div>
    </div>

</section>
<!--video gallery end-->
@endsection