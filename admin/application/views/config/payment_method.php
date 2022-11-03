<!DOCTYPE html>
<html lang="en" dir="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Payment Gatways | Anupama Admin</title>
    <?php $this->load->view('common/common-head-cdn'); ?>

    <style type="text/css">
        .card-title{
            margin-bottom: 0px;
        }
        .tags-box, .category-box, .meta-box{
            display: none;
            margin-top: 10px;
        }
        .show{
           display: block !important; 
        }
    </style>
</head>

<body class="text-left">

<?php $this->load->view('common/header'); ?>

        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Payment Configurations</h1>
                    <ul>
                        <li><a href="<?=base_url()?>">Dashboard</a></li>
                    </ul>
                </div>

                <div class="separator-breadcrumb border-top">
                    <form action="<?=base_url('config/email_templates/'.$name)?>" id="form" method="post"  enctype="multipart/form-data">
                        <div class="row">
                        <?php foreach($items as $key => $itm){ 
                        ?>
                            <div class="col-sm-4">
                                <div class="card mt-3">
                                    <div class="card-body p-4" style="padding: 7px 11px;">
                                        <div class="card-title mt-1 mb-2">
                                            <?=ucfirst($itm->name)?>
                                            <label class="switch" style="float: right">
                                                <input type="checkbox" <?php if($itm->status=='A'){ echo 'checked'; } ?> onclick="updateStatus(this, <?=$itm->id?>)" />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="meta_title" placeholder="keys" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="meta_title" placeholder="keys" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </form>
                </div><!-- end of main-content -->
            </div>
        </div>
    </div>

    <?php $this->load->view('common/footer'); ?>
    <?php $this->load->view('common/common-footer-cdn'); ?>

    <script src="<?=base_url('assets/')?>js/scripts/jquery.validate.min.js"></script>

    <script type="text/javascript">
    
        $(document).ready(function(){

            $("#form").validate({
                ignore: [],
                rules: {
                    name: {
                        required: true
                    }
                }
            });
        });

        $(".form-submit").click(function(){
            $("#form").submit();
        })

        function updateStatus(event, id){
              var checked = 'D';
              if ($(event).is(':checked')) {
              checked = 'A';
              }
              var data = {
                  id: id,
                  status:checked
              };


              $.ajax({
                  type: 'POST',
                  url: "<?=base_url()?>category_request/enable",
                  data: data,
                  success: function(resultData) {
                    if(resultData){
                        success('Seller requested category updated');
                    }
                  }
              });
          }
        </script>
</body>
</html>