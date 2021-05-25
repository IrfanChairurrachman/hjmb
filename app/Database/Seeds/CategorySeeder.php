<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
	public function run()
	{
		//
		$category_data = [
			[
				'category_name'     => 'Pipa',
				'category_status'   => 'Active'
			],
			[
				'category_name'     => 'Spandek',
				'category_status'   => 'Active'
			],
			[
				'category_name'     => 'Baja Ringan',
				'category_status'   => 'Active'
			],
			[
				'category_name'     => 'Aneka Fiber',
				'category_status'   => 'Active'
			]
		];
		foreach($category_data as $data){
			// insert semua data ke tabel
			$this->db->table('categories')->insert($data);
		}
	}
}
