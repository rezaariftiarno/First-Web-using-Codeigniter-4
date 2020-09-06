<?php namespace App\Database\Migrations; 

/**
 * 
 */
class Komentar extends \CodeIgniter\Database\Migration{

	public function up (){
		$this->forge->addField([
			'id' =>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto-increment' => TRUE,
			],
			'id_barang' =>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'id_user' =>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'Komentar' =>[
				'type' => 'TEXT',
			],
			'created by' =>[
				'type'=>'INT',
				'constraint' => 11,
			],
			'created date' =>[
				'type'=> 'DATETIME',
			],
			'updated by' =>[
				'type'=> 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated date' =>[
				'type'=> 'DATETIME',
				'null' => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_user','user','id');
		$this->forge->addForeignKey('id_barang','barang','id');
		$this->forge->createTable('komentar');
	}
	public function down (){
		$this->forge->dropTable('komentar');
	}	
}


 ?>