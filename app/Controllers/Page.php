<?php namespace App\Controllers;
use App\Models\News_model;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\Article_model;

class Page extends BaseController
{
	protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->news_model = new News_model();
		$this->category_model = new Category_model();
        $this->product_model = new Product_model();
		$this->article_model = new Article_model();
    }

	public function produk()
	{
		$data['products'] = $this->product_model->getProduct();
		return view('produk', $data);
	}
	public function berita($id = false)
	{
		if($id === false){
			$data['news'] = $this->news_model->getNews();
			return view('berita', $data);
		} else {
			$data['news'] = $this->news_model->getNews($id);
			return view('berita_show', $data);
		}
	}
	// public function berita{id}()
	// {
	// 	return view('berita{id}');
	// }
    public function artikel($id = false)
	{
		if($id === false){
			$data['article'] = $this->article_model->getArticle();
			return view('artikel', $data);
		} else {
			$data['article'] = $this->article_model->getArticle($id);
			// dd($data);
			return view('artikel_show', $data);
		}
	}
	// public function artikel{id}()
	// {
	// 	return view('artikel{id}');
	// }
	public function about()
	{
		return view('about');;
	}
	public function contact()
	{
		return view('contact');;
	}
	public function service()
	{
		return view('services');;
	}

}