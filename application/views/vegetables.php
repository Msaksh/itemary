<style type="text/css">
.image {
    text-align: center !important;

}

.image a img {
    height: 175px !important;
}
</style>
<div class="product">
    <div class="container">
        <div class="commontop text-center">
            <h4>VEGETABLES</h4>
        </div>

        <div class="row update">
            <?php foreach ($vegetable as $product) {
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

                                <input type="number" name="product_qty" value="1" min="1" max="10"
                                    style="width:100px;background:#f1dfdf;border:none;    text-align: center;">

                                <input id="kg" type="radio" value="kg" name="product_unit" required>kg


                                <input id="kg" type="radio" value="g" name="product_unit" required>g
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
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