<nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('Image/icontext.svg') }}" alt="icontext">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mx-3">
                            <a class="nav-link" type="button" id="toggleKategori">Kategori</a>
                        </li>
                        <div class="nav-item">
                            <div class="input-group input-group-sm search">
                                <span class="input-group-text bg-white" id="search"><i
                                        class="bi bi-search"></i></span>
                                <input type="text" class="form-control" aria-describedby="search">
                            </div>
                        </div>
                        <li class="nav-item mx-2">
                            <a class="nav-link icon" href="#"><i class="bi bi-cart-fill"></i></a>
                        </li>
                    </ul>
                    <button class="btn-navbar-one mx-2 fw-bold">Masuk</button>
                    <button class="btn-navbar-two mx-2 fw-bold">Daftar</button>
                </div>
            </div>
            <div class="col-12 mt-2 d-none" id="kategori">
                <livewire:kategori />
            </div>
        </div>
    </div>
</nav>
