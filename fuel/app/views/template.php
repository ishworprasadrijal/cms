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
    </style>
  </head>







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


      <div class="content">
      <?php echo $content; ?>
      </div>

    </div>








      <?php echo Asset::js(array('../plugins/jQuery/jquery-2.2.3.min.js','bootstrap.min.js','../plugins/fastclick/fastclick.js','app.min.js','demo.js')); ?>
  </body>
</html>