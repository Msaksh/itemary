<style type="text/css">
input::placeholder {
    font-size: 12px;

}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    opacity: 1;
}

.image {
    text-align: center !important;

}

.image a img {
    height: 125px !important;
}
</style>

<div class="slide">
    <div class="slideshow1 owl-carousel">
        <?php  foreach ($banners as $banner) {?>

        <div class="item">
            <img src="<?=base_url('admin/assets/images/banner/'.$banner->image)?>" alt="banner" title="banner"
                class="img-fluid sliderchange" />
        </div>
        <?php } ?>

    </div>
</div>
<!-- slider end here -->

<!-- about start here -->
<div class="abouttt">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <div class="about text-center">
                    <h2>Check Pincode</h2>
                    <div class="input-group form-group pincode">
                        <input onkeypress='return event.charCode>= 48 && event.charCode <= 57' min="1" max="6"
                            id="pincode" onkeyup="check_pincode()" class="form-control" type="text" name="pincode"
                            style="border-color:#ff9900;display: inline;" placeholder="Enter your pincoode" />

                        <div class="input-group-prepend">
                            <span onclick="reset()" class="input-group-text check_pincode"><i
                                    class="fa fa-times fa-1x"></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end here -->
<!-- product start here -->
<div class="product">
    <div class="container">
        <div class="commontop text-center">
            <h4>VEGETABLES</h4>
        </div>

        <div class="row update">
            <?php foreach ($products as $product) {
                    $where = [
                       'id'=> $product->unit_id
                   ];
                   $units=$this->app_model->select_one('item_units_category',$where);
                   ?>
            <form action="" method="post" class="cart-form" style="display: contents!important;">
                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="shop.html">
                                <img src="<?=base_url('admin/assets/images/product/').$product->image?>" alt="image"
                                    title="image" class="img-fluid" />
                            </a>
                            <div class="onhover1">
                                <div class="button-group">
                                    <!-- <button class="btn-icon" type="button"><i class="icon_piechart"></i></button> -->

                                    <button type="submit"><i class="icon_cart_alt "></i></button>

                                    <!-- <button class="btn-icon" type="button"><i class="icon_heart_alt"></i></button> -->
                                </div>
                            </div>
                        </div>
                        <div class="caption text-center">
                            <h4><a href="shop.html"><?=$product->name?></a></h4>
                            <div class="rating form">
                                <input id="p_id" type="hidden" value="<?=$product->id?>" name="id">

                                <!--  <input id="qty" class="form-group product_qty" type="text" name="product_qty"
                                    placeholder="Enter quantity" required> -->

                                <input type="number" id="product_qty_id" name="product_qty" value="1" min="1"
                                    style="width:100px;background:#f1dfdf;border:none;    text-align: center;">


                                <input id="kg" class="unit" type="radio" value="kg" name="product_unit" required>kg


                                <input id="kg" class="unit" type="radio" value="g" name="product_unit" required>g
                            </div>
                            <p class="price"> Rs- <?=$product->price?> /<?=@$product->qty?> <?=$units->name?></p>
                        </div>
                    </div>
                </div>
            </form>

            <?php } ?>

        </div>

    </div>
</div>


<div style="text-align: center;">
    <a href="<?=base_url('vegetable')?>">View More</a>
</div>

<!--  Start Fruits  page -->

<div class="product">
    <div class="container">
        <div class="commontop text-center">
            <h4>FRUITS</h4>
        </div>
        <div class="row update">
            <?php foreach ($fruits as $product) {
                $where = [
                    'id'=> $product->unit_id
                ];
                $units=$this->app_model->select_one('item_units_category',$where);
                ?>
            <form action="" method="post" class="cart-form" style="display: contents!important;">
                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="<?=base_url('fruits')?>">
                                <img src="<?=base_url('admin/assets/images/product/').$product->image?>" alt="image"
                                    title="image" class="img-fluid" />
                            </a>
                            <div class="onhover1">
                                <div class="button-group">
                                    <!-- <button class="btn-icon" type="button"><i class="icon_piechart"></i></button> -->

                                    <button type="submit"><i class="icon_cart_alt "></i></button>

                                    <!-- <button class="btn-icon" type="button"><i class="icon_heart_alt"></i></button> -->
                                </div>
                            </div>
                        </div>
                        <div class="caption text-center">
                            <h4><a href="shop.html"><?=$product->name?></a></h4>
                            <div class="rating form">
                                <input id="p_id" type="hidden" value="<?=$product->id?>" name="id">
                                <input type="number" name="product_qty" value="1" min="1" max="10"
                                    style="width:100px;background:#f1dfdf;border:none;    text-align: center;">


                                <!-- <input id="qty" class="form-group product_qty" type="number" name="product_qty" placeholder="Enter quantity" required> -->

                                <input id="kg" type="hidden" value="kg" name="product_unit">


                                <!-- <input id="kg" type="radio" value="g" name="product_unit" required>g -->
                            </div>
                            <p class="price"> Rs- <?=$product->price?> /<?=@$product->qty?> <?=$units->name?></p>
                        </div>
                    </div>
                </div>
            </form>


            <?php } ?>

        </div>

    </div>
</div>
<div style="text-align: center;">
    <a href="<?=base_url('fruits')?>">View More</a>
</div>
<!-- End fruits section -->

<!-- Start Breakfast Essentials -->

<div class="product">
    <div class="container">
        <div class="commontop text-center">
            <h4>BREAKFAST ESSENTIALS</h4>
        </div>

        <div class="row update">
            <?php foreach ($breakfasts as $product) {
                $where = [
                    'id'=> $product->unit_id
                ];
                $units=$this->app_model->select_one('item_units_category',$where);
                ?>
            <form action="" method="post" class="cart-form" style="display: contents!important;">
                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-4">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="shop.html">
                                <img src="<?=base_url('admin/assets/images/product/').$product->image?>" alt="image"
                                    title="image" class="img-fluid" />
                            </a>
                            <div class="onhover1">
                                <div class="button-group">
                                    <!-- <button class="btn-icon" type="button"><i class="icon_piechart"></i></button> -->

                                    <button type="submit"><i class="icon_cart_alt "></i></button>

                                    <!-- <button class="btn-icon" type="button"><i class="icon_heart_alt"></i></button> -->
                                </div>
                            </div>
                        </div>
                        <div class="caption text-center">
                            <h4><a href="shop.html"><?=$product->name?></a></h4>
                            <div class="rating form">
                                <input id="p_id" type="hidden" value="<?=$product->id?>" name="id">
                                <input id="qty" type="number" name="product_qty" value="1" min="1" max="10"
                                    style="width:100px;background:#f1dfdf;border:none;    text-align: center;">

                                <input id="kg" type="hidden" value="Packet" name="product_unit">

                            </div>
                            <p class="price"> Rs- <?=$product->price?> / <?=@$product->qty?> <?=$units->name?></p>
                        </div>
                    </div>
                </div>
            </form>

            <?php } ?>

        </div>

    </div>
</div>
<div style="text-align: center;">
    <a href="<?=base_url('breakfast-essentials')?>">View More</a>
</div>

<!-- product end here -->

<!-- banner start here -->
<!-- <div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <img src="<?=base_url()?>assets/images/header3/shipping-1.png" class="img-fluid" alt="dis"
                title="dis" />
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <img src="<?=base_url()?>assets/images/header3/shipping-2.png" class="img-fluid" alt="dis"
                title="dis" />
            </div>
        </div>
    </div>
</div> -->
<!-- banner end here -->

<!-- bestdeal start here -->
<div class="container">
    <div class="commontop text-center">
        <!-- <h4>...</h4> -->
    </div>

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bestdeal">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
                <img src="<?=base_url()?>assets/images/header3/best-deal.png" alt="image" title="image"
                    class="img-fluid" />
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
                <div class="box">
                    <h3>Itemary</h3>
                    <p>...</p>
                    <ul class="list-inline">
                        <li>
                            <div class="bg">1K+</div>value1
                        </li>

                        <li>
                            <div class="bg">3K+</div>value 2
                        </li>

                        <li>
                            <div class="bg">50</div>value 3
                        </li>

                    </ul>
                    <hr>
                    <button type="button">Shop now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bestdeal end here -->

<!-- featured product start here -->

<!-- carousel10 start here -->

<!-- carousel10 end here -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
function check_pincode() {
    var pin = document.getElementById('pincode').value;
    let length = pin.length;
    $.ajax({
        url: "<?=base_url()?>customer/check_pin_code",
        method: "post",
        data: {
            pin: pin
        },
        success: function(res) {
            if (res == 1) {
                var sms = "Service available in your area";
                document.getElementById("pincode").value = sms;
                document.getElementById("pincode").style.color = "green";
            } else {
                if (length == 6) {
                    var sms = 'Service not available in your area';
                    document.getElementById("pincode").value = sms;
                    document.getElementById("pincode").style.color = "red";
                }
            }
        }
    })
};

function reset() {
    $('#pincode').val('');
};

$('.cart-form').submit(function(event) {
    event.preventDefault();

    var form = $(this);
    qty = $('input[name=product_qty]').val();
    kg = $('input[name=product_unit]').val();

    if (qty == '' && kg == '') {
        toastr.error('errro');
        return false;
    }
    $.ajax({
        type: "POST",
        url: "<?=base_url()?>cart/add",
        data: form.serialize(), // serializes the form's elements.
        success: function(data) {
            $('.cart').load(window.location.href + ' .cart');
            $('.table-responsive').load(window.location.href + ' .table-responsive');
            toastr.success("Product added ! check in cart");

        }

    })
});
</script>

<script>
$(document).ready(function() {
    $(".unit").on("click", function() {
        var unit = $(this).val();
        var v = $(this).closest("div.rating").find("input[name='product_qty']").val();
        if (unit == 'kg') {
            if (v > 10) {
                alert('kg weight only  10 quantity allowed');
                $(this).closest('div.rating').find('input').val('10');

            }
        }

    });
});
</script>