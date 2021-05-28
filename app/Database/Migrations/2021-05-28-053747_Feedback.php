<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Feedback extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'fb_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'fb_message'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'fb_name'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'fb_email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'fb_subject'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('fb_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('feedback', TRUE);
	}

	public function down()
	{
		//
		$this->forge->dropTable('feedback');
	}
}
