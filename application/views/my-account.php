<!doctype html>

<?php date_default_timezone_set('Asia/Kolkata'); ?>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>My Account</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- CSS 

        ========================= -->

    <!--bootstrap min css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/bootstrap.min.css">

    <!--owl carousel min css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/owl.carousel.min.css">

    <!--slick min css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/slick.css">

    <!--magnific popup min css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/magnific-popup.css">

    <!--font awesome css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/font.awesome.css">

    <!--ionicons css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/ionicons.min.css">

    <!--simple line icons css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/simple-line-icons.css">

    <!--animate css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/animate.css">

    <!--jquery ui min css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/jquery-ui.min.css">

    <!--slinky menu css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/slinky.menu.css">

    <!--plugins css-->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/plugins.css">



    <!-- Main Style CSS -->

    <link rel="stylesheet" href="<?=base_url()?>customer_assets/css/style.css">



    <!--modernizr min js here-->

    <script src="<?=base_url()?>customer_assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!-- my file -->

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

</head>

<body>
    <!--breadcrumbs area start-->

    <?php
        if(@$_SESSION['order_success']){?>
    <script>
    toastr.success("Replacement request successfully submitted");
    </script>
    <?php } ?>


    <div class="breadcrumbs_area">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="breadcrumb_content">

                        <ul>

                            <li><a href="<?=base_url()?>">home</a></li>

                            <li>My account</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--breadcrumbs area end-->

    <!-- my account start  -->

    <section class="main_content_area">

        <div class="container">

            <div class="account_dashboard">

                <div class="row">

                    <div class="col-sm-12 col-md-2 col-lg-2 ">

                        <!-- Nav tabs -->

                        <div class="dashboard_tab_button">

                            <ul role="tablist" class="nav flex-column dashboard-list">

                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>

                                <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>



                                <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a>

                                </li>

                                <li><a href="<?=base_url()?>admin/login/logout" class="nav-link">logout</a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-sm-12 col-md-10 col-lg-10">

                        <!-- Tab panes -->

                        <div class="tab-content dashboard_content">

                            <div class="tab-pane fade show active" id="dashboard">

                                <h3>Dashboard </h3>

                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent

                                        orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                        href="#">Edit your password and account details.</a></p>

                            </div>

                            <div class="tab-pane fade" id="orders">

                                <h3>Orders</h3>

                                <div class="table-responsive">

                                    <table class="table" id="myTable">
                                        <thead>

                                            <tr style="vertical-align: middle;">

                                                <th>Order Id</th>

                                                <th>Product</th>

                                                <th>Qty</th>

                                                <th>Date</th>
                                                <th>Total</th>

                                                <th>Replace</th>

                                                <th>Actions</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php $k='s'; $i=1; foreach ($orders as $order) {

                                                    // print_r($orders);

                                                    $value= $order->order_id;
                                                    
                                                    if($value!=$k){

                                                    

                                                        $k=$order->order_id;

                                                    $where = [

                                                        'id' => $order->product_id

                                                    ];

                                                    $product=$this->app_model->select_one('item_product',$where);

                                                    ?>

                                            <tr style="vertical-align: middle;">

                                                <td><?=@$order->order_id?></td>
                                                <td><?=@$product->name?></td>
                                                <td><?=@$order->product_qty?></td>
                                                <td><?=@$order->created_at?></td>
                                                <td><?=@$order->total?></td>

                                                <?php

                                                // $time = date('Y-m-d H:i:s');
                                                // // $replace=$order->updated_at;
                                                // $replace = date("Y-m-d H:i:s", strtotime($order->updated_at));

                                                //print_r($replace);
                                                        

                                                        $date1 = @$order->created_at;
                                                        $date2 = date('Y-m-d H:i:s');

                                                        $seconds = strtotime($date2) - strtotime($date1);
                                                        $minute = floor($seconds/(60));
                                                        if($minute<=60){ 
                                                            if($order->status=='A' && $order->rep_status=='A'  ){?>
                                                <td><a onclick="replace('<?=$order->id?>')" data-toggle="modal"
                                                        data-target="#exampleModal" data-whatever="@mdo"
                                                        style="color:red" href="">Replace Order</a></td>

                                                <?php }

                                                            else{?>
                                                <td>
                                                    <p>Replacement on progress</p>
                                                    <?php if($order->rep_status== 'A'){?>
                                                    <a onclick="new_order('<?=$order->order_id?>')"
                                                        class="btn btn-primary">New order</a>
                                                    <?php } ?>
                                                </td>
                                                <?php }
                                                     }

                                                     else{ ?>
                                                <td>
                                                    <p>Disabled Replacement</p>
                                                </td>

                                                <?php }?>
                                                <td><a href="#" class="view">view</a></td>

                                            </tr>

                                            <?php }  } ?>



                                        </tbody>

                                    </table>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="account-details">

                                <h3>Account details </h3>

                                <div class="login">

                                    <div class="login_form_container">

                                        <div class="account_login_form">

                                            <form action="<?=base_url()?>update" method="post">

                                                <label>First Name</label>

                                                <input type="text" value="<?=$customers->name?>" name="name">
                                                <label>Email</label>

                                                <input type="text" name="email" value="<?=$customers->email?>">

                                                <label>Mobile</label>

                                                <input type="text" name="mobile" value="<?=$customers->mobile?>">



                                                <label>Address</label>

                                                <input type="text" name="address" value="<?=$customers->address?>">

                                                <label>Address Type</label>

                                                <input type="text" name="addresstype"
                                                    value="<?=$customers->address_type?>">

                                                <label>Pincode</label>

                                                <input type="text" name="pincode" value="<?=$customers->pincode?>">

                                                <input type="hidden" name="check" value="1">
                                                <input type="hidden" name="cart" value="1">







                                                <br>



                                                <div class="">

                                                    <button style="background:green;color:white" type="submit"
                                                        class="btn btn-primary">Update</button>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- my account end   -->

    <!--shipping area start-->

    <div class="shipping_area shipping_padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6">

                    <div class="single_shipping">

                        <div class="shipping_icone">

                            <i class="icon-call-out icons"></i>

                        </div>

                        <div class="shipping_content">

                            <h3><a href="tel:0123456789">Phone</a></h3>

                            <p><?=$customers->mobile?></p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="single_shipping">

                        <div class="shipping_icone">

                            <i class="icon-location-pin icons"></i>

                        </div>

                        <div class="shipping_content">

                            <h3>Address</h3>

                            <p><?=$customers->address?></p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="single_shipping col3">

                        <div class="shipping_icone">

                            <i class="icon-envelope icons"></i>

                        </div>

                        <div class="shipping_content">

                            <h3>Email</h3>

                            <p><?=$customers->email?></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--shipping area end-->
    <!-- JS

    ============================================ -->

    <!--jquery min js-->

    <script src="<?=base_url()?>customer_assets/js/vendor/jquery-3.4.1.min.js"></script>

    <!--popper min js-->

    <script src="<?=base_url()?>customer_assets/js/popper.js"></script>

    <!--bootstrap min js-->

    <script src="<?=base_url()?>customer_assets/js/bootstrap.min.js"></script>

    <!--owl carousel min js-->

    <script src="<?=base_url()?>customer_assets/js/owl.carousel.min.js"></script>

    <!--slick min js-->

    <script src="<?=base_url()?>customer_assets/js/slick.min.js"></script>

    <!--magnific popup min js-->

    <script src="<?=base_url()?>customer_assets/js/jquery.magnific-popup.min.js"></script>

    <!--counterup min js-->

    <script src="<?=base_url()?>customer_assets/js/jquery.counterup.min.js"></script>

    <!--jquery countdown min js-->

    <script src="<?=base_url()?>customer_assets/js/jquery.countdown.js"></script>

    <!--jquery ui min js-->

    <script src="<?=base_url()?>customer_assets/js/jquery.ui.js"></script>

    <!--jquery elevatezoom min js-->

    <script src="<?=base_url()?>customer_assets/js/jquery.elevatezoom.js"></script>

    <!--isotope packaged min js-->

    <script src="<?=base_url()?>customer_assets/js/isotope.pkgd.min.js"></script>

    <!--slinky menu js-->

    <script src="<?=base_url()?>customer_assets/js/slinky.menu.js"></script>
    <!-- Plugins JS -->

    <script src="<?=base_url()?>customer_assets/js/plugins.js"></script>
    <!-- Main JS -->

    <script src="<?=base_url()?>customer_assets/js/main.js"></script>
    <!-- my file -->



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>





</body>

</html>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">New message</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <form id="replace-order11" method="post" action="<?=base_url()?>replace-order">

                    <div class="form-group">

                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="hidden" name="id" id="id-value">

                        <select name="reason" class="form-select" aria-label="Default select example">

                            <option value="" selected>Select your reason</option>

                            <option value="Vegitable is rotten">Vegitable is rotten</option>

                            <option value="2">2</option>

                            <option value="3">3</option>

                        </select>

                    </div>

                    <div class="form-group">

                        <label for="message-text" class="col-form-label">Other:</label>

                        <textarea name="other" placeholder="Write  your reason" class="form-control"
                            id="message-text"></textarea>
                    </div>

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Replace</button>

            </div>

            </form>

        </div>

    </div>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable();
});

$('#replace-order1').submit(function(e) {
    e.preventDefault();
    alert('hhh');

    var name = "krishna";
    var email = 'krishna@gmail.com';
    // var data = new FormData(this);

    $.ajax({
        url: '<?=base_url()?>customer_login/replace_order',
        type: 'post',

        // data: data.serialize(),

        data: {
            name: name,
            email: email
        },

        success: function(res) {



        }

    });





});

function replace(id) {
    document.getElementById('id-value').value = id;

}

function new_order(id) {

    var order_id = id.slice(4);
    document.cookie = "rep_order_id=" + order_id;
    window.location.href = "<?=base_url()?>";

}
</script>