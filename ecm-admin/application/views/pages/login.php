<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= APP_NAME . " • " .  $page['title'] ?></title>
</head>

<body>
    <?php $this->load->view('components/_nav') ?>
    <main>
        <section class="my-5">
            <div class="row m-0 justify-content-center g-0">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="card panel panel-default">
                        <div class="card-header panel-header">
                            <h5>Login Now</h5>
                        </div>
                        <div class="card-body panel-body">
                            <?php if (isset($_SESSION['error'])) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('error'); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif ?>
                            <div class="form-horizontal">
                                <?= form_open(base_url('api-auth-login')) ?>
                                <div class="mb-3">
                                    <label for="inputUsername" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" id="inputUsername">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view('components/_common_js') ?>
</body>

</html>