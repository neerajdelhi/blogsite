<h4>Latest Posts</h4>
<ul class="list-group">
<?php foreach($posts as $post) : ?>
		<li class="list-group-item">
			<?= $this->Html->link($post['title'],'/posts/'.$post['id']); ?>
		</li>
<?php endforeach; ?>
</ul>