<?php

require('config.php');

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$success = true;

$error = "Payment Failed";

if (empty($razorpay_payment_id) === false)
{   

    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $shopping_order_id,
            'razorpay_payment_id' => $razorpay_payment_id,
            'razorpay_signature' => $razorpay_signature
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: </p>";
             $k=0;
 $d;
  foreach ($list as $value) {
     $d[$k] =$value;
     $k++;    
 }
 $shopping_order_id = $d['0'];
 $razorpay_payment_id = $d['1'];
 $razorpay_signature = $d['3'];
 // $date = $_POST['date'];
 // $time = $_POST['time'];
 // $final_time = $date.' '.$time;
 $where=[
  'schedule' => '',
    // 'customer_id' => $_POST['id'],
    'for_payment' => 2,
    // 'product_id' =>$this->cart->constant(),
    'id' =>'',
    'order_id' => $shopping_order_id,
    't_id' => $razorpay_payment_id,
 ];
 $this->app_model->insert_one('peyment_status',$where);
 $this->session->set_flashdata('payment', ' Success');
             redirect('welcome');
}
else
{
    $html = "<p>Your payment was successful</p>
             <p>{$razorpay_payment_id}</p>";
              redirect('welcome'); 
             


}

echo $html;
