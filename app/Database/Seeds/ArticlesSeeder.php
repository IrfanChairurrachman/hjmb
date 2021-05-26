<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArticlesSeeder extends Seeder
{
	public function run()
	{
		//
		$articles_data = [
			[
				'article_title'   => 'Berita Pipa Rajalon',
				'article_author'   => 'John Doe',
				'article_status'   => 'Published',
				'article_image'   => 'RAJALON.jpg',
				'article_content'   => 'Ini artikel tentang Pipa Rajalon yang memang Raja'
			],
			[
				'article_title'   => 'INI ARTIKEL Seng Spandek Galv AZ100 KR5',
				'article_author'   => 'admin2',
				'article_status'   => 'Published',
				'article_image'   => 'sengspandek1.jpeg',
				'article_content'   => 'Ini artikel tentang Seng Spandek luar biasa tahan puting beliung'
			]
		];
		foreach($articles_data as $data){
			// insert semua data ke tabel
			$this->db->table('articles')->insert($data);
		}
	}
}
