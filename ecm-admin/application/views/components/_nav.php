<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="<?= base_url('') ?>"><img src="<?= base_url() ?>assets/logo.png" alt="Logo Image" style="height: 40px;"></a> -->
        <a class="navbar-brand" href="<?= base_url('') ?>"><?= APP_NAME ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("") == current_url()) ? "active" : "" ?>" <?= (base_url("") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("") ?>">Home</a>
                </li>
                <!-- 
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("features") == current_url()) ? "active" : "" ?>" <?= (base_url("features") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("features") ?>">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("pricing") == current_url()) ? "active" : "" ?>" <?= (base_url("pricing") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("pricing") ?>">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("other") == current_url()) ? "active" : "" ?>" <?= (base_url("other") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("other") ?>">Other</a>
                </li> 
                -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("login") == current_url()) ? "active" : "" ?>" <?= (base_url("login") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("login") ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("register") == current_url()) ? "active" : "" ?>" <?= (base_url("register") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("register") ?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>