<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://mbtent.com/images/mbtent-logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>




<body>
    <x-web-header />

    @yield('main_section')

    <!--Footer start-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-sm-3">

                        <img src="https://mbtent.com/images/mbtent-logo.png" alt="" class="w-50">
                        <p class="" style="margin-top: 15px;">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Temporibus, quos.</p>

                        <p class="social-footer">
                            <a href="#" class="text-light">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" class="text-light">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a href="#" class="text-light">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <a href="#" class="text-light">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </p>
                    </div>

                    <div class="col-sm-3">
                        <p class="text-uppercase">Company</p>
                        <p class="links">
                            <a href="#" class="text-light">About us</a>
                        </p>
                        <p class="links">
                            <a href="{{ route('page.show', 'company-policy') }}" class="text-light">Company policy</a>
                        </p>
                        <p class="links">
                            <a href="#" class="text-light">Privacy Policy</a>
                        </p>
                        <p class="links">
                            <a href="#" class="text-light">Contact Us</a>
                        </p>
                    </div>

                    <div class="col-sm-3">
                        <p class="text-uppercase">Other Links</p>
                        <p class="links">
                            <a href="#" class="text-light">About us</a>
                        </p>
                        <p class="links">
                            <a href="#" class="text-light">Company policy</a>
                        </p>
                        <p class="links">
                            <a href="#" class="text-light">Privacy Policy</a>
                        </p>
                        <p class="links">
                            <a href="#" class="text-light">Contact Us</a>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-uppercase">Contact Info</p>
                        <p class="links">
                            <a href="#" class="text-light">
                                <i class="fa-regular fa-envelope"></i> admin@gmail.com
                            </a>
                        </p>
                        <p class="links">
                            <a href="#" class="text-light">
                                <i class="fa fa-light fa-phone"></i> (+91) xxx xxx xxxx
                            </a>
                        </p>

                        <p class="links">

                            <a href="#" class="text-light">
                                <i class="fa-solid fa-location-dot"></i> Sample Address
                            </a>
                        </p>

                    </div>

                    <p class="text-center py-2">&copy; Sample 2023 made by xxxxxx </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer end-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // make it as accordion for smaller screens
            if (window.innerWidth > 992) {

                document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem) {

                    everyitem.addEventListener('mouseover', function(e) {

                        let el_link = this.querySelector('a[data-bs-toggle]');

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                        }

                    });
                    everyitem.addEventListener('mouseleave', function(e) {
                        let el_link = this.querySelector('a[data-bs-toggle]');

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                        }


                    })
                });

            }
            // end if innerWidth
        });
        // DOMContentLoaded  end
    </script>


</body>

</html>