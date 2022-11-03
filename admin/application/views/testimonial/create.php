<!DOCTYPE html>
<html lang="en">

<head>
   <title><?=NAME?> | Testimonial Create</title>

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

   <!-- Select 2 css -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/dist/css/select2.min.css" />
   <!-- Tags css -->
   <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />

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
                     <h4>Create A New Testimonial</h4>
                     <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item">
                           <a href="<?=base_url()?>">
                              <i class="icofont icofont-home"></i>
                           </a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?=base_url('testimonial')?>">Testimonial</a>
                        <li class="breadcrumb-item"><a href="#">Create New Testimonial</a>
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
                <?php  
                    if($error = $this->session->flashdata('error')){ ?>
                     <p style="color: red;"><strong>Error!</strong> <?php echo  $error; ?><p>
            <?php }      
            ?>   
            <!-- Header end -->
            <div class="row">
               <div class="col-sm-12">
                  <!-- Basic Table starts -->
                  <div class="card">
                     <div class="card-block" style="min-height: 525px;">
                        <form action="<?=base_url('testimonial/create')?>" id="form" method="post"  enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-sm-9">
                            <div class="card p-10">
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="designation">Designation</label>
                                        <input name="designation" type="text" class="form-control" id="designation" placeholder=" Designation">

                                         <input name="for_website" type="hidden" class="form-control" id="for_website">
                                    </div>
                                 
                                     <div class="form-group mb-3">
                                        <label for="excerpt">Description <span class="text-danger">*</span></label>
                                        <textarea name="description" class="form-control" id="excerpt" rows="4" placeholder="Description"></textarea>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <input type="submit" name="PUBLISH" class="btn btn-sm btn-info btn-rounded m-1" value="Save" />
                                    <input class="btn btn-info btn-sm btn-rounded m-1" type="submit" name="SAVE_DRAFT" value="Draft" />
                                    <a href="<?=base_url('testimonial')?>" class="btn btn-sm btn-outline-info btn-rounded m-1">Cancel</a>
                                </div>
                            </div>


   

                        <div style="margin-bottom: 10px !important" class="card mt-3  p-10">
                            <div class="card-body">
                                <div class="card-title">Testimonial Image
                                    <i class="fa fa-trash cancel cancel1 d-none" onclick="cancelImage('1')"></i>
                                </div>
                                <div class="text-center">
                                        <img class="img-fluid" onclick="selectImage('1')" src="<?=base_url('assets/')?>images/blank.jpg" id="profileImg1" />
                                        <input type="file" id="profileInput1" name="image" accept="image/*" onchange="PreviewImage('1');" hidden>
                                    </div>
                            </div>
                        </div>

                  

                        </div>
                    </div>
                    </form>
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

   <script src="<?=base_url()?>assets/plugins/select2/dist/js/select2.full.min.js"></script>
   <!-- Tags js -->
   <script src="<?=base_url()?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>



   <script src="<?=base_url('assets')?>/js/jquery.validate.min.js"></script>
   <script src="<?=base_url('assets/')?>plugins/ckeditor/ckeditor.js"></script>
    <script src="<?=base_url('assets/')?>plugins/ckfinder/ckfinder.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="<?=base_url()?>assets/js/main.min.js"></script>
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

  <script type="text/javascript">
    
        $(document).ready(function(){

            // 
            jQuery.validator.addMethod("noSpace", function(value, element) { 
                return value.indexOf(" ") < 0; 
            }, "No space please");

            $("#form").validate({
                ignore: [],
                rules: {
                    name: {
                        required: true
                    },
                    Designation: {
                        noSpace: true
                    },
                    description: {
                        required: true,
                        minlength:10
                    }
                }
            });
            $(".js-example-placeholder-multiple").select2({
                placeholder: "Select  Category"
            });
        });
        function hideShow(className){
            if($(className).hasClass('show')){
                $(className).removeClass('show');
            }else{
                $(className).addClass('show');
            }
        }
    </script>

</body>
</html>