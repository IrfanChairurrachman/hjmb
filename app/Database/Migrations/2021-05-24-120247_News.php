<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'news_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'news_title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'news_author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'news_content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'news_image'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '250',
                'null'              => TRUE,
            ],
			'news_status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('news_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('news', TRUE);
	}

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('news');
	}
}
