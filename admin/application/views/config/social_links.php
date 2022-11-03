<!DOCTYPE html>
<html lang="en" dir="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Social Login Links | Anupama Admin</title>
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
                    <h1>Social Links</h1>
                    <ul>
                        <li><a href="<?=base_url()?>">Dashboard</a></li>
                    </ul>
                </div>

                <p style="cursor: pointer; position: absolute; top: 25px; right: 39px; font-size: 29px;">
                    <i class="fa fa-upload form-submit" aria-hidden="true"></i>
                </p>

                <div class="separator-breadcrumb border-top">
                    <form action="<?=base_url('config/social_links/'.$name)?>" id="form" method="post"  enctype="multipart/form-data">
                        <?php foreach($items as $key => $itm){ 
                        $value = json_decode($itm->value);
                        ?>
                        <input type="hidden" name="social[<?=$key?>][config_name]" value="<?=$itm->name?>">
                        <div class="row mt-4">
                            <div class="col-sm-1 text-center">
                                <i style="position: absolute; right: 5px; top: -6px;" class="fa fa-trash cancel cancel<?=$key?> <?=$value->image?'':'d-none'?>" onclick="cancelImage(<?=$key?>)"></i>
                                <?php if($value->image && file_exists(FCPATH.'/assets/images/config/'.$value->image)){ ?>
                                    <img style="height: 45px;" onclick="selectImage(<?=$key?>)" src="<?=base_url('assets/')?>images/config/<?=$value->image?>" id="profileImg<?=$key?>" />
                                <?php }else{ ?>
                                    <img style="height: 45px;" onclick="selectImage(<?=$key?>)" src="<?=base_url('assets/')?>images/blank.jpg" id="profileImg<?=$key?>" />
                                <?php } ?>
                                <input type="hidden" id="imageExiest<?=$key?>" name="social[<?=$key?>][exiest]" value="<?=$value->image?>">
                                <input type="file" id="profileInput<?=$key?>" name="<?=$itm->name?>_image" accept="image/*" onchange="PreviewImage(<?=$key?>);" hidden>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <textarea rows="1" class="form-control" name="social[<?=$key?>][name]" placeholder="<?=str_replace('link_','',$itm->name)?> title"><?=$value->name?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="social[<?=$key?>][link]" value="<?=$value->link?>" placeholder="<?=str_replace('_',' ',$itm->name)?>">
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