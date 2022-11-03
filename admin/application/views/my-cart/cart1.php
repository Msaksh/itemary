<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title>CuDel cart page</title> -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>cart_assets/img/favicon.ico"> -->
    <link rel="stylesheet" href="<?=base_url()?>cart_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>cart_assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?=base_url('../')?>assets/css/date_time.css" />
    <link rel="stylesheet" href="<?=base_url()?>cart_assets/css/font.awesome.css">
    <!-- Main Style CSS -->

</head>

<body>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?=base_url('my-account')?>">My Account</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 ">
                    <a style="color:red" href="<?=base_url('logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <?php if($this->cart->total()){?>

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="<?=base_url('payment')?>" method="post">
                <div class="row">
                    <input type="hidden" name="id" id="customer_id" value="<?=$list->id?>">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   foreach ( $data =$this->cart->contents() as $value) {?>
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="<?=base_url('assets/images/blog/'.$value['image'])?>"
                                                        alt=""></a></td>

                                            <input type="hidden" name="name" value="<?=$value['name']?>">
                                            <input type="hidden" name="qty" value="<?=$value['qty']?>">
                                            <input type="hidden" name="phone" value="<?=$list->phone?>">

                                            <td class="product_name"><a href="#"><?=$value['name']?></a></td>
                                            <td class="product-price"><?=$value['price']?></td>

                                            <td class="product_quantity"><label></label> <input min="1" max="100"
                                                    value="<?=$value['qty']?>" type="number"
                                                    onchange="updateQty(this,'<?php echo($value['rowid']);?>')"></td>
                                            <td class="product_remove"><a
                                                    href="<?=base_url('cart/delete/'.$value['rowid'])?>"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                            <td class="product_total"><?=$value['subtotal']?></td>
                                        </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <input type="hidden" name="price" value="<?php echo($this->cart->total());?>">
                                <h2><b>Total : </b> <?php echo($this->cart->total());?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

        $date = date('d');
        $k=0;
        $date--;
        $month = date('M');
        ?>
                <input type="hidden" name="date" value="" id="date">
                <input type="hidden" name="time" value="" id="time">
                <div class="container" style="margin-bottom:20px;padding:30px;box-shadow: 2px 4px 8px grey;">
                    <div class="section">
                        <div class="component-wrapper booking-wrapper" data-bind="visible: isVisible()">
                            <div data-bind="i18n: 'Select date of service', attr: {class: 'service-date-label'}"
                                class="service-date-label " style="background: #d52121;color: white;">Select date of
                                service </div>
                            <ul id="navMenus" class="booking-dates" data-bind="foreach: bookingDates">
                                <?php while($k<= 4){ $date=$date+1; $k++;?>
                                <li><span data-bind="text: bdate, click: $parent.addDate"><?php echo($date);?>
                                        <?php echo($month);?></span></li>

                                <?php } ?>

                            </ul>
                            <div class="service-time-label"
                                data-bind="i18n: 'Select service time slot', attr: {class: 'service-time-label'}"
                                style="background: #d52121;color: white;">Select service time slot</div>
                            <ul id="navMenu" class="booking-times" data-bind="foreach: bookingTimes">
                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="7">7:00 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="7">7:30 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="8">8:00 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="8">8:30 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="9">9:00 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="9">9:30 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="10">10:00 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="10">10:30 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="11">11:00 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="11">11:30 AM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="12">12:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="12">12:30 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="13">1:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="13">1:30 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="14">2:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="14">2:30 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="15">3:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="15">3:30 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="16">4:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="16">4:30 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="17">5:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="17">5:30 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="18">6:00 PM</span></li>

                                <li><span
                                        data-bind="text: btime, attr: { 'data-hour': timehour }, click: $parent.addTime"
                                        data-hour="18">6:30 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="coupon_code right">
                                <h3 style="background: #d52121;">Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount"><b>Rs: </b><?php echo($this->cart->total());?></p>
                                    </div>
                                    <a href="#">Calculate Order</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount"><b>Rs: </b><?php echo($this->cart->total());?></p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="#demo" class="btn btn-danger" data-toggle="collapse">Book Now</a>
                                        <div id="demo" class="collapse" style="margin-top: 10px;">
                                            <button name="cash" type="submit"
                                                style="text-align:right;text-decoration:none;color:white"
                                                href="<?=base_url('payment/'.$list->id)?>"
                                                class="btn btn-success btn-sm mb-2" type="">Cash</button>
                                            <button name="online" style="text-align:right"
                                                class="btn btn-success btn-sm mb-2 buy_now"
                                                data-amount="<?php echo($this->cart->total());?>"
                                                type="submit">Online</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--coupon code area end-->
            </form>
        </div>
    </div>

    <div class="shipping_area shipping_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="icon-call-out icons"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><a href="tel:<?=PHONE?>"><?=$list->phone?></a></h3>
                            <p>/ Phone</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="icon-location-pin icons"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><?=$list->address?></h3>
                            <p>/ Address</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col3">
                        <div class="shipping_icone">
                            <i class="icon-envelope icons"></i>
                        </div>
                        <div class="shipping_content">
                            <h3><a href="#"><?=$list->address?></a></h3>
                            <p>/ Email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }

else{ 

  echo('<div style="text-align:center" ><h1  >Cart is empty</h1><br><a  href="http://localhost/cudel-test/">Back to homepage </a></div>');
}
?>
    <script src="<?=base_url()?>cart_assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="<?=base_url()?>cart_assets/js/bootstrap.min.js"></script>

</body>

</html>
<script>
$("#navMenus").on('click', 'li', function() {

    $("#navMenus li.active").removeClass("active");
    var k = $(this).text();
    $(this).addClass("active");
    $('#date').val(k);

});
$("#navMenu").on('click', 'li', function() {
    $("#navMenu li.active").removeClass("active");
    var k = $(this).text();
    $(this).addClass("active");
    $('#time').val(k);
});


function updateQty(obj, rowid) {
    $.get("<?php echo base_url('cart/updateCartItem/');?>", {
            rowid: rowid,
            qty: obj.value
        },
        function(resp) {

            if (resp == 'ok') {
                location.reload();
            } else {
                alert('error');
            }
        });

}
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('body').on('click', '.buy_now', function(e) {
    var totalAmount = $(this).attr("data-amount");
    var product_id = $(this).attr("data-id");

    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var customer_id = document.getElementById("customer_id").value;
    var schedule = date + '  ' + time;
    if (date == '' && time == '') {
        alert('Select date and time');
        return false;
    }
    var options = {
        "key": "rzp_live_PPoWHyGr27vAFU",
        // "key": "rzp_test_8ne7aCfEMt6I2R",
        "amount": (totalAmount * 100), // 2000 paise = INR 20
        "name": "CuDel",
        "description": "Payment",
        "image": "",
        "handler": function(response) {
            $.ajax({
                url: '<?=base_url()?>/payment/payment_proccess',
                type: 'post',
                dataType: 'json',
                data: {
                    razorpay_payment_id: response.razorpay_payment_id,
                    totalAmount: totalAmount,
                    product_id: product_id,
                    schedule: schedule,
                    customer_id: customer_id,
                },
                success: function(msg) {
                    swal("Success!", "Payment done!", "success");
                    window.location.href = '<?=base_url()?>payment/payment_success';
                }
            });

        },

        "theme": {
            "color": "#528FF0"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
});
</script>