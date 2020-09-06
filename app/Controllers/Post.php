<?php namespace App\Controllers;

class Post extends BaseController{

	public function __construct() {

		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}

		public function index()
	{
		$postModel = new \App\Models\PostModel();

		$data = [
			'posts' => $postModel->paginate(5),
			'pager' => $postModel->pager 

		];
		return view('post/index',[
			'data'=>$data,
		]);
	}

	public function view()
	{
		$id = $this->request->uri->getSegment(3);

		$postModel = new \App\Models\PostModel();

		$post = $postModel->find($id);

		return view('post/view',[
			'post' => $post,
		]);
	}

	public function create()
	{
		if($this->request->getPost())
		{
			//jika ada data yang di post
			$data = $this->request->getPost();
			$this->validation->run($data, 'post');
			$errors = $this->validation->getErrors();

			if(!$errors)
			{
				//simpan datanya
				$postModel = new \App\Models\PostModel();

				$post = new \App\Entities\Post();

				$post->fill($data);
				$post->gambar = $this->request->getFile('gambar');
				// $Post->created_by = $this->session->get('id');
				// $Post->created_date = date("Y-m-d H:i:s");

				$postModel->save($post);

				$id = $postModel->insertID();

				$segments = ['post', 'view', $id];
				// /Post/view/$id
				return redirect()->to(site_url($segments));

			}
		}
		return view('post/create');
	}

	public function update()
	{
		$id = $this->request->uri->getSegment(3);

		$postModel = new \App\Models\PostModel();

		$post = $postModel->find($id);

		if($this->request->getPost())
		{
			$data = $this->request->getPost();
			$this->validation->run($data, 'postupdate');
			$errors = $this->validation->getErrors();

			if(!$errors)
			{
				$b = new \App\Entities\Post();
				$b->id = $id;
				$b->fill($data);

				if($this->request->getFile('gambar')->isValid()){
					$b->gambar = $this->request->getFile('gambar');
				}

				// $b->updated_by = $this->session->get('id');
				// $b->updated_date = date("Y-m-d H:i:s");

				$postModel->save($b);
				
				$segments = ['post','view',$id];

				return redirect()->to(base_url($segments));
			}
		}

		return view('post/update',[
			'post' => $post,
		]);
	}

	public function delete()
	{
		$id = $this->request->uri->getSegment(3);

		$modelPost = new \App\Models\PostModel();
		$delete = $modelPost->delete($id);

		return redirect()->to(site_url('post/index'));
	}
}