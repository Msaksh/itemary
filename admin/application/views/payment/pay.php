<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style type="text/css">
    .razorpay-payment-button{
        display: none;
        background-color: green!important;
        color:white!important;
    margin-left: 48%!important;
    height: 37px!important;
    width: 84px!important;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('.razorpay-payment-button').click();

    })
</script>
<?php
require('config.php');
require('razorpay-php/Razorpay.php');
// session_start();
// Create the Razorpay Order

use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);

$k=0;
 $d;
  foreach ($list as $value) {
     $d[$k] =$value;
     $k++;    
 }
$price = $d['0'];
$name = "Booking Order";
// $image = $list->image;
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => rand(100,999),
    'amount'          =>  $price* 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $name,
    "description"       => "CuDel",
    "image"             => "",
    "prefill"           => [
    "name"              => $name,
    "email"             => "eemail.krishna@gmail.com",
    "contact"           => "9140934715",
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "T".rand(100,999),
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}
$json = json_encode($data);
require("checkout/{$checkout}.php");

?>
</body>
<style>
    .image_size{
      width: 40%;
    height: 28%;
    margin-left: 31%;

    }
    
@media only screen and (max-width: 600px) {
   .image_size{
        margin-left:0%!important;
    width: 100%!important;
}
.razorpay- ment-button {    
    margin-left: 41%!important;    
}

}

</style>
