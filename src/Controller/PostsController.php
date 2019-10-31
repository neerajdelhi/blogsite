<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController{
	
	public function initialize(){
		parent::initialize();
		$this->loadComponent('Flash');
		//echo "Cakephp 3.8 This in initialize<br>";
	}
	public function index(){
		$posts = $this->Posts->find('all', array('order'=> array('created'=>'desc')));
		//echo "<pre>"; print_r(compact('posts')); echo "</pre>";die;
		$this->set(compact('posts'));
	}
	public function create(){
		$posts = $this->Posts->find('all');
		$this->set(compact('posts'));
		
		$post = $this->Posts->newEntity();
		
		if($this->request->is('post')){
			$post = $this->Posts->patchEntity($post,$this->request->data);
			if($this->Posts->save($post)){
				$this->Flash->success(__("Posts Created Successfully."));
				return $this->redirect(['action'=>'index']);
			}
			$this->Flash->error(__("Unable to create Posts."));
		}
		$this->set('post',$post);
	}
	public function view($id){
		
		$posts = $this->Posts->find('all');
		
		$post = $this->Posts->get($id);
		$this->set(compact('posts','post'));
	}
	public function edit($id){
		$posts = $this->Posts->find('all');
		$this->set(compact($posts));
		
		$post = $this->Posts->get($id);
		
		if($this->request->is(['post','put'])){
			$post = $this->Posts->patchEntity($post,$this->request->data);
			if($this->Posts->save($post)){
				$this->Flash->success(__('Post Updated.'));
				return $this->redirect(['action'=>'index']);
			}
			$this->Flash->error(__('Unable to Udated post.'));
		}
		$this->set(['post','posts'],[$post,$posts]);
	}
}