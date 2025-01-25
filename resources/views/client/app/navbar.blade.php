<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" aria-label="Navbar">
    <div class="container-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi-cup-hot-fill"></i>
                GBM Coffee
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                        Baş Sahypa
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bölümler
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('category', $category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Gözleg</button>
                    </form>
                </div>
            </ul>
        </div>
    </div>
</nav>

