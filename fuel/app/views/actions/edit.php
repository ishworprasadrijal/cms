<h2>Editing <span class='muted'>Action</span></h2>
<br>

<?php echo render('actions/_form'); ?>
<p>
	<?php echo Html::anchor('actions/view/'.$action->id, 'View'); ?> |
	<?php echo Html::anchor('actions', 'Back'); ?></p>
