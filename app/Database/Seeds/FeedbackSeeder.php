<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FeedbackSeeder extends Seeder
{
	public function run()
	{
		//
		$feedback_data = [
			[
				'fb_message' => 'Ini adalah feedback pertama',
				'fb_name' => 'Nama1',
				'fb_email' => 'nama@gmail.com',
				'fb_subject' => 'subject feedback',
			],
			[
				'fb_message' => 'Ini adalah feedback pertama',
				'fb_name' => 'Nama1',
				'fb_email' => 'nama@gmail.com',
				'fb_subject' => 'subject feedback',
			],
		];
		foreach($feedback_data as $data){
			// insert semua data ke tabel
			$this->db->table('feedback')->insert($data);
		}
	}
}
