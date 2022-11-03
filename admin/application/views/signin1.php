<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cudel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style type="text/css">  
  .gradient-custom-2 {
  /* fallback for old browsers */
  background: #fccb90;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
  .gradient-form {
    height: 100vh !important;
  }
}
@media (min-width: 769px) {
  .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;
  }
}
</style>
</head>
<body>                                            
<section class=" gradient-form" style="background-color: #eee;height: 100%!important;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center"><a href="<?=base_url('../')?>">
                  <img src="<?=base_url()?>assets/cudel_logo.svg" style="width: 185px;" alt="logo"></a>
                  <h4 class="mt-1 mb-5 pb-1" style="color:#c82333"><b>Admin Login</b></h4>
                </div>
                  <?php
                       if(isset($_SESSION['error'])) 
                            { 
                              echo $this->session->flashdata('error');                            
                             unset($_SESSION['error']);
                            }
                    ?> 
                <form action="<?=base_url()?>login/signin" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4"><i class="fa fa-user" style="color:#e65f2c;"></i>
                    <label class="form-label"  for="form2Example11">Username <span class="text-danger"> *</span></label>
                    <input type="text" name="user" id="form2Example11" class="form-control" placeholder="Phone number or email address"/ required>
                    
                  </div>

                  <div class="form-outline mb-4"><i class="fa fa-key" style="color:#e65f2c;"></i>
                    <label class="form-label" for="form2Example22">Password</label><span class="text-danger"> *</span>
                    <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Password" required />
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="Submit">Log in</button>
                    <a class="text-muted" href="#!" data-toggle="modal" data-target="#login">Forgot password?</a>
                  </div>
                </form>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">CuDel provides customer delight solutions which include mobile beauty services at your doorstep. Our vision is to save your time and effort going to salons by booking beauty services from the comfort of your own home at very reasonable price.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
       <form action="" method="">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#d92128">
           <h4 class="modal-title" style="color:white">Change Your Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>         
        </div>
       
        <div class="modal-body">
          <i class="fa fa-envelope" style="margin-right:6px;color:#d92128"> </i><label style="display: inline-flex;"> Email Address : <span class="text-danger">*</span></label>

          <input style="display: inline-flex;" class="form-control mb-3" type="text" name="email" placeholder="Enter your email address">       
          
           
            <button type="Submit" value="Submit" class="btn btn-primary" style="background-color: #d92128!important;">Submit</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div> 
      </form>     
    </div>
  </div>  
</div>

<!-- Sigup Modal form -->
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#d92128">
          <h4 class="modal-title text-center" style="color:white">Sign Up Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <form action="" method="">
      <div class="modal-body"> <i class="fa fa-user" style="margin-right:3px;color:#d92128"></i>
          <label style="display: inline-flex;"> Name: <span class="text-danger">*</span></label>

          <input style="display: inline-flex;" class="form-control mb-3" type="text" name="name" placeholder="Enter your full name"> <i class="fa fa-envelope" style="margin-right:3px;color:#d92128"></i>
           <label style="display: inline-flex;"> Email: <span class="text-danger">*</span></label>
          <input class="form-control mb-3" type="text" name="email" placeholder="Enter email address "> <i class="fa fa-phone" style="margin-right:3px;color:#d92128"></i>
           <label style="display: inline-flex;"> Phone: <span class="text-danger">*</span></label>
           <input class="form-control mb-3" type="text" name="phone" placeholder="Enter phone/mobile"> <i class="fa fa-address-card" style="margin-right:3px;color:#d92128"></i>
            <label style="display: inline-flex;">Address : <span class="text-danger">*</span></label>
            <input class="form-control mb-3" type="text" name="address" placeholder="Enter address">
            <button type="Submit" value="Submit" class="btn btn-success" style="background-color:#d92128">Submit</button>
        </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>  
</div>
</body>
</html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
setTimeout(function(){
        $('.change_pass_error').fadeOut(500);
                    }, 4000);
</script>
<style>
  .error{
    background: red;
    color: white;
    text-align: center;
  }
</style>