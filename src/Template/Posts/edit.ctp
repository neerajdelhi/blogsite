<h3>Edit Form</h3>
<?= $this->Form->create($post); ?>
	<?= $this->Form->input('title',
			array(
				'label' => 'Post Title',
				'class' => 'form-control',
			)); 
		?>
	<?=	$this->Form->input('body',
			array(
				'label' => 'Post Body',
				'type' => 'textarea',
				'escape' => false,
				'class' => 'form-control'
			)); 
	 ?>
	<?=	$this->Form->input('category',
			array(
				'label' => 'Category',
				'class' => 'form-control',
				'type' => 'select',
				'empty' => 'select one',
				'options' => ['web development',
							'design', 'marketing']
			)); 
	 ?>
	 <?=
		$this->Form->input('author',
		array(
			'label' => 'Author',
			'class' => 'form-control'
		));
	 ?><br>
	 <?=
		$this->Form->submit('Submit',
		array(
			'class'=> 'btn btn-info'
		));
	 ?>
<?= $this->Form->end(); ?>