<?php namespace App\Database\Migrations; 

/**
 * 
 */
class Post extends \CodeIgniter\Database\Migration{

	public function up (){
		$this->forge->addField([
			'id' =>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto-increment' => TRUE,
			],
			'judul' =>[
				'type' => 'TEXT',
				'constraint' => '100',
			],
			'isi_artikel' => [
				'type' => 'Text',
			],
			'link_dokumen' => [
				'type' => 'Text',
			],
			'gambar' => [
				'type'=>'TEXT',
				'null'=>TRUE,
			],

			'updated by' =>[
				'type'=> 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated date' =>[
				'type'=> 'DATETIME',
				'null' => TRUE
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('post');
	}
	public function down (){
		$this->forge->dropTable('post');
	}	
}


 ?>