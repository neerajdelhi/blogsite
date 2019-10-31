<?php foreach($posts as $post) : ?>
 <div class="card bg-light">
	<div class="card-body">
		<small><strong><?= $post['created']->format(DATE_RFC850) ?></strong></small><br>
		<h4><?= $this->Html->link($post['title'],'/posts/'.$post['id']); ?></h4>
		<?= $this->Text->truncate($post['body'],100,
				array(
				'ellipses' => '...',
				'exact' => false 
				)
			) ?>
		<br>
		<?= $this->Html->link('Read more','/posts/'.$post['id']); ?>
	</div>
 </div><br>
<?php endforeach; ?>