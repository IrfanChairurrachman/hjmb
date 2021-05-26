<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\Product_model;
use App\Models\Category_model;
use App\Models\News_model;
  
class News extends Controller
{
    protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->news_model = new News_model();
    }
 
    public function index()
    {
        $data['news'] = $this->news_model->getNews();
        echo view('admin/news', $data);
    }
    
    public function create()
    {
        return view('admin/news_create');
    }
    
    public function store()
    {
        $validation =  \Config\Services::validation();
    
        // get file upload
        $image = $this->request->getFile('news_image');
        // random name file
        $name = $image->getRandomName();
    
        $data = array(
            'news_title'          => $this->request->getPost('news_title'),
            'news_author'         => $this->request->getPost('news_author'),
            'news_status'        => $this->request->getPost('news_status'),
            'news_image'         => $name,
            'news_content'   => $this->request->getPost('news_content'),
        );
        // dd($data);
        if($validation->run($data, 'news') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/news/create'));
        } else {
            // upload file 
            $image->move(ROOTPATH . 'public/uploads', $name);
            // insert
            $simpan = $this->news_model->insertNews($data);
            if($simpan)
            {
                session()->setFlashdata('success', 'Created News successfully');
                return redirect()->to(base_url('admin/news')); 
            }
        }
    }
    public function show($id)
    {  
        $data['news'] = $this->news_model->getNews($id);
        echo view('admin/news_show', $data);
    }
    
    public function edit($id)
    {  
        $data['news'] = $this->news_model->getNews($id);
        echo view('admin/news_edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('news_id');
    
        $validation =  \Config\Services::validation();
    
        // get file
        $image = $this->request->getFile('news_image');
        // random name file
        $name = $image->getRandomName();
    
        $data = array(
            'news_title'          => $this->request->getPost('news_title'),
            'news_author'         => $this->request->getPost('news_author'),
            'news_status'        => $this->request->getPost('news_status'),
            'news_image'         => $name,
            'news_content'   => $this->request->getPost('news_content'),
        );
        
        if($validation->run($data, 'news') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/news/edit/'.$id));
        } else {
            // upload
            $image->move(ROOTPATH . 'public/uploads', $name);
            // update
            $ubah = $this->news_model->updateNews($data, $id);
            if($ubah)
            {
                session()->setFlashdata('info', 'Updated News successfully');
                return redirect()->to(base_url('admin/news')); 
            }
        }
    }
    public function delete($id)
    {
        $hapus = $this->news_model->deleteNews($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted News successfully');
            return redirect()->to(base_url('admin/news')); 
        }
    }

}
?>