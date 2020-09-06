<?php namespace App\Controllers;

class Administrator extends BaseController{

	public function admin(){
		$postModel = new \App\Models\PostModel();
		$data = [
			'posts' => $postModel->paginate(5),
			'pager' => $postModel->pager 

		];
		return view('post/admin-content',[
			'data'=>$data,
		]);

	}

}