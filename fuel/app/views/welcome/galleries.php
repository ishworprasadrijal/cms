<script type="text/javascript">var base_url ="<?=Uri::base('/');?>"</script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	img{
		max-width: 100%;
	}
	#modal{
		overflow-y:hidden;
	}
</style>

<?php echo Asset::css(array('cropper.css'));?>
<?php echo Asset::js(array('cropper.js','media.js','notifier.js'));?>
<?php echo Request::forge('cropper/list/galleries')->execute(); ?>



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