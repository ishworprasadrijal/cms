<div class="panel panel-info ic pull-left" data-directory="<?=$gallery->directory;?>" data-title="<?=$gallery->title;?>" data-id="<?=$gallery->id;?>">
	<label class="copy_clip btn-success btn btn-xs" data-txt="anchor"> Set Profile Picture</label>
	<label class="delete_media btn-danger btn btn-xs" data-txt="anchor" data-id="<?=$gallery->id;?>"> Delete</label>
	<div style="margin: 3px;">
		<img src="<?=$croppedImage;?>" style="max-width: 120px; height: 80px;">
	</div>
</div>