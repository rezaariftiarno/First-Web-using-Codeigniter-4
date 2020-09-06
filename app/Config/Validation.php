<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' =>[
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Username Anda masih kosong',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Silahkan isi password Anda',
		],
		'repeatPassword' => [
			'required' => '{field} Silahkan samakan password Anda',
			'matches[password]' => '{field} dengan Password di atas',
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
		'required' => '{field} Username Anda masih kosong',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Silahkan isi password Anda',
		],
	];

		public $post = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'isi_artikel' => [
		],
		'link_dokumen' => [
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		]
	];

	public $post_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'isi_artikel' => [			
		],
		'link_dokumen' => [			
		],		
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		]
	];

	public $postupdate = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'isi_artikel' => [
		],
		'link_dokumen' => [
		],
	];

	public $postupdate_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'isi_artikel' => [
		],
		'link_dokumen' => [
		],
	];

}
