<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
	public function run()
	{
		//
		$news_data = [
			[
				'news_title'   => 'Berita Pipa Rajalon',
				'news_author'   => 'John Doe',
				'news_status'   => 'Published',
				'news_image'   => 'RAJALON.jpg',
				'news_content'   => 'Ini berita tentang Pipa Rajalon yang memang Raja Ini berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang RajaIni berita tentang Pipa Rajalon yang memang Raja'
			],
			[
				'news_title'   => 'Seng Spandek Galv AZ100 KR5',
				'news_author'   => 'admin2',
				'news_status'   => 'Published',
				'news_image'   => 'sengspandek1.jpeg',
				'news_content'   => 'Ini berita tentang Seng Spandek luar biasa tahan puting beliung Ini berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliungIni berita tentang Seng Spandek luar biasa tahan puting beliung'
			]
		];
		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('news')->insert($data);
		}
	}
}
