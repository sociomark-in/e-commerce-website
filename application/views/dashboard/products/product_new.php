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
                <?php $this->load->view('components/dashboard/_page_title') ?>
                <?= form_open() ?>
                <div class="row m-0">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                Product Information
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Product Title</label>
                                    <input type="text" class="form-control" id="productName">
                                </div>
                                <div class="mb-3">
                                    <label for="productDesc" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" id="productDesc">
                                </div>
                                <div class="mb-3">
                                    <label for="productCat" class="form-label">Product Category</label>
                                    <input type="text" class="form-control" id="productCat">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                Product Gallery
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                General Information
                            </div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Name</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                Publish
                            </div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                Publish Schedule
                            </div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="productCat" class="form-label">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="productCat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                Product Tags
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                Product Short Description
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create New Product</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/dashboard/_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
</body>

</html>