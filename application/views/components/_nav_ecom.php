<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand bg-nav-sprite brand-logo" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
            <ul class="navbar-nav gap-2 align-items-center">
                <li class="nav-item">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropAddress">Deliver&nbsp;to&nbsp;India</button>
                </li>
                <li class="nav-item w-100">
                    <form class="input-group nav-search" role="search">
                        <select class="input-group-text" name="" id="">
                            <option value="">All</option>
                        </select>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="input-group-text" type="submit">S</button>

                    </form>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accounts
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Return&nbsp;&&nbsp;Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-dark-accent p-0">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class="fa-solid fa-bars me-2"></i>All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Today's Deal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Customer Service</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("") == current_url()) ? "active" : "" ?>" <?= (base_url("") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("products") == current_url()) ? "active" : "" ?>" <?= (base_url("products") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("products") ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("about-us") == current_url()) ? "active" : "" ?>" <?= (base_url("about-us") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("about-us") ?>">About&nbsp;Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("services") == current_url()) ? "active" : "" ?>" <?= (base_url("services") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("services") ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("contact-us") == current_url()) ? "active" : "" ?>" <?= (base_url("contact-us") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("contact-us") ?>">Contact&nbsp;Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Hello,&nbsp;<a href="<?= ($this->session->has_userdata('username')) ? base_url('account/' . $this->session->username) : base_url('login') ?>"><?= ($this->session->has_userdata('username')) ? $this->session->username : "Sign In" ?></a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdropAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>