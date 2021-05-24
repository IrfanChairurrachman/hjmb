<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articles extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'article_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'article_title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'article_author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'article_content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'article_image'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '250',
                'null'              => TRUE,
            ],
			'article_status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('article_id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('articles', TRUE);
	}

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('articles');
	}
}
