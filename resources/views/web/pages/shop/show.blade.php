@extends('web.layouts.app')

@section('main_section')

<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">{{$product}}</h2>
    </div>
</section>
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="https://m.media-amazon.com/images/I/51CzI-GRU5S._UL1440_.jpg" alt="Image" title="Product-Image" class="w-100 rounded-3 border">
            </div>
            <div class="col-sm-8">
                <h3 class="">VASTRAMAY Men's Sample Product Name</h3>
                <p class="line-height my-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, accusamus. Adipisci tempore cupiditate illo soluta! Ex excepturi, repudiandae quis fuga enim quam quaerat rem unde provident ipsa esse accusamus et! Odit adipisci, deserunt qui sunt error ducimus laudantium excepturi! Nam repudiandae officia reprehenderit beatae qui odit soluta, doloremque consequuntur nulla veritatis, quibusdam dignissimos! Et quo hic suscipit, commodi corporis ut nostrum? Hic quod dolores iste, sapiente ut soluta nulla possimus facilis amet necessitatibus rerum earum illum repellat, harum, atque neque est sit quae reiciendis consequuntur maiores. Minima repudiandae nihil ipsum illum quis vel, esse iste impedit est voluptatum eligendi exercitationem.
                </p>
                <p class="my-5">
                    <a href="#" class=" btn btn-outline-dark px-4">Enquiry <i class="fas fa-angle-right"></i></a>
                </p>

            </div>
        </div>
    </div>
</section>

@endsection