<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="{{route('main.index')}}" class="mb-0">FASTLINK</a></h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">{{__('menu.home')}}</a></li>
                        <li class="has-children">
                            <a href="#about-section" class="nav-link">{{__('menu.about')}}</a>
                            <ul class="dropdown">
                                <li><a href="#team-section" class="nav-link">{{__('menu.team')}}Team</a></li>
                                <li><a href="#pricing-section" class="nav-link">{{__('menu.price')}}</a></li>
                                <li><a href="#faq-section" class="nav-link">{{__('menu.faq')}}</a></li>
                            </ul>
                        </li>

                        <li><a href="#portfolio-section" class="nav-link">{{__('menu.portfolio')}}</a></li>
                        <li><a href="#services-section" class="nav-link">{{__('menu.services')}}</a></li>
                        <li><a href="#testimonials-section" class="nav-link">{{__('menu.testimonials')}}</a></li>
                        <li><a href="#blog-section" class="nav-link">{{__('menu.blog')}}</a></li>
                        <li><a href="#contact-section" class="nav-link">{{__('menu.contact')}}</a></li>
                        <li>@include('main.inc.lang')</li>
                    </ul>

                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>
