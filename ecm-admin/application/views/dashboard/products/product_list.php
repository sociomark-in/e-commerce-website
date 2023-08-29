<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <?php $this->load->view('components/_datatables_css') ?>
    <title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
    <header>
        <?php $this->load->view('components/dashboard/_nav') ?>
    </header>
    <main>
        <section class="my-4">
            <div class="container">
                <div class="row m-0 align-items-end mb-3">
                    <div class="col-12">
                        <?php
                        $data = [
                            'property' => [
                                'class' => 'sticky'
                            ],
                        ];
                        $this->load->view('components/dashboard/_page_title', $data) ?>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('products/new') ?>" class="btn btn-primary my-2">Add New Product</a>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                All Products
                            </div>
                            <div class="card-body">
                                <table id="stock_report" class="display">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Amount</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($page['products']['products'] as $product): ?>
                                            <tr>
                                                <td>
                                                    <a href="<?= base_url("product/23784632784/edit") ?>">#23784632784</a>
                                                </td>
                                                <td>
                                                    <a class="nav-link" href=""><?= $product['title'] ?></a>
                                                </td>
                                                <td><?= round($product['price']*$_SESSION['currency_ratio'], 3) . " ". BASE_LOCALE?></td>
                                                <td><?= $product['price'] * 34 ?></td>
                                                <td>
                                                    <span class="badge bg-secondary">New</span>
                                                </td>
                                                <td>34</td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <a class="link" href="<?= base_url("products") ?>">View All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/dashboard/_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
    <?php $this->load->view('components/_datatables_js') ?>
    <script>
        $(document).ready(function() {
            $('#stock_report').DataTable();
        });
    </script>
</body>

</html>