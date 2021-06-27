<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\News_model;
use App\Models\Article_model;
  
class Article extends Controller
{
    protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->article_model = new Article_model();
    }
 
    public function index()
    {
        $data['article'] = $this->article_model->getArticle();
        echo view('admin/article', $data);
    }
    
    public function create()
    {
        return view('admin/article_create');
    }
    
    public function store()
    {
        $validation =  \Config\Services::validation();
    
        // get file upload
        $image = $this->request->getFile('article_image');
        // random name file
        echo $image;
        // $name = $image->getRandomName();
    
        // $data = array(
        //     'article_title'          => $this->request->getPost('article_title'),
        //     'article_author'         => $this->request->getPost('article_author'),
        //     'article_status'        => $this->request->getPost('article_status'),
        //     'article_image'         => $name,
        //     'article_content'   => $this->request->getPost('article_content'),
        // );
        // // dd($data);
        // if($validation->run($data, 'article') == FALSE){
        //     session()->setFlashdata('inputs', $this->request->getPost());
        //     session()->setFlashdata('errors', $validation->getErrors());
        //     return redirect()->to(base_url('admin/article/create'));
        // } else {
        //     // upload file 
        //     $image->move(ROOTPATH . 'public/uploads', $name);
        //     // insert
        //     $simpan = $this->article_model->insertArticle($data);
        //     if($simpan)
        //     {
        //         session()->setFlashdata('success', 'Created article successfully');
        //         return redirect()->to(base_url('admin/article')); 
        //     }
        // }
    }
    public function show($id)
    {  
        $data['article'] = $this->article_model->getArticle($id);
        echo view('admin/article_show', $data);
    }
    
    public function edit($id)
    {  
        $data['article'] = $this->article_model->getArticle($id);
        echo view('admin/article_edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('article_id');
    
        $validation =  \Config\Services::validation();
    
        // get file
        $image = $this->request->getFile('article_image');
        // random name file
        $name = $image->getRandomName();
    
        $data = array(
            'article_title'          => $this->request->getPost('article_title'),
            'article_author'         => $this->request->getPost('article_author'),
            'article_status'        => $this->request->getPost('article_status'),
            'article_image'         => $name,
            'article_content'   => $this->request->getPost('article_content'),
        );
        
        if($validation->run($data, 'article') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/article/edit/'.$id));
        } else {
            // upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            // update
            $ubah = $this->article_model->updateArticle($data, $id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated article successfully');
                return redirect()->to(base_url('admin/article')); 
            }
        }
    }
    public function delete($id)
    {
        $hapus = $this->article_model->deleteArticle($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted article successfully');
            return redirect()->to(base_url('admin/article')); 
        }
    }

}
?>