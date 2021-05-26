<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $category = [
        'category_name'     => 'required',
        'category_status'     => 'required'
    ];
     
    public $category_errors = [
        'category_name' => [
            'required'    => 'Nama category wajib diisi.',
        ],
        'category_status'    => [
            'required' => 'Status category wajib diisi.'
        ]
    ];
	public $product = [
		'category_id'           => 'required',
		'product_name'          => 'required',
		'product_price'         => 'required',
		'product_status'        => 'required',
		'product_image'         => 'uploaded[product_image]|mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[product_image,1000]',
		'product_description'   => 'required'
	];
	 
	public $product_errors = [
		'category_id'   => [
			'required'  => 'Nama category wajib diisi.',
		],
		'product_name'  => [
			'required'  => 'Nama product wajib diisi.'
		],
		'product_price' => [
			'required'  => 'Harga product wajib diisi.'
		],
		'product_status'=> [
			'required'  => 'Status product wajib diisi.'
		],
		'product_image'=> [
			'mime_in'   => 'Gambar product hanya boleh diisi dengan jpg, jpeg, png atau gif.',
			'max_size'  => 'Gambar product maksimal 1mb',
			'uploaded'  => 'Gambar product wajib diisi'
		],
		'product_description'   => [
			'required'          => 'Description product wajib diisi.'
		]
	];

	// NEWS VALIDATION
	public $news = [
		'news_title'          => 'required',
		'news_author'         => 'required',
		'news_content'        => 'required',
		'news_image'         => 'uploaded[news_image]|mime_in[news_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[news_image,1000]',
		'news_status'   => 'required'
	];
	 
	public $news_errors = [
		'news_title'  => [
			'required'  => 'Judul berita wajib diisi.'
		],
		'news_author' => [
			'required'  => 'Penulis berita wajib diisi.'
		],
		'news_content'   => [
			'required'          => 'konten berita wajib diisi.'
		],
		'news_image'=> [
			'mime_in'   => 'Gambar news hanya boleh diisi dengan jpg, jpeg, png atau gif.',
			'max_size'  => 'Gambar news maksimal 1mb',
			'uploaded'  => 'Gambar berita wajib diisi'
		],
		'news_status'=> [
			'required'  => 'Status berita wajib diisi.'
		]
	];

	// NEWS VALIDATION
	public $article = [
		'article_title'          => 'required',
		'article_author'         => 'required',
		'article_content'        => 'required',
		'article_image'         => 'uploaded[article_image]|mime_in[article_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[article_image,1000]',
		'article_status'   => 'required'
	];
	 
	public $article_errors = [
		'article_title'  => [
			'required'  => 'Judul berita wajib diisi.'
		],
		'article_author' => [
			'required'  => 'Penulis berita wajib diisi.'
		],
		'article_content'   => [
			'required'          => 'konten berita wajib diisi.'
		],
		'article_image'=> [
			'mime_in'   => 'Gambar article hanya boleh diisi dengan jpg, jpeg, png atau gif.',
			'max_size'  => 'Gambar article maksimal 1mb',
			'uploaded'  => 'Gambar article wajib diisi'
		],
		'article_status'=> [
			'required'  => 'Status berita wajib diisi.'
		]
	];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
