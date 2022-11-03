<div class="icon-bar">
    <a href="https://themeforest.net/item/organic-food-and-fruits-template/21299986" class="twitter" target="_blank">
        <i class="fa fa-shopping-cart"></i><br />
        <span>Buy Now</span>
    </a>
</div>
<!-- header end here -->

<!-- bread-crumb start here -->
<div class="bread-crumb">
    <img src="<?=base_url()?>assets/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Itemary</span> Checkout</h2>
            <ul class="list-inline">
                <li>
                    <a href="index-2.html">HOME</a>
                </li>
                <li>
                    <a href="checkout.html">Checkout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

<!-- checkout start here -->
<div class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="commontop">
                    <h4 class="float-left">Billing Details</h4>
                    <div class="create float-right">
                        <label class="check">
                            <input type="checkbox" id="same" onchange="addressFunction()" name="ship"
                                class="checkclass" />
                            Ship to the same address
                        </label>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name *</label>
                                    <input name="firstname" value="" placeholder="Enter your first name" id="firstname"
                                        class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name *</label>
                                    <input name="lastname" value="" placeholder="Enter your last name" id="lastname"
                                        class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input name="email" value="" placeholder="Enter your Email Address*" id="email"
                                        class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Company Name *</label>
                                    <input name="companyname" value="" placeholder="Enter your company name"
                                        id="input-companyname" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input name="line1" value="" placeholder="Line 1" id="address" class="form-control"
                                        type="text" required>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Country *</label>
                                    <input name="country" value="" placeholder="Enter your country" id="country"
                                        class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>State *</label>
                                    <input name="town" value="" placeholder="Enter your State" id="state"
                                        class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Zip Code *</label>
                                    <input name="pincode" value="" placeholder="Enter your Zip Code" id="pincode"
                                        class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Additional note *</label>
                                    <textarea name="note" placeholder="Write your note" id="note" class="form-control"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <h6>Payment method</h6>
                <div class="bank-transfer">
                    <ul class="list-unstyled">
                        <li>
                            <label class="check">
                                <input type="radio" value="None" class="checkclass checkbox-inline" />
                                Direct bank transfer
                            </label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <label class="check">
                                <input type="radio" name="payment" class="checkclass checkbox-inline" />
                                Credit card
                                <img src="<?=base_url()?>assets/images/icon-payment.png"
                                    class="img-fluid float-right cards" alt="icon-payment" title="icon-payment" />
                            </label>
                        </li>
                        <li>
                            <label class="check">
                                <input type="radio" name="paypal" class="checkclass checkbox-inline" />
                                Via Paypal
                                <img src="<?=base_url()?>assets/images/card6.png" class="img-fluid float-right"
                                    alt="icon-payment" title="icon-payment" />
                            </label>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">

                <h6>Your order</h6>
                <table class="table cartable1">
                    <tr>
                        <td class="text-left">Cart SubTotal</td>
                        <td class="text-right">$100.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">Shipping & handling</td>
                        <td class="text-right">$50.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">Coupon Discount</td>
                        <td class="text-right">-$10.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">Order Total</td>
                        <td class="text-right">$140.00</td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
            <div class="buttons text-center col-sm-12">
                <input type="submit" class="btn btn-primary" value="Place order now" />
            </div>
        </div>
    </div>
</div>
<!-- checkout end here -->
<script type="text/javascript">
function addressFunction() {

    if (document.getElementById("same").checked) {
        document.getElementById("sfirstname").value = document.getElementById(
            "firstname").value;

        document.getElementById("slastname").value = document.getElementById(
            "lastname").value;

        document.getElementById("semail").value = document.getElementById(
            "email").value;

        document.getElementById("saddress").value = document.getElementById(
            "address").value;

        document.getElementById("sstate").value = document.getElementById(
            "state").value;

        document.getElementById("scountry").value = document.getElementById(
            "country").value;

        document.getElementById("spincode").value = document.getElementById(
            "pincode").value;

        document.getElementById("snote").value = document.getElementById(
            "note").value;


    } else {
        document.getElementById("sfirstname").value = "";
        document.getElementById("slastname").value = "";
        document.getElementById("semail").value = "";
        document.getElementById("scountry").value = "";
        document.getElementById("sstate").value = "";
        document.getElementById("spincode").value = "";
        document.getElementById("snote").value = "";
    }
}
</script>