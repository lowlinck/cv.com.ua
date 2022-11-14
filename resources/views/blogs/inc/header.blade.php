<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo" style="position: relative;left: 0;top: -5px;font-family: 'Work Sans'!important;font-size: 30px; font-weight: 900;"><a href="{{route('main.index')}}" class="mb-0">FASTLINK</a></h1>

            </div>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('main.index')}}">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="blog.html">Blog Archive</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <a class="dropdown-item" href="404.html">404</a>
                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('main.index')}}">Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
