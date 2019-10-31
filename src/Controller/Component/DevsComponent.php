<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

class DevsComponent extends Component{
	public function generatePassword(){
		$password = '';
		$desired_lenght = rand(8,12);
		
		for($length=0; $length < $desired_lenght; $length++){
			$password .= chr(rand(32,126));
		}
		return $password;
	}
}