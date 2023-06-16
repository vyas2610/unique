<!-- Header -->
<header class="header-main container-fluid no-padding">
    <!-- SidePanel -->
    <div id="slidepanel">
        <!-- Top Header -->
        <div class="header-top container-fluid no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <span>Welcome to Thar tours & travels</span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul>
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" title="GooglePlus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Top Header /- -->
        <!-- Middle Header /- -->
        <div class="container header-middle">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-block align-items-center">
                        <a href="{{ route('web.home') }}"><img src="{{asset('images/logo.png')}}" alt="logo" height="52" width="70" />
                            <h3>Thar Adventures</h3><span>Tours & Travels</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="header-contactinfo-block">
                        <div class="contactinfo-box">
                            <span class="icon icon-Pointer"></span>
                            <p>Address, <span>Jodhpur,Rajasthan,</span></p>
                        </div>
                        <div class="contactinfo-box">
                            <span class="icon icon-Mail"></span>
                            <p>E-mail Address<span>info@tharadventure.com</span></p>
                        </div>
                        <div class="contactinfo-box">
                            <span class="icon icon-Phone2"></span>
                            <p>
                                Call Us:
                                <a href="tel:011234567896" title="011234567896">(+01) 123 456 7896</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Middle Header /- -->
    </div><!-- SidePanel /- -->

    <div class="menu-block">
        <div class="container">
            <div class="row">
                <!-- Navigation -->
                <nav class="navbar ow-navigation">
                    <div id="loginpanel" class="desktop-hide">
                        <div class="right" id="toggle">
                            <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                            <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a title="Logo" href="{{ route('web.home') }}" class="navbar-brand"></a>
                            <a href="{{ route('web.home') }}" class="mobile-logo" title="Logo">
                                <h3>Global</h3>
                            </a>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Home" href="{{ route('web.home') }}">Home</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                </li>
                                <li><a title="About Us" href="{{ route('web.page.show', 'about-us') }}">About Us</a></li>
                                <!-- <li><a title="About Us" href="{{ route('web.package.index') }}">Packages</a></li> -->
                                <li class="dropdown">
                                    <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Packeges" href="javascript: return void()">Packeges</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                        @foreach($packages as $slug => $title)
                                        <li><a title="{{ $title }}" href="{{ route('web.package.show', $slug) }}">{{ $title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a title="Contact" href="{{ route('web.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <form class=" input-group menusearch">
                        <input type="text" placeholder="Search for Tour" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" title="Search" class="btn"><span class="icon_search" aria-hidden="true"></span></button>
                        </span>
                    </form>
                </nav><!-- Navigation /- -->
            </div>
        </div>
    </div>
</header>
<!-- Header /- -->