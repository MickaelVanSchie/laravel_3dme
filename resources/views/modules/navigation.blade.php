<nav id="navbar" class="navbar navbar-expand-lg text-white">
    <button id="hamburgerButton" class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" id="hamburgerIcon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main.home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ route('main.contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ route('products.catalog') }}">Catalogus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ route('main.print-service') }}">Gratis offerte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="/winkelmand"><i class="fas fa-shopping-basket"></i></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 pl-2" action="catalogus">
            <input class="form-control mr-sm-2 ml-auto" name="zoeken" type="search" placeholder="Zoeken"
                   aria-label="Zoeken">
            <button id="searchButton" class="btn btn-outline-light my-2 my-sm-0" type="submit">Zoeken</button>
        </form>
    </div>
</nav>
