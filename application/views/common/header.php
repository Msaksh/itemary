<!--top start here -->

<!-- <div class="top">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">

                <ul class="list-inline float-left icon icons">
                    <li>
                        <a href="<?=base_url()?>">

                            <img class="img-fluid logochange"
                                src="<?=base_url()?>assets/images/logos/itemary-logo-wbg.png" alt="logo" title="logo" />

                        </a>
                    </li>
                </ul>

                <ul class="list-inline float-right  icons">

                    <?php if(!$this->session->userdata('customer')){?>

                    <li class="dropdown login">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_profile"></i> My

                            Account</a>

                        <ul class="dropdown-menu">

                            <li>

                                <button type="button" class="fac">Facebook</button>

                                <button type="button" class="go">Google+</button>

                            </li>

                            <li>

                                <a href="#"><i class="icon_profile"></i>My Account</a>

                            </li>

                            <li>

                                <a href="#"><i class="icon_archive"></i>My Orders</a>

                            </li>

                            <li class="des text-center">If you are a new user</li>

                            <li class="text-center">

                                <a href="#">Register Now</a>

                            </li>

                            <li>

                                <button class="btn" type="button"
                                    onclick="location.href='<?=base_url()?>cart'">Login</button>

                            </li>

                        </ul>

                    </li> <?php } else {?>

                    <li><a href="<?=base_url()?>admin/login/logout" class="btn btn-danger"
                            style="color:white">Logout</a></li>

                    <?php }?>

                    <li class="dropdown cart">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_cart"></i>Cart <sup>

                                <label style="color:red">(<?php echo($this->cart->total_items())?>)</label></sup></a>

                        <ul class="dropdown-menu">

                            <li>

                                <table class="table">

                                    <tbody>

                                        <?php 
                                       $total_price=0;
                                        foreach ($this->cart->contents() as $items){
                                             $total_price=($total_price)+($items['subtotal'])*($items['product_qty']);

											$rowid=$items['rowid'];

											?>

                                        <tr>

                                            <td class="text-center">

                                                <img src="<?=base_url('admin/assets/images/product/').$items['image']?>"
                                                    class="img-fluid" alt="img" title="img" />

                                            </td>

                                            <td class="text-left">

                                                <a href="#"><?=$items['name']?></a>

                                                <p><?=$items['product_qty']?> X <?=$items['price']?></p>

                                            </td>

                                            <td class="text-center">

                                                <button
                                                    onclick="delete_cart_item(this,'<?php echo($items['rowid']);?>')"
                                                    type="button" title="Remove" class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash"></i></button>

                                            </td>

                                        </tr>

                                        <?php } ?>



                                        <tr>

                                            <td class="text-left" colspan="3">

                                                <h4><i class="icofont icofont-ui-delete"></i> Clear your cart <span
                                                        class="text-right">Rs- <?php echo $total_price?></span>

                                                </h4>

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                                <div class="buttons">

                                   

                                    <button class="btn-primary" type="button" onclick="location.href='cart'"><i
                                            class="icon_box-checked"></i> Checkout</button>

                                </div>

                            </li>

                        </ul>

                    </li>

                    <li>

                        <ul class="list-inline social">

                            <li>

                                <a href="https://www.facebook.com/itemary" target="_blank">

                                    <i class="social_facebook"></i>

                                </a>

                            </li>

                            <li>

                                <a href="https://www.instagram.com/__itemary/?hl=en" target="_blank">

                                    <i class="social_instagram"></i>

                                </a>

                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</div> -->

<!--top end here -->

<!-- <style>
@media screen and (max-width:575px) {
    .my-cart-button {
        display: none !important;
    }
</style> -->



<!-- header start here -->
<header>

    <div class="container">

        <div class="row" style="justify-content: center;">

            <div class="col-md-10 col-sm-7 col-lg-10 col-xs-12">
                <!-- menu start here -->
                <div id="menu">
                    <nav class="navbar navbar-expand-sm">
                        <span class="menutext visible-xs">
                            <div id="logo">

                                <a href="<?=base_url()?>">

                                    <img class="img-fluid logochange"
                                        src="<?=base_url()?>assets/images/logos/itemary-logo-wbg.png" alt="logo"
                                        title="logo" />

                                </a>

                            </div>
                        </span>
                        <div class="top d-lg-none">

                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">



                                        <ul class="list-inline float-right  icons">

                                            <?php if(!$this->session->userdata('customer')){?>

                                            <?php } else {?>

                                            <li><a href="<?=base_url()?>admin/login/logout" class="btn btn-danger"
                                                    style="color:white">Logout</a></li>

                                            <?php }?>

                                            <li class="dropdown cart">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                        class="icon_cart"></i>Cart <sup>

                                                        <label
                                                            style="color:red">(<?php echo($this->cart->total_items())?>)</label></sup></a>

                                                <ul class="dropdown-menu">

                                                    <li>

                                                        <table class="table">

                                                            <tbody>

                                                                <?php 
                                       $total_price=0;
                                        foreach ($this->cart->contents() as $items){
                                             $total_price=($total_price)+($items['subtotal'])*($items['product_qty']);

											$rowid=$items['rowid'];

											?>

                                                                <tr>

                                                                    <td class="text-center">

                                                                        <img src="<?=base_url('admin/assets/images/product/').$items['image']?>"
                                                                            class="img-fluid" alt="img" title="img" />

                                                                    </td>

                                                                    <td class="text-left">

                                                                        <a href="#"><?=$items['name']?></a>

                                                                        <p><?=$items['product_qty']?> X
                                                                            <?=$items['price']?></p>

                                                                    </td>

                                                                    <td class="text-center">

                                                                        <button
                                                                            onclick="delete_cart_item(this,'<?php echo($items['rowid']);?>')"
                                                                            type="button" title="Remove"
                                                                            class="btn btn-danger btn-xs"><i
                                                                                class="fa fa-trash"></i></button>

                                                                    </td>

                                                                </tr>

                                                                <?php } ?>



                                                                <tr>

                                                                    <td class="text-left" colspan="3">

                                                                        <h4><i class="icofont icofont-ui-delete"></i>
                                                                            Clear your cart <span class="text-right">Rs-
                                                                                <?php echo $total_price?></span>

                                                                        </h4>

                                                                    </td>

                                                                </tr>

                                                            </tbody>

                                                        </table>

                                                        <div class="buttons">

                                                            <!-- <button class="btn-primary" type="button"

                                        onclick="location.href='shoppingcart.html'"><i class="icon_cart"></i> View

                                        Cart</button> -->

                                                            <button class="btn-primary" type="button"
                                                                onclick="location.href='cart'"><i
                                                                    class="icon_box-checked"></i> Checkout</button>

                                                        </div>

                                                    </li>

                                                </ul>

                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain"
                            aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="fa fa-bars" aria-hidden="true"></i>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse padd0" id="navbarmain">
                            <ul class="nav navbar-nav float-right">
                                <li class="dropdown topheading">
                                    <a href="<?=base_url()?>vegetable">Vegetables</a>
                                </li>

                                <li class="dropdown topheading">
                                    <a href="<?=base_url()?>fruits">Fruits</a>
                                </li>

                                <li class="dropdown topheading">
                                    <a href="<?=base_url()?>breakfast-essentials">Breakfast Essentials</a>
                                </li>
                                <!-- <li>
                                    <a href="<?=base_url()?>about">About us</a>
                                </li> -->
                                <li class="dropdown topheading">
                                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a> -->
                                    <div class="dropdown-menu">
                                        <div class="dropdown-inner">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="<?=base_url()?>blog">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>blogdetail">Blog Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>contact">Contact us</a>
                                </li>


                            </ul>



                        </div>

                        <div class="top my-cart-button ">

                            <div class="container ">

                                <div class="row ">

                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">



                                        <ul class="list-inline float-right  icons">

                                            <?php if(!$this->session->userdata('customer')){?>

                                            <?php } else {?>

                                            <li><a href="<?=base_url()?>admin/login/logout" class="btn btn-danger"
                                                    style="color:white">Logout</a></li>

                                            <?php }?>

                                            <li class="dropdown cart">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                        class="icon_cart"></i>Cart <sup>

                                                        <label
                                                            style="color:red">(<?php echo($this->cart->total_items())?>)</label></sup></a>

                                                <ul class="dropdown-menu">

                                                    <li>

                                                        <table class="table">

                                                            <tbody>

                                                                <?php 
                                       $total_price=0;
                                        foreach ($this->cart->contents() as $items){
                                             $total_price=($total_price)+($items['subtotal'])*($items['product_qty']);

											$rowid=$items['rowid'];

											?>

                                                                <tr>

                                                                    <td class="text-center">

                                                                        <img src="<?=base_url('admin/assets/images/product/').$items['image']?>"
                                                                            class="img-fluid" alt="img" title="img" />

                                                                    </td>

                                                                    <td class="text-left">

                                                                        <a href="#"><?=$items['name']?></a>

                                                                        <p><?=$items['product_qty']?> X
                                                                            <?=$items['price']?></p>

                                                                    </td>

                                                                    <td class="text-center">

                                                                        <button
                                                                            onclick="delete_cart_item(this,'<?php echo($items['rowid']);?>')"
                                                                            type="button" title="Remove"
                                                                            class="btn btn-danger btn-xs"><i
                                                                                class="fa fa-trash"></i></button>

                                                                    </td>

                                                                </tr>

                                                                <?php } ?>



                                                                <tr>

                                                                    <td class="text-left" colspan="3">

                                                                        <h4><i class="icofont icofont-ui-delete"></i>
                                                                            Clear your cart <span class="text-right">Rs-
                                                                                <?php echo $total_price?></span>

                                                                        </h4>

                                                                    </td>

                                                                </tr>

                                                            </tbody>

                                                        </table>

                                                        <div class="buttons">

                                                            <!-- <button class="btn-primary" type="button"

                                        onclick="location.href='shoppingcart.html'"><i class="icon_cart"></i> View

                                        Cart</button> -->

                                                            <button class="btn-primary" type="button"
                                                                onclick="location.href='cart'"><i
                                                                    class="icon_box-checked"></i> Checkout</button>

                                                        </div>

                                                    </li>

                                                </ul>

                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </nav>
                </div>
            </div>

            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-12">

                <div id="srch" class="input-group">

                    <input type="text" name="search" value="search" placeholder="search"
                        class="form-control input-lg" />

                    <span class="input-group-btn">

                        <button type="button" class="btn btn-default btn-lg"><i class="icon_search"></i></button>

                    </span>

                </div>

            </div>

        </div>

    </div>

</header>

<div class="icon-bar" style="background:hsl(18deg 86% 54%);">

    <a href="<?=base_url()?>cart">

        <i class="fa fa-shopping-cart"></i><br />



    </a>

</div>

<!-- header end here -->



<script type="text/javascript">
function delete_cart_item(obj, rowid) {

    $.get("<?php echo base_url('cart/delete_cart_item/');?>", {

            rowid: rowid,

            qty: obj.value

        },

        function(resp) {

            if (resp == 1) {

                toastr.error("Product delete successfully");

                $('.table-responsive').load(window.location.href + ' .table-responsive');

                $('.cart').load(window.location.href + ' .cart');

            } else {

                alert('error');

            }

        });



}
</script>