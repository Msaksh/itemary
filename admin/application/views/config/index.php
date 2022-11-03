<!DOCTYPE html>
<html lang="en" dir="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Configurations | Anupama Admin</title>
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
                    <h1>Configurations</h1>
                    <ul>
                        <li><a href="<?=base_url()?>">Dashboard</a></li>
                    </ul>
                </div>

                <p style="cursor: pointer; position: absolute; top: 25px; right: 39px; font-size: 29px;">
                    <i class="fa fa-upload form-submit" aria-hidden="true"></i>
                </p>

                <div class="separator-breadcrumb border-top">
                    <form action="<?=base_url('config/index/'.$name)?>" id="form" method="post"  enctype="multipart/form-data">
                        <?php foreach($items as $key => $itm){ 
                        ?>
                        <input type="hidden" name="config[<?=$key?>][config_name]" value="<?=$itm->name?>">
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <div class="form-group">
                                  <label><?=str_replace('_',' ',$itm->name)?></label>
                                    <?php if($itm->name!='logo'){ ?>
                                    <textarea class="form-control" name="config[<?=$key?>][tld]" placeholder="<?=str_replace('_',' ',$itm->name)?>"><?=$itm->value?></textarea>
                                  <?php }else{ ?>
                                    <input class="form-control" type="file" name="config[<?=$key?>][tld]"/>
                                  <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
    </script>
</body>
</html>