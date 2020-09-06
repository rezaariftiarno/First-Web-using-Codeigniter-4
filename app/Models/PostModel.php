<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	protected $table = 'post';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'judul', 'isi_artikel', 'link_dokumen', 'gambar', 'updated_by', 'updated_date'
	];
	protected $returnType = 'App\Entities\Post';
	protected $useTimestamps = false;
}