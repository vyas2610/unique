@extends('web.layouts.app')

@section('main_section')

<section class="py-5 bg-light text-center border-bottom">
    <div class="container-fluid">
        <h2 class="text-uppercase">Contact Us</h2>
    </div>
</section>

<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center py-3">
                <i class="fa-solid fa-location-dot"></i>
                <p>{{ $site->address }}</p>
                <i class="fa-solid fa-envelope"></i>
                <p>{{ $site->email }}</p>
                <i class="fa-solid fa-phone"></i>
                <p>{{ $site->phone }}</p>
            </div>
            <div class="col-sm-8 text-right">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name Here">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email Here">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Enter Your Message Here"></textarea>
                    </div>
                    <div class="mb-3">
                        <a href="#" class=" btn btn-outline-dark px-4">Send <i class="fas fa-angle-right"></i></a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container-fluid border-top border-bottom">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.301432600867!2d73.01362687515305!3d26.28432647702725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c357aaeda1f%3A0xfb2c1ee567b9a0fc!2sJalori%20Gate%20Circle%2C%20Jalori%20Bari%2C%20Rawaton%20Ka%20Bass%2C%20Jodhpur%2C%20Rajasthan%20342003!5e0!3m2!1sen!2sin!4v1686322549058!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection