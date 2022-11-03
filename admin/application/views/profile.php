<!DOCTYPE html>
<html lang="en">

<head>
   <title><?=NAME?> | Profile</title>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">
   <link rel="icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="<?=base_url()?>assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <?php $this->load->view('common/loader'); ?>
   <div class="wrapper">
      <?php $this->load->view('common/header'); ?>

      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>User Profile</h4>
                     <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">User Profile</a>
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
            <!-- Header end -->
            <div class="row">
               <div class="col-sm-12">
                  <!-- Basic Table starts -->
                  <div class="card">
                     <div class="card-block">
                        <?=$this->session->userdata('profile')['name']?>
                     </div>
                  </div>
                  <!-- Basic Table ends -->
               </div>
            </div>
            
            </div>
        </div>
    </div>
     <!-- Required Jqurey -->
   <script src="<?=base_url()?>assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="<?=base_url()?>assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="<?=base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="<?=base_url()?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="<?=base_url()?>assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="<?=base_url()?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="<?=base_url()?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="<?=base_url()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="<?=base_url()?>assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="<?=base_url()?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="../../code.highcharts.com/highcharts.js"></script>
   <script src="../../code.highcharts.com/modules/exporting.js"></script>
   <script src="../../code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="<?=base_url()?>assets/js/main.min.js"></script>
   <script type="text/javascript" src="<?=base_url()?>assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="<?=base_url()?>assets/pages/elements.js"></script>
   <script src="<?=base_url()?>assets/js/menu.min.js"></script>
  <script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
           nav.addClass('active');
        }
        else {
           nav.removeClass('active');
        }
    });
  </script>

</body>
</html>