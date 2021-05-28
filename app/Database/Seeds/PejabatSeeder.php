<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PejabatSeeder extends Seeder
{
	public function run()
	{
		//
		$pejabat_data = [
			[
				'pejabat_name' => 'Nama1',
				'pejabat_jabatan' => 'Jabatan1',
			],
			[
				'pejabat_name' => 'Nama2',
				'pejabat_jabatan' => 'Jabatan2',
			],
		];
		foreach($pejabat_data as $data){
			// insert semua data ke tabel
			$this->db->table('pejabat')->insert($data);
		}
	}
}
