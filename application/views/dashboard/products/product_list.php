<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <?php $this->load->view('components/_datatables_css') ?>
    <title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
    <?php $this->load->view('components/dashboard/_nav') ?>
    <main>
        <section class="py-3">
            <div class="container">
                <?php $this->load->view('components/dashboard/_page_title') ?>
                <div class="py-3">
                    <a href="<?= base_url("products/new") ?>" class="btn btn-primary">Add New Product</a>
                </div>
                <div class="row m-0">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                All Products
                            </div>
                            <div class="card-body">
                                <table id="products_table" class="display">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Stock</th>
                                            <th>Rate</th>
                                            <th>Price</th>
                                            <th>Publish</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 20; $i++) : ?>
                                            <tr>
                                                <td>
                                                    <a href="<?= base_url("product/23784632784/edit")?>">#23784632784</a>
                                                </td>
                                                <td>
                                                    <a href="" class="nav-link">Row 1 Data 1</a>
                                                </td>
                                                <?php for ($j = 0; $j < 4; $j++) : ?>
                                                    <td>Row 1 Data 1</td>
                                                <?php endfor ?>
                                                <td>
                                                    <span class="badge bg-secondary">New</span>
                                                </td>
                                            </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
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
            $('#products_table').DataTable();
        });
    </script>
</body>

</html>