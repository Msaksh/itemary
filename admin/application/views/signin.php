<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?=NAME?> | Login
    </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/itemary-logo.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>assets/images/itemary-logo.png" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/sweetalert/sweetalert2.min.css"
        id="sweetalert2" />

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/Waves/waves.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/color/color-1.min.css" id="color" />


    <style type="text/css">
    label.error {
        color: red !important;
        text-align: right;
    }
    </style>
</head>

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="login-card card-block">
                        <form id="login-form/" method="post" action="<?= base_url('login/signin') ?>"
                            class="md-float-material">
                            <div class="text-center">
                                <img style="height: 100px;" src="<?= base_url() ?>assets/images/itemary-logo.png"
                                    alt="logo">
                            </div>
                            <h3 class="text-center txt-primary">
                                Admin Login
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input name="user" type="email" class="md-form-control" />
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input name="password" type="password" class="md-form-control" />
                                        <label>Password</label>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6 col-xs-12">
                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                                        <label class="input-checkbox checkbox-primary">
                                            <input type="checkbox" id="checkbox" name="remember_me" value="1">
                                            <span class="checkbox"></span>
                                        </label>
                                        <div class="captions">Remember Me</div>

                                    </div>
                                </div> -->
                                <!-- <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                    <a href="<?= base_url('forget-password') ?>" class="text-right f-w-600"> Forget Password?</a>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 adminLoginBtn">LOGIN</button>
                                </div>
                            </div>
                            <!-- <div class="card-footer"> -->
                            <!-- <div class="col-sm-12 col-xs-12 text-center">
                            <span class="text-muted">Don't have an account?</span>
                            <a href="register2.html" class="f-w-600 p-l-5">Sign up Now</a>
                        </div> -->

                            <!-- </div> -->
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

    <!-- Required Jqurey -->
    <script src="<?= base_url() ?>assets/plugins/Jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="<?= base_url() ?>assets/plugins/Waves/waves.min.js"></script>

    <script src="<?= base_url('assets') ?>/plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/jquery.validate.min.js"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url() ?>assets/pages/elements.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        <?php if ($this->session->flashdata('error')) { ?>
        swal({
            type: 'error',
            title: 'Error!',
            text: "<?= $this->session->flashdata('error') ?>",
            confirmButtonText: 'Dismiss',
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-lg btn-danger'
        });
        <?php } ?>

        $("#login-form").validate({
            rules: {
                user: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            }
        });
    });
    </script>

</body>

</html>