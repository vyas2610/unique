<header class="bg-light py-2 border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-sm-start text-center">
                <a href="#" class="text-dark">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-dark">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="#" class="text-dark">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <a href="#" class="text-dark">
                    <i class="fab fa-instagram"></i>
                </a>

            </div>
            <div class="col-sm-6 text-sm-end text-center">
                <a href="#" class="text-dark">
                    <i class="fa-regular fa-envelope"></i> {{ $site->email }}
                </a>
                <a href="#" class="text-dark">
                    <i class="fa fa-light fa-phone"></i> {{ $site->phone }}
                </a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://mbtent.com/images/mbtent-logo.png" alt="logo" title="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('page.show', 'about-us') }}">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $c)
                        <li><a class="dropdown-item" href="
                            {{ route('shop.index', array($c->slug)) }}
                            ">{{$c->name }}</a>
                        </li>
                        @endforeach



                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="
                        {{ route('image-gallery.index') }}
                        ">Image Gallery</a></li>
                        <li><a class="dropdown-item" href="
                        {{ route('video-gallery.index') }}
                        ">Video Gallery</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                    {{route('contact.index')}}
                    ">Contact Us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>