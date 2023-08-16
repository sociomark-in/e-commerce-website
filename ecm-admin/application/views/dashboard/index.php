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
                <div class="row m-0">
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-success">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted">TOTAL SELLERS</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-success"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-warning">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted">TOTAL SELLERS</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-warning"> <i class="fa-solid fa-arrow-up"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-danger">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted">TOTAL SELLERS</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small><span class="badge badge-danger"> <i class="fa-solid fa-arrow-down"></i>&nbsp;+18.30&percnt;</span>&nbsp;than last month</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="panel panel-brief panel-brief-secondary">
                                    <div class="row m-0 g-0 flex-row-reverse justify-content-between">
                                        <div class="col-md-auto col-12">
                                            <div class="icon">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-12">
                                            <p class="text-muted">TOTAL SELLERS</p>
                                            <h3>559.25k</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted">
                                                <small>Lorem ipsum dolor sit.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Sales Report
                            </div>
                            <div class="card-body"></div>
                            <div class="card-footer">
                                <a href="link">View Detailed Report</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Sales Report
                            </div>
                            <div class="card-body"></div>
                            <div class="card-footer">
                                <a href="link">View Detailed Report</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Sales Report
                            </div>
                            <div class="card-body"></div>
                            <div class="card-footer">
                                <a href="link">View Detailed Report</a>
                            </div>
                        </div>
                    </div>
                    <!-- Comparative Line Chart of Revenue -->
                    <div class="col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Revenue
                            </div>
                            <div class="card-body">
                                <div class="row m-0">
                                    <div class="col-lg-8 col-md-6">
                                        <div id="revenue" style="height: 500px;"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Customer Satisfaction -->
                    <div class="col-xl-3 col-md-4 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Customer Satisfaction
                            </div>
                            <div class="card-body">
                                <div id="customer_satisfaction" style="height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Stock Report -->
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Stock Report
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
                                        <?php for ($i = 0; $i < 20; $i++) : ?>
                                            <tr>
                                                <td>
                                                    <a href="<?= base_url('product/23784632784') ?>">#23784632784</a>
                                                </td>
                                                <td>
                                                    <a class="nav-link" href="">Product - <?= $i ?></a>
                                                </td>
                                                <td>&dollar;<?= $i * 34 ?></td>
                                                <td><?= $i * 34 ?></td>
                                                <td>
                                                    <span class="badge badge-secondary">New</span>
                                                </td>
                                                <td><?= $i * 34 ?></td>
                                            </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Orders -->
                    <div class="col-12">
                        <div class="card panel mb-3">
                            <div class="card-header">
                                Recent Orders
                            </div>
                            <div class="card-body">
                                <table id="products_table" class="display">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Customer Name</th>
                                            <th>Amount</th>
                                            <th>Order Date</th>
                                            <th>Delivery Date</th>
                                            <th>Vendor</th>
                                            <th>Ratings</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 20; $i++) : ?>
                                            <tr>
                                                <td>
                                                    <a href="<?= base_url('order/23784632784') ?>">#23784632784</a>
                                                </td>
                                                <?php for ($j = 0; $j < 7; $j++) : ?>
                                                    <td>Row 1 Data 1</td>
                                                <?php endfor ?>
                                                <td>
                                                    <span class="badge badge-secondary">New</span>
                                                </td>
                                            </tr>
                                        <?php endfor ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <a class="link" href="<?= base_url("products") ?>">View All Products</a>
                            </div>
                        </div>
                    </div>
                    <!-- Bar Chart  -->
                    <div class="col-md-6">
                        <div class="card panel">
                            <div class="card-header">
                                Chart Example
                            </div>
                            <div class="card-body">
                                <div id="main" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Half Pie Chart -->
                    <div class="col-md-6">
                        <div class="card panel">
                            <div class="card-header">
                                Chart Example
                            </div>
                            <div class="card-body">
                                <div id="halfpie" style="height: 400px;"></div>
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
            $('#stock_report').DataTable();
        });
    </script>
    <?php $this->load->view('components/_charts_js') ?>
    <script>
        var myChart = echarts.init(document.getElementById('main'));

        // Draw the chart
        myChart.setOption({
            tooltip: {},
            xAxis: {
                data: ['shirt', 'cardigan', 'chiffon', 'pants', 'heels', 'socks']
            },
            yAxis: {},
            series: [{
                    name: 'sales',
                    type: 'bar',
                    data: [5, 20, 36, 10, 10, 20]
                },
                {
                    name: 'sales',
                    type: 'bar',
                    data: [5, 10, 26, 20, 30, 2]
                }
            ]
        });

        var myChart1 = echarts.init(document.getElementById('halfpie'));
        var option;
        option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center',
                // doesn't perfectly work with our tricks, disable it
                selectedMode: false
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                center: ['50%', '70%'],
                // adjust the start angle
                startAngle: 180,
                label: {
                    show: true,
                    formatter(param) {
                        // correct the percentage
                        return param.name + ' (' + param.percent * 2 + '%)';
                    }
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    },
                    {
                        // make an record to fill the bottom 50%
                        value: 1048 + 735 + 580 + 484 + 300,
                        itemStyle: {
                            // stop the chart from rendering this piece
                            color: 'none',
                            decal: {
                                symbol: 'none'
                            }
                        },
                        label: {
                            show: false
                        }
                    }
                ]
            }]
        };
        option && myChart1.setOption(option);

        var myChart2 = echarts.init(document.getElementById('revenue'));
        var option;
        option = {
            color: ['#5470c6', '#FF4E28', '#42C212'],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Orders', 'Refunds', 'Earnings']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Orders',
                    type: 'line',
                    stack: 'Total',
                    data: [120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name: 'Refunds',
                    type: 'line',
                    stack: 'Total',
                    data: [220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name: 'Earnings',
                    type: 'line',
                    stack: 'Total',
                    data: [150, 232, 201, 154, 190, 330, 410]
                }
            ]
        };
        option && myChart2.setOption(option);


        var myChart3 = echarts.init(document.getElementById('customer_satisfaction'));
        var option;
        option = {
            color: ['#5470c6', '#FF4E28', '#42C212'],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Orders', 'Refunds', 'Earnings']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Orders',
                    type: 'line',
                    stack: 'Total',
                    data: [120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name: 'Refunds',
                    type: 'line',
                    stack: 'Total',
                    data: [220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name: 'Earnings',
                    type: 'line',
                    stack: 'Total',
                    data: [150, 232, 201, 154, 190, 330, 410]
                }
            ]
        };
        option && myChart3.setOption(option);
    </script>
</body>

</html>