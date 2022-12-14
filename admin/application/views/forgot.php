<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=NAME?> | Forget Password</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="codedthemes">
    <meta name="keywords"
          content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">

    <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/Waves/waves.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/color/color-1.min.css" id="color"/>

</head>
<body>

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <div class="container-fluid">
            <div class="row">
                   <div class="col-xs-12">
                        <div class="login-card card-block">
                            <form class="md-float-material">
                                <div class="text-center">
                                    <img style="height: 100px;" src="<?=base_url()?>assets/images/logo.png" alt="DC10G">
                                </div>
                                <h3 class="text-primary text-center m-b-25">Recover your password</h3>

                                <div class="md-group">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" />
                                        <label>Email or Mobile Number</label>
                                    </div>
                                </div>
                        <div class="btn-forgot">
                            <button type="reset" class="btn btn-primary btn-md waves-effect waves-light text-center">SEND RESET LINK
                            </button>
                        </div>
                                <div class="row">
                                    <div class="col-xs-12 text-center m-t-25">

                                        <a href="<?=base_url('login')?>" class="f-w-600 p-l-5"> Sign In Here</a>

                                    </div>
                                </div>
                        <!-- end of btn-forgot class-->
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of login-card -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>


<script src="<?=base_url()?>assets/plugins/jquery/dist/jquery.min.html"></script>
<script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?=base_url()?>assets/plugins/Waves/waves.min.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="<?=base_url()?>assets/pages/elements.js"></script>

</body>

</html>
