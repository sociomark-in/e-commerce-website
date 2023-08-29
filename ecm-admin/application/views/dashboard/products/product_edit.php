<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <title><?= $page['title'] . " • " . APP_NAME ?></title>
</head>

<body>
    <header>
        <?php $this->load->view('components/dashboard/_nav') ?>
    </header>
    <main>
        <section class="my-4">
            <?= form_open_multipart("", ['id' => 'fileDrop']) ?>
            <div class="container">
                <?php
                $data = [
                    'property' => [
                        'class' => 'sticky'
                    ],
                ];
                $this->load->view('components/dashboard/_page_title', $data)
                ?>
                <div class="row m-0">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header"><b>Product Information</b></div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="summernote" class="form-label">Description</label>
                                    <textarea class="form-control" rows="10" id="summernote"></textarea>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>
                            </div>

                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header"><b>Product Gallery</b></div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="file" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header"><b>Product Pricing</b></div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                                <input type="text" class="form-control" placeholder="00.00" aria-label="" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Sale Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                                <input type="text" class="form-control" placeholder="00.00" aria-label="" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" checked class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Charge Tax on this Product</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Cost per Item</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                                <input type="text" class="form-control" placeholder="00.00" aria-label="" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Profit</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="00.00" aria-label="" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">&percnt;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Margin</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="00.00" aria-label="" aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">&percnt;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header">
                                <b>Inventory</b>
                                <div class="my-2 form-check">
                                    <input type="checkbox" checked class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Track Quantity</label>
                                </div>
                                <b>Quantity</b>
                            </div>
                            <div class="card-body">
                                <div class="row m-0 justify-content-between align-items-center">
                                    <div class="col-md-auto"></div>
                                    <div class="col-md-auto"></div>
                                    <div class="col-12">
                                        <div class="d-flex gap-2">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Continue Selling when Out of Stock
                                                <div class="form-text">
                                                    This won't affect <a href="">Shopify POS</a>. Staff will see a warning, but can complete sales when available inventory reaches zero and below.
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            This product has a SKU or barcode
                                        </label>
                                        <div class="sku-unit"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header"><b>Shipping</b></div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="my-2 mb-3">
                                            <input type="checkbox" checked class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                This product requires shipping
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Weight</label>
                                            <div class="row m-0">
                                                <div class="col-md col-12 p-0">
                                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="col-md-auto col-12 p-0">
                                                    <select name="" id="" class="form-control">
                                                        <option value="KG" selected>Kg</option>
                                                        <option value="Pounds">Pounds</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="">
                                        <b>Add Customs Details</b>
                                        <div class="form-text">
                                            Printed on customs forms or shipping labels for international orders.
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Country/Region of origin</label>
                                            <?php
                                            $data = [
                                                'tooltip' => [
                                                    'message' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium exercitationem, nesciunt sapiente consequuntur ipsa ratione! Laudantium alias quasi maiores modi!",
                                                    'placement' => 'right'
                                                ]
                                            ];
                                            $this->load->view('components/dashboard/_tooltip', $data) ?>
                                            <select class="form-control">
                                                <option value="" selected></option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">HS (Harmonized System) code</label>
                                            <div class="input-group">
                                                <span class="input-group-text">Search</span>
                                                <input type="search" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-text">
                                                Learn more about <a href="">adding HS codes</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header">
                                <b>Variants</b>
                            </div>
                            <div class="card-body">
                                <a class="py-2 d-block" href="">+ Add options like size or color</a>
                            </div>
                            <ul class="list-group list-group-flush">

                                <template>
                                    <li class="list-group-item">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Option name</label>
                                            <select name="" class="form-control">
                                                <option value="">Size</option>
                                                <option value="">Color</option>
                                                <option value="">Material</option>
                                                <option value="">Style</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Option Values</label>
                                            <input type="text" placeholder="Value" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </li>
                                </template>
                                <li class="list-group-item">
                                    <a class="d-block" href="">+ Add another option</a>
                                </li>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                <b>Publish Status & Visibility</b>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                    <select name="" class="form-control" id="">
                                        <option value="Active" selected>Active</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Visibility</label>
                                    <select name="" class="form-control" id="">
                                        <option value="Active" selected>Public</option>
                                        <option value="Draft">Hidden</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header">
                                <b>Publish Schedule</b>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Publish Date & Time</label>
                                    <input type="datetime" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header">
                                <b>Product Organization</b>
                                <?php
                                $data = [
                                    'tooltip' => [
                                        'message' => "Learn More",
                                        'placement' => 'right',
                                        'link' => ""
                                    ]
                                ];
                                $this->load->view('components/dashboard/_tooltip', $data) ?>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Category</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Type</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Vendor</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Collection</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tags</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>

                        </div>
                        <div class="card panel mb-3">
                            <div class="card-header">
                                <b>Search Engine Listing</b>
                                <div class="form-text">Add a title and description to see how this product might appear in a search engine listing</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Page Title</label>
                                    <input type="text" class="form-control" maxlength="70" id="exampleInputPassword1">
                                    <div class="form-text">
                                        0 of 70 characters used
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="exampleInputPassword1" maxlength="320"></textarea>
                                    <div class="form-text">
                                        0 of 320 characters used
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Url Handle</label>
                                    <input type="url" class="form-control" placeholder="https://www.example.com/page">
                                </div>
                            </div>
                        </div>
                        <!--                         
                        <div class="card panel mb-3">
                            <div class="card-header"></div>
                            <div class="card-body"></div>

                        </div> -->
                    </div>
                    <div class="col-12">
                        <button type="reset" class="btn btn-secondary">Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
            </form>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/dashboard/_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.fileDrop = { // camelized version of the `id`
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };
    </script>
</body>

</html>