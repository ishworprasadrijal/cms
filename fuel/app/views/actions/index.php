<h2>Listing <span class='muted'>Actions</span></h2>
<br>
<?php if ($actions): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Action</th>
			<th>Title</th>
			<th>Description</th>
			<th>Icon</th>
			<th>Status</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($actions as $item): ?>		<tr>

			<td><?php echo $item->action; ?></td>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->icon; ?></td>
			<td><?php echo $item->status; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('actions/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('actions/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('actions/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Actions.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('actions/create', 'Add new Action', array('class' => 'btn btn-success')); ?>

</p>
