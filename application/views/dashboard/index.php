<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
    <?php $this->load->view('components/dashboard/_nav') ?>
    <main>
        <section class="py-3">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12"></div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view('components/_common_js') ?>
</body>

</html>