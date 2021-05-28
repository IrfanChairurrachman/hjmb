<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Information extends Migration
{
	public function up()
	{
		//
		// Membuat kolom/field untuk tabel informasi
		$this->forge->addField([
			'info_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'info_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'		 => 'PT. Harapan Jaya Multi Bisnis'
			],
			'info_contact1'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'info_contact2'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'info_email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'info_alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('info_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('information', TRUE);
	}

	public function down()
	{
		//
		$this->forge->dropTable('information');
	}
}
