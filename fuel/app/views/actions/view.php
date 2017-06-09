<h2>Viewing <span class='muted'>#<?php echo $action->id; ?></span></h2>

<p>
	<strong>Action:</strong>
	<?php echo $action->action; ?></p>
<p>
	<strong>Title:</strong>
	<?php echo $action->title; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $action->description; ?></p>
<p>
	<strong>Icon:</strong>
	<?php echo $action->icon; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $action->status; ?></p>

<?php echo Html::anchor('actions/edit/'.$action->id, 'Edit'); ?> |
<?php echo Html::anchor('actions', 'Back'); ?>