<div class="card ">
	<div class="card-body">
		<div class="panel-title">
				<h4>This is posts No. <?= $post['id']; ?></h4>
				<h4><?= $post['title']; ?></h4>
		</div>
		<div class="card-text">
			<p><?= $post['body']; ?></p>
		</div>
	</div>
</div>
<br>
<?= $this->Form->postLink('delete',
		['action'=>'delete', $post['id']],
		['confirm'=>'Are you sure?',
		 'class'=>'btn btn-danger pull-right']
	); 
?>
<?= $this->Html->link('Edit Posts', ['action'=>'edit', $post['id']], ['class'=>'btn btn-info']); ?>