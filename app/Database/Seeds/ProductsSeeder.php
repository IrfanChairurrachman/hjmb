<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
	public function run()
	{
		//
		$product_data = [
			[
				'category_id'     => 1,
				'product_name'   => 'Pipa Rajalon',
				'product_price'   => 200000,
				'product_status'   => 'Active',
				'product_image'   => 'RAJALON.jpg',
				'product_description'   => 'Pipa Rajalon yang memang Raja'
			],
			[
				'category_id'     => 2,
				'product_name'   => 'Seng Spandek Galv AZ100 KR5',
				'product_price'   => 150000,
				'product_status'   => 'Active',
				'product_image'   => 'sengspandek1.jpeg',
				'product_description'   => 'Seng Spandek luar biasa tahan puting beliung'
			]
		];
		foreach($product_data as $data){
			// insert semua data ke tabel
			$this->db->table('products')->insert($data);
		}
	}
}
