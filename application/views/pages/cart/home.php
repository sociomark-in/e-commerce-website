<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= APP_NAME . " • " .  $page['title'] ?></title>
</head>

<body>
    <header>
        <?php $this->load->view('components/_nav_ecom') ?>
    </header>
    <?php $subtotal = 0;?>
    <?php $quantity = 0;?>
    <main class="py-3">
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <h5>Shopping Cart</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($cart_contents as $key => $value) : ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <?php 
                                print_r($value);
                                $subtotal += $value['cart']['subtotal'];
                                $quantity += $value['cart']['qty'];
                                ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-md-auto col-12">
                            Subtotal <?= $quantity ?> <?= number_to_currency($subtotal, 'INR', 2)?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="disclaimer">
                <small>
                    The price and availability of items at Amazon.in are subject to change. The shopping cart is a temporary place to store a list of your items and reflects each item's most recent price.
                    <br>Do you have a promotional code? We'll ask you to enter your claim code when it's time to pay.
                </small>
            </div>
        </div>
    </main>
    <?php $this->load->view('components/_common_js') ?>
</body>

</html>