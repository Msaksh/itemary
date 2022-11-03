<!DOCTYPE html>
<html lang="en" dir="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Page Edit | Anupama Admin</title>
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
                    <h1>Page</h1>
                    <ul>
                        <li><a href="<?=base_url()?>">Dashboard</a></li>
                        <li>Edit</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top">
                    <form action="<?=base_url('config/page/'.$name)?>" id="form" method="post"  enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="title">Title <span class="text-danger">*</span></label>
                                        <input name="title" type="text" class="form-control" id="title" value="<?=$page->title?>" placeholder="Page title ?">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="editor">Details</label>
                                        <textarea name="details" id="editor"><?=$page->details?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <input type="submit" name="save" class="btn btn-info btn-rounded m-1" value="Save" />
                                    <a href="<?=base_url()?>" class="btn btn-outline-info btn-rounded m-1">Cancel</a>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="slug-box">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="slug" placeholder="Slug" value="<?=$page->slug?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-body">
                                    <div class="card-title">Banner Image
                                        <i class="fa fa-trash cancel cancel1 <?=$page->image?'':'d-none'?>" onclick="cancelImage('1')"></i>
                                    </div>
                                    <div class="text-center">
                                        <?php if($page->image && file_exists(FCPATH.'/assets/images/config/'.$page->image)){ ?>
                                        <img onclick="selectImage('1')" src="<?=base_url('assets/')?>images/config/<?=$page->image?>" id="profileImg1" />
                                        <?php }else{ ?>
                                        <img onclick="selectImage('1')" src="<?=base_url('assets/')?>images/blank.jpg" id="profileImg1" />
                                        <?php } ?>
                                        <input type="hidden" id="imageExiest1" name="imageExiest" value="<?=$page->image?>">
                                        <input type="file" id="profileInput1" name="image" accept="image/*" onchange="PreviewImage('1');" hidden>
                                        <sub class="text-danger">Image 1263x471 PX</sub>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </form>
                </div><!-- end of main-content -->
            </div>
        </div>
    </div>

    <?php $this->load->view('common/footer'); ?>
    <?php $this->load->view('common/common-footer-cdn'); ?>

    <script src="<?=base_url('assets/')?>js/ckeditor/ckeditor.js"></script>
    <script src="<?=base_url('assets/')?>js/ckfinder/ckfinder.js"></script>
    <script src="<?=base_url('assets/')?>js/scripts/jquery.validate.min.js"></script>

    <script type="text/javascript">
    
        $(document).ready(function(){
            
            var editor2 = CKEDITOR.replace('editor');
            CKFinder.setupCKEditor(editor2);

            jQuery.validator.addMethod("noSpace", function(value, element) { 
                return value.indexOf(" ") < 0; 
            }, "No space please");

            $("#form").validate({
                ignore: [],
                rules: {
                    title: {
                        required: true
                    },
                    slug: {
                        noSpace: true
                    }
                }
            });
        });
    </script>
</body>
</html>