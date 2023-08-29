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
    <?php $subtotal = 0; ?>
    <?php $quantity = 0; ?>
    <main class="py-3">
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <h5>Shopping Cart</h5>
                </div>
                <div class="card-body">
                    <?php foreach ($cart_contents as $key => $value) : ?>
                        <div class="card mb-3">
                            <?php
                            // print_r($value);
                            $subtotal += $value['cart']['subtotal'];
                            $quantity += $value['cart']['qty'];
                            ?>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-md-auto col-12">
                                        <div class="prdct_image">
                                            <a href="<?= base_url("product/") . random_string() . "/dp/" . $value['product']['product_id'] ?>?ref=product_list"><img src="<?= $value['product']['image'] ?>" alt="<?= $value['product']['name'] ?>" width="100" loading="lazy"></a>
                                        </div>
                                    </div>
                                    <div class="col-md col-12">
                                        <div class="row m-0">
                                            <div class="col-12">
                                                <h4 class="">
                                                    <a href="<?= base_url("product/") . random_string() . "/dp/" . $value['product']['product_id'] ?>?ref=product_list"><?= $value['product']['name'] ?></a>
                                                </h4>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <strong><?= number_to_currency($value['cart']['price'], "INR", 2) ?></strong>
                                            </div>
                                            <div class="col-md-auto col-12 mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">Qty</span>
                                                    <select class="form-control w-auto" name="quantity[]">
                                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                                            <?php if ($i == $value['cart']['qty']) : ?>
                                                                <option selected value="<?= $i ?>"><?= $i ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endif ?>
                                                        <?php endfor ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md col-12 mb-3">
                                                <button type="button" class="btn btn-sm">Delete</button>
                                                <button type="button" class="btn btn-sm">Save For Later</button>
                                                <a href="" class="btn btn-sm">See More Like This</a>

                                                <button type="button" class="btn btn-sm">Share</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-md-auto col-12">
                            <h5>Subtotal (<?= $quantity ?> Items) <strong><?= number_to_currency($subtotal, 'INR', 2) ?></strong></h5>
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