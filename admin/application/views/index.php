<!DOCTYPE html>
<html lang="en">

<head>
    <title>Itemary | Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css"
        href="<?=base_url()?>assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="<?=base_url()?>assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
    <?php $this->load->view('common/loader'); ?>
    <div class="wrapper">
        <?php $this->load->view('common/header'); ?>

        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <!-- Main content starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <!-- 4-blocks row start -->
                <div class="row dashboard-header">
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>All Products</span>
                            <h2 class="dashboard-total-products"><?=@$all_products?></h2>
                            <span class="label label-warning">Our</span>All Products
                            <div class="side-box">
                                <i class=" fa fa-product-hunt text-warning-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Today Orders</span>
                            <h2 class="dashboard-total-products"><?=@$today_orders?></h2>
                            <span class="label label-primary">Daily</span>Order
                            <div class="side-box ">
                                <i class="ti-gift text-primary-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Month Orders</span>
                            <h2 class="dashboard-total-products"><span><?=@$monthly_orders?></span></h2>
                            <span class="label label-success">Monthly</span>Order
                            <div class="side-box">
                                <i class="ti-gift text-primary-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product" style="height: 84px!important;">
                            <span>Monthly Earnings </span>
                            <!-- <h2 class="dashboard-total-products">Rs - <span><?=@$monthly_earnings?></span></h2> -->
                            <span class="label label-danger">Monthly</span>Orders
                            <div class="side-box">
                                <i class="ti-rocket text-danger-color"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4-blocks row end -->

                <!-- 2-1 block start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table m-b-0 photo-table">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Payment Mode</th>
                                                <th>Delivery Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($orders as $order) {

                                    $where = [
                                       'id' => $order->customer_id
                                    ];
                                    $customer = $this->appmodel->select_one('item_customer',$where);
                                    ?>
                                            <tr>
                                                <th><?php echo(@$customer->name)?></th>
                                                <td><?=@$customer->email?></td>

                                                <td><a href="tel:<?=@$customer->phone?>"><?=@$customer->mobile?></a>
                                                </td>
                                                <td><?=$order->payment_mode?></td>
                                                <td><?=$order->delivery_time?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- 2-1 block end -->
            </div>
            <!-- Main content ends -->
        </div>
    </div>


    <!-- Required Jqurey -->
    <script src="<?=base_url()?>assets/plugins/Jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="<?=base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?=base_url()?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="<?=base_url()?>assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="<?=base_url()?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Sparkline charts -->
    <script src="<?=base_url()?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="<?=base_url()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- Echart js -->
    <script src="<?=base_url()?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <script src="../../code.highcharts.com/highcharts.js"></script>
    <script src="../../code.highcharts.com/modules/exporting.js"></script>
    <script src="../../code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/main.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/pages/elements.js"></script>
    <script src="<?=base_url()?>assets/js/menu.min.js"></script>
    <script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function() {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });
    </script>

</body>

</html>