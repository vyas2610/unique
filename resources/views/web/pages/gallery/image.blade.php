@extends('web.layouts.app')

@section('main_section')

<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">Image Gallery</h2>
    </div>
</section>

<!--Our Gallery Start-->
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="row">
                        @foreach($galleries as $g)

                        <a href="{{$g->image}}" data-lightbox="gallery" class="col-sm-3 mb-3">
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


@endsection