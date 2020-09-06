<?php namespace App\Database\Migrations; 

/**
 * 
 */
class Barang extends \CodeIgniter\Database\Migration{

	public function up (){
		$this->forge->addField([
			'id' =>[
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto-increment' => TRUE,
			],
			'nama' =>[
				'type' => 'TEXT',
				'constraint' => '100',
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'stok' =>[
				'type'=>'INT',
				'constraint'=>11,
			],
			'gambar' => [
				'type'=>'TEXT',
				'null'=>TRUE,
			],
			// 'created by' =>[
			// 	'type'=>'INT',
			// 	'constraint' => 11,
			// ],
			// 'created date' =>[
			// 	'type'=> 'DATETIME',
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
		$this->forge->createTable('barang');
	}
	public function down (){
		$this->forge->dropTable('barang');
	}	
}


 ?>