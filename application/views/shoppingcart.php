<?php  date_default_timezone_set('Asia/Kolkata'); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?=base_url()?>assets/css/date_time.css" />
<link rel="stylesheet" href="<?=base_url('admin/')?>cart_assets/css/font.awesome.css">
<!-- bread-crumb start here -->

<style type="text/css">
.mycart .listproducts tbody td {
    padding: 5px 10px !important;

}

.pageColor {
    background-color: #38901b !important;
}

.pageHeader {
    color: #38901b !important;
}

.mycart .listproducts thead td {
    background: #38901b !important;
    border-radius: 5px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    opacity: 1;
    display: inline-flex;
}
</style>
<?php
  if(@$_SESSION['success']){?>
<script>
toastr.success('Order Done');
</script>
<?php } ?>
</body>

<body>


    <div class="bread-crumb">
        <img src="<?=base_url()?>assets/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span class="pageHeader">Itemary</span> Cart</h2>
                <ul class="list-inline">
                    <li>
                        <a href="index-2.html">HOME</a>
                    </li>
                    <li>
                        <a href="shoppingcart.html">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Replace order form -->
    <form id="check1" action="<?=base_url()?>checkout" method="post">
        <div class="mycart">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="table-responsive">
                            <table class="table listproducts">
                                <thead>
                                    <tr>
                                        <td class="text-left">List Products</td>
                                        <td class="text-center">Price</td>
                                        <td class="text-center">Quantity</td>
                                        <td class="text-center">Unit</td>
                                        <td class="text-center">Total</td>
                                        <td class="text-center">Delete</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $total_price=0; foreach ($this->cart->contents() as $items){
                                     $total_price=($total_price)+($items['subtotal'])*($items['product_qty']);
                                                ?>
                                    <input type="hidden" name="total" value="<?php echo $total_price?>">
                                    <tr>
                                        <td class="text-left">
                                            <a href="#"><img
                                                    src="<?=base_url('admin/assets/images/product/').$items['image']?>"
                                                    class="img-fluid" alt="img" title="img" /></a>
                                            <div class="name"><?=$items['name']?></div>
                                        </td>
                                        <td class="text-center"><?=$items['product_qty']?> X <?=$items['price']?></td>
                                        <td class="text-center">
                                            <p class="qtypara">

                                                <input type="number" minlength="1" value="<?=$items['product_qty']?>"
                                                    style="width:100px;background:#f1dfdf;border:none;text-align: center;"
                                                    onchange="updateQty(this,'<?php echo($items['rowid']);?>')">

                                        <td><?=$items['product_unit']?></td>

                                        <input type="hidden" name="product_id" value="<?=$items['id']?>" />
                                        <input type="hidden" name="qty" value="<?=$items['product_qty']?>">
                                        <input type="hidden" name="unit" value="<?=$items['product_unit']?>">

                                        </p>
                                        </td>
                                        <td class="text-center">Rs-
                                            <?php echo ($items['subtotal'])*($items['product_qty'])?></td>
                                        <td class="text-center">
                                            <button onclick="delete_cart_item(this,'<?php echo($items['rowid']);?>')"
                                                type="button"><i class="icon_close_alt2"></i></button>
                                        </td>
                                    </tr>
                                    <?php }?>


                                    <tr>
                                        <td colspan="3">Sub Total</td>
                                        <td colspan="2" class="text-right">Rs- <?php echo $total_price?></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>



                    </div>

                    <!--  <div class="cart_submit">
                    <input type="hidden" name="price" value="<?php echo($this->cart->total());?>">
                    <h2><b>Total : </b> <?php echo($this->cart->total());?></h2>
                </div> -->
                    <div class="text-center">
                        <button style="background:hsl(18deg 86% 54%);color:white" type="submit"
                            class="btn-primary">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- bread-crumb end here -->
    <form method="post" id="check" action="<?=base_url()?>checkout" enctype="multipart/form-data">

        <!-- checkout start here -->
        <div class="mycart">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="table-responsive">
                            <table class="table listproducts">
                                <thead>
                                    <tr>
                                        <td class="text-left">List Products</td>
                                        <td class="text-center">Price</td>
                                        <td class="text-center">Quantity</td>
                                        <td class="text-center">Unit</td>
                                        <td class="text-center">Total</td>
                                        <td class="text-center">Delete</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $total_price=0; foreach ($this->cart->contents() as $items){
                                     $total_price=($total_price)+($items['subtotal'])*($items['product_qty']);
                                                ?>
                                    <input type="hidden" name="total" value="<?php echo $total_price?>">
                                    <tr>
                                        <td class="text-left">
                                            <a href="#"><img
                                                    src="<?=base_url('admin/assets/images/product/').$items['image']?>"
                                                    class="img-fluid" alt="img" title="img" /></a>
                                            <div class="name"><?=$items['name']?></div>
                                        </td>
                                        <td class="text-center"><?=$items['product_qty']?> X <?=$items['price']?></td>
                                        <td class="text-center">
                                            <p class="qtypara">

                                                <input type="number" minlength="1" value="<?=$items['product_qty']?>"
                                                    style="width:100px;background:#f1dfdf;border:none;text-align: center;"
                                                    onchange="updateQty(this,'<?php echo($items['rowid']);?>')">

                                        <td><?=$items['product_unit']?></td>

                                        <input type="hidden" name="product_id" value="1" />
                                        </p>
                                        </td>
                                        <td class="text-center">Rs-
                                            <?php echo ($items['subtotal'])*($items['product_qty'])?></td>
                                        <td class="text-center">
                                            <button onclick="delete_cart_item(this,'<?php echo($items['rowid']);?>')"
                                                type="button"><i class="icon_close_alt2"></i></button>
                                        </td>
                                    </tr>
                                    <?php }?>


                                    <tr>
                                        <td colspan="3">Sub Total</td>
                                        <td colspan="2" class="text-right">Rs- <?php echo $total_price?></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>

                        <b>Other Options :</b><span class="text-danger">Use this option, when your product not in the
                            product list</span><br> <input type="text" class="form-group w-50" name=""
                            placeholder="Enter product name and quantity">

                    </div>
                    <div class="col-sm-12">
                        <div class="buttons">
                            <button onclick="clear_cart()" class="btn-primary"
                                style="background:hsl(18deg 86% 54%);color:white">Clear shopping cart</button>
                            <!-- <button class="btn-primary">update shopping cart</button> -->
                            <a style="background:hsl(18deg 86% 54%);color:white"
                                class="btn-primary float-right hover_me" href="<?=base_url()?>">continue
                                shopping</a>
                        </div>
                    </div>
                    <!--  <div class="cart_submit">
                    <input type="hidden" name="price" value="<?php echo($this->cart->total());?>">
                    <h2><b>Total : </b> <?php echo($this->cart->total());?></h2>
                </div> -->
                </div>
            </div>
        </div>
        <?php

$date = date('d M');
$k=0;
        // $date--;
$month = date('M');
?>
        <input type="hidden" name="date" value="" id="date">
        <input type="hidden" name="time" value="" id="time">
        <div class="container" style="margin-bottom:20px;padding:30px;box-shadow: 2px 4px 8px grey;">
            <div class="section">
                <div class="component-wrapper booking-wrapper" data-bind="visible: isVisible()">
                    <div data-bind="i18n: 'Select date of service', attr: {class: 'service-date-label'}"
                        class="service-date-label pageColor " style="background: #d52121;color: white;">Select date of
                        service </div>


                    <ul id="navMenus" id="day" class="booking-dates" data-bind="foreach: bookingDates">
                        <?php while($k<2){ $date=date('d M', strtotime(date('d-m-yy') . $k.' day')); $k++;?>
                        <li><span data-bind="text: bdate, click: $parent.addDate"><?php echo($date);?></span></li>
                        <?php }
       ?>

                    </ul>
                </div>

                <div class="service-time-label pageColor"
                    data-bind="i18n: 'Select service time slot', attr: {class: 'service-time-label'}"
                    style="background: #d52121;color: white;">Select service time slot</div>

                <ul id="navMenu" class="booking-times">
                    <?php
     $time = date('H')+2;
     $day=date('d');

     $r=1;

     $current_date=date('d');
     @$selected_date=$_COOKIE['day'];
     if($current_date==$selected_date){
                if($time<=9){    // this code for when time  greater ho  9<current time  se       
                  $time=9;
                  while($time<=18){
                    $t=$time>12?($time-12):$time;
                    $a=$time>12?' PM':' AM';
                    if($r==1){ ?>
                    <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                    <?php 
                     $r++; 
                   }
                   else{?>
                    <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                    <?php } ?>

                    <li><span data-hour="<?=$t.':30'.$a?>"><?=$t.':30'.$a?> </span></li>

                    <?php $time++; } 
                } 
                  else{
                    $time=date('H')+2;
                      while($time<=18){
                        $t=$time>12?($time-12):$time;
                        $a=$time>12?' PM':' AM';
                            if($r==1){ ?>
                    <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li><?php $r++; 
                           }
                       else{?>
                    <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                    <?php } ?>
                    <li><span data-hour="<?=$t.':30'.$a?>"><?=$t.':30'.$a?> </span></li>
                    <?php $time++; 
                      } 
                }

             if($current_date<$selected_date){ // this code for when time  greater ho  9>current time  se
               $time=date('H')+2;
               while($time<=18){
                 $t=$time<=12?$time:$time-12;
                 $a=$time>12?' PM':' AM';

                 if($r==1){ ?>

                    <li><span data-hour="<?=$time.':00'?>"><?=$t.':00'.$a?> </span></li>
                    <?php 
                   $r++; 
                 }
                 else{?>
                    <li><span data-hour="9"><?=$t.':00'.$a?> </span></li>
                    <?php } ?>

                    <li><span data-hour="9"><?=$t.':30'.$a?> </span></li>

                    <?php $time++; }
                if($time>18){?>
                    <h3>Slots not available today </h3>

                    <?php }

              }
            }
            else{

                // when  customer selected next day date
              $time=9;

                     if($time<=9){    // this code for when time  greater ho  9<current time  se       
                      $time=9;
                      while($time<=18){
                        $t=$time>12?($time-12):$time;
                        $a=$time>12?' PM':' AM';
                        if($r==1){ ?>
                    <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                    <?php 
                         $r++; 
                       }
                       else{?>
                    <li><span data-hour="<?=$t.':00'.$a?>"><?=$t.':00'.$a?> </span></li>
                    <?php } ?>

                    <li><span data-hour="<?=$t.':30'.$a?>"><?=$t.':30'.$a?> </span></li>

                    <?php $time++; } }
                    }

                    ?>

                </ul>
            </div>
        </div>
        </div>
        <?php  
  $where=[
    'id'=> $this->session->userdata('customer')
    // 'id'=> '4'
  ];
  $customer=$this->app_model->select_one('item_customer',$where);

  $where=[
    'pincode' =>$customer->pincode,
    'status' =>'A'
  ];

$isPincode =$this->app_model->select_one('item_pincode',$where);
?>

        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-8">
                    <div class="cartable">
                        <h5>SHIPPING DETAILS</h5>
                        <!-- <p>Enter your destination to get a shipping estimade</p> -->
                        <form method="post" id="update" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group">
                                <label>Name *</label>
                                <input name="name" placeholder="Enter name" value="<?=$customer->name?>" id="name"
                                    class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input name="email" placeholder="Enter email" value="<?=$customer->email?>" id="email"
                                    class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile *</label>
                                <input name="mobile" placeholder="Enter mobile no" value="<?=$customer->mobile?>"
                                    id="mobile" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Address *</label>
                                <input name="address" placeholder="Enter delivary address"
                                    value="<?=$customer->address?>" id="address" class="form-control" type="text"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Address type *</label>
                                <input name="addresstype" value="<?=$customer->address_type?>" placeholder="Home/office"
                                    id="addresstype" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Pincode *</label>
                                <input name="pincode" placeholder="Enter pincode" value="<?=$customer->pincode?>"
                                    id="pincode" class="form-control" type="text" required>
                            </div>
                            <input style="background:hsl(18deg 86% 54%);color:white" type="button" onclick="update()"
                                class="btn-primary" value="Update" />
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cartable cart-total">
                        <h5>Cart Total</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-left">Shipping</td>
                                    <td class="text-right">Rs: 50.00</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Total</td>
                                    <td class="text-right">Rs: <?php echo $total_price?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Sub Total</td>
                                    <td class="text-right">Rs: <?php echo $total_price+50?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php if($isPincode){?>
                        <div class="text-center">
                            <button style="background:hsl(18deg 86% 54%);color:white" type="submit"
                                class="btn-primary">Place Order</button>
                        </div>
                        <?php } else{?>
                        <div class="text-center">
                            <span class="text-danger">Service not available . Please check your pincode</span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </form>
    <!-- for  adding 	qty  -->
    <script src="<?=base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/internal.js"></script>


    <script type="text/javascript">
    function updateQty(obj, rowid) {
        var weight = obj.value;
        if (weight > 25) {
            alert('cart out of weight');
            $('.table-responsive').load(window.location.href + ' .table-responsive');
            return false;
        }
        $.get("<?php echo base_url('cart/updateCartItem/');?>", {
                rowid: rowid,
                qty: obj.value
            },
            function(resp) {
                if (resp == 1) {
                    toastr.info("Cart updated successfully");
                    $('.table-responsive').load(window.location.href + ' .table-responsive');
                    $('.cart').load(window.location.href + ' .cart');
                } else {
                    toastr.error("Something went wrong");
                }
            });

    }

    function delete_cart_item(obj, rowid) {
        $.get("<?php echo base_url('cart/delete_cart_item/');?>", {
                rowid: rowid,
                qty: obj.value
            },
            function(resp) {
                if (resp == 'ok') {
                    toastr.error("Product delete successfully");
                    $('.table-responsive').load(window.location.href + ' .table-responsive');
                    $('.cart').load(window.location.href + ' .cart');
                } else {
                    alert('error');
                }
            });

    };


    function clear_cart() {
        <?php ?>
        toastr.error("Empty cart successfully");
        $('.table-responsive').load(window.location.href + ' .table-responsive');
    }
    </script>

    <!-- <script src="<?=base_url('admin/')?>cart_assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="<?=base_url('admin/')?>cart_assets/js/bootstrap.min.js"></script> -->

</body>

</html>
<script>
$("#navMenus").on('click', 'li', function() {
    $("#navMenus li.active").removeClass("active");
    var k = $(this).text();
    $(this).addClass("active");
    localStorage.setItem("date", k);
    let result = k.slice(0, 2);
    document.cookie = "day=" + result;
    var date = localStorage.getItem('date');
    $(date).addClass("active");
    $('#date').val(k);
    var date = localStorage.getItem("date");
    $('.booking-times').load(window.location.href + ' .booking-times');
    location.href = "#booking-times";

});
$("#navMenu").on('click', 'li', function() {
    $("#navMenu li.active").removeClass("active");
    var k = $(this).text();
    var date = localStorage.getItem('date');
    $('#date').val(date);
    $(this).addClass("active");
    $('#time').val(k);
});

function update() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var mobile = document.getElementById('mobile').value;
    var address = document.getElementById('address').value;
    var addresstype = document.getElementById('addresstype').value;
    var pincode = document.getElementById('pincode').value;
    var cart = '0';
    var check = '0';

    $.ajax({
        url: '<?=base_url()?>update',
        method: 'post',
        data: {
            name: name,
            email: email,
            mobile: mobile,
            address: address,
            addresstype: addresstype,
            pincode: pincode,
            cart: cart,
            check: check
        },
        success: function(res) {
            if (res == 1) {
                toastr.success("Update successfully");
                $('.cart-total').load(window.location.href + ' .cart-total');

            } else {
                toastr.error("Something went wrong");
            }
        }
    })
}

$(document).ready(function() {
    var order_id = '';
    var order_id = '<?php echo @$_COOKIE["rep_order_id"];?>';
    if (order_id != null) {
        document.getElementById('check1').style.display = "none";

    } else {
        document.getElementById('check').style.display = "none";

    }
});
</script>