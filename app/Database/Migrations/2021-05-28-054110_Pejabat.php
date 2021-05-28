<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pejabat extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'pejabat_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'pejabat_name'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'pejabat_jabatan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'pejabat_kontak'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'pejabat_image'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '250',
                'null'              => TRUE,
            ],
		]);

		// Membuat primary key
		$this->forge->addKey('pejabat_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('pejabat', TRUE);
	}

	public function down()
	{
		//
		$this->forge->dropTable('pejabat');
	}
}
