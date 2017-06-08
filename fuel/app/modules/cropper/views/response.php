 <?php $ppg_id =0; if(isset($galleries) && count($galleries)>0){ ?>
<div class="row">
   <?php foreach($galleries as $gallery): ?>
    <?php if($ppg_id==0) $ppg_id = $gallery->id; /* to go previous page */?> 
        <div class="panel panel-info ic pull-left" data-directory="<?=$gallery->directory;?>" data-title="<?=$gallery->title;?>" data-id="<?=$gallery->id;?>">
            <label class="copy_clip btn-success btn btn-xs" data-txt="anchor"> Copy</label>
            <label class="delete_media btn-danger btn btn-xs" data-txt="anchor" data-id="<?=$gallery->id;?>"> Delete</label>
            <div style="margin: 3px;">
                    <img src="<?=Uri::create('/').$gallery->directory.DS.'thumbnail_'.$gallery->title;?>">
                <!-- <img src="<?=$gallery->getImage('thumbnail_');?>"> -->
            </div>
        </div>
    <?php $npg_id = $gallery->id; /*for next page */ endforeach;  ?>
</div>
<?php }else{
    echo "<div class='alert alert-danger'>No More Galleries</div>";
    } ?>
    <hr>
<div class="footer">
    <?php if(isset($npg_id) && $npg_id !=$ppg_id){ ?>
    <span class="btn btn-default pull-right npg_js" data-last_id="<?=isset($npg_id)?$npg_id:0;?>" data-preset="<?=isset($preset)?$preset:'default';?>">Next </span>
    <?php } ?>
    <span class="btn btn-default pull-right ppg_js" data-last_id="<?=isset($ppg_id)?($ppg_id-12):0;?>" data-preset="<?=isset($preset)?$preset:'default';?>">Previous </span>
</div>
