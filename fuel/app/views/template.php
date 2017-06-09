<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php echo Asset::css(array('bootstrap.min.css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css','https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css','AdminLTE.min.css')); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .color-palette {height: 35px;line-height: 35px;text-align: center;}
      .color-palette-set {margin-bottom: 15px;}
      .color-palette span {display: none;font-size: 12px;}
      .color-palette:hover span {display: block;}
      .color-palette-box h4 {position: absolute;top: 100%;left: 25px;margin-top: -40px;color: rgba(255, 255, 255, 0.8);      font-size: 12px;display: block;z-index: 7;}

      .cropperModal img{
        max-width: 100%;
      }
      .preview {
          overflow: hidden;
          width: 50px; 
          height: 50px;
        }
    </style>
  <?php echo Asset::css(array('cropper.css'));?>
  </head>

  <script>var base_url = "<?=Uri::base('/')?>";</script>





  <body class="hold-transition">



    <div class="wrapper">
        <br>
          <?php echo view::forge('elements/flash'); ?>

      <?php 
        if(isset($current_user) && $current_user){
          echo view::forge('elements/header');
        }else{ ?>
        <div class="text-right" style="margin-right: 10px;">
          <?php if($current_action !='login' && empty($current_user)){ ?>
            <a href="<?=Uri::Create('admin/login');?>" class="btn btn-default btn-sm">login</a>
            <?php }else if(!empty($current_user)){ ?>
            <a href="<?=Uri::Create('admin/logout');?>" class="btn btn-default btn-sm">logout</a>
            <?php } ?>
          <a href="<?=Uri::Create('register');?>" class="btn btn-default btn-sm">Register</a>
        </div>
        <div class="clearfix"></div>
        <br>
        <?php }
      ?>


      <div class="content container">
      <?php echo $content; ?>
      </div>

    </div>








      <?php echo Asset::js(array('../plugins/jQuery/jquery-2.2.3.min.js','bootstrap.min.js','../plugins/fastclick/fastclick.js','app.min.js','demo.js','ckeditor/ckeditor.js')); ?>
      <?php echo Asset::js(array('cropper.js','media.js','notifier.js'));?>
  </body>
</html>


<?/*==============================                
   : cropper modal load everytime form template
  ================================*/ ?>
  <div class="modal fade bs-example-modal-lg cropperModal" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <div class="row">
         <h2 class="col-md-4">Crop </h2>
        </div>
        </div>

        <div class="modal-body">
          <div class="img-container">
            <img id="image" src="" alt="Picture">
          </div>
        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
              <button type="button" id="cropBtn" class="btn btn-primary btn-lg" data-dismiss="modal">Crop and upload </button>
        </div>
      </div>
    </div>
  </div>


  <script>
      // CKEDITOR.replace('description');
  </script>