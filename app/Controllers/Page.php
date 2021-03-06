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
		$pager = \Config\Services::pager();

		$data['products'] = $this->product_model->paginate(6, 'bootstrap');
		$data['pager'] = $this->product_model->pager;
		$data['pipa'] = $this->product_model->where('category_id', 1)->findAll();
		$data['spandek'] = $this->product_model->where('category_id', 2)->findAll();
		$data['baja'] = $this->product_model->where('category_id', 3)->findAll();
		$data['fiber'] = $this->product_model->where('category_id', 4)->findAll();

		foreach($data as $type => $each){
			foreach($each as $key => $row){
				$data[$type][$key]['product_image'] = explode(',', $row['product_image']);
			}
		}
		// dd($data);
		return view('produk', $data);
	}
	public function berita($id = false)
	{
		$pager = \Config\Services::pager();

		if($id === false){
			$data['news'] = $this->news_model->paginate(2, 'bootstrap');
			$data['pager'] = $this->news_model->pager;
			$data['news_recent'] = $this->news_model->limit('3 ')->getNews();
			$data['news_recent'] = array_reverse($data['news_recent']);
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
		$pager = \Config\Services::pager();

		if($id === false){
			$data['article'] = $this->article_model->paginate(2, 'bootstrap');
			$data['pager'] = $this->article_model->pager;
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