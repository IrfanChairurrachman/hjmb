<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InformasiSeeder extends Seeder
{
	public function run()
	{
		//
		$data = [
            'info_name' => 'PT. Harapan Jaya Multi Bisnis',
            'info_contact1' => '+6282188478898',
            'info_email' => 'harapanjayamultibisnis@gmail.com',
			'info_alamat' => 'Pergudangan 88 Cluster Green Park, Jl. Insinyur Sutami No.5, Temmapaduae, Marusu, Maros Regency, South Sulawesi 90112 Makassar, ID 90112',
        ];
        $this->db->table('information')->insert($data);
	}
}
