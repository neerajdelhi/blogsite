<?php
namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController{
	public function initialize(){
		$this->loadComponent('Blog');
		$this->loadComponent('Devs');
	}
	public function index(){
		//$posts = $this->Blog->getPosts();
		//$this->set('posts',$posts);
		$posts = $this->loadModel('posts')->find('all');
		$this->set(compact('posts'));
		$this->set('password',$this->Devs->generatePassword());
	}
}