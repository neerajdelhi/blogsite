<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
	public function initialize(array $config){
		$this->addBehavior('Timestamp');
	}
	public function validationDefault(Validator $validation){
		$validation
				->notEmpty('title')
				->RequirePresence('title')
				->notEmpty('body')
				->RequirePresence('body')
				->notEmpty('author')
				->RequirePresence('author')
				->notEmpty('category')
				->RequirePresence('category');
				
		return $validation;
	}	
}