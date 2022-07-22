<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/"
            class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-primary fs-3 fw-bold text-decoration-none">
            AKAP BUS
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 {{ ('home' === $nav) ? 'link-secondary' : 'link-dark' }}">Home</a></li>
            <li><a href="/#services" class="nav-link px-2 link-dark">Services</a></li>
            <li><a href="/invoice" class="nav-link px-2 {{ ('invoice' === $nav) ? 'link-secondary' : 'link-dark' }}">Invoice</a></li>
        </ul>

        @auth
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="bi bi-door-open-fill"></i> {{ auth()->user()->name }}</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-window-reverse"></i> My
                        Profile</a></li>
                <li>
                    <hr class="dropdown-devider">
                </li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log Out</button>
                </form>
            </ul>
        @else
            <div class="col-md-3 text-end">
                <a href="/login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
                <a href="/register"><button type="button" class="btn btn-primary">Register</button></a>
            </div>
        @endauth
    </header>
</div>
