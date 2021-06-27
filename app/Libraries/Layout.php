<?php 
namespace App\Libraries;

use \CodeIgniter\View\Parser;

class Layout{

    public function show(){

        $parser = \Config\Services::parser();

        $data = [
            'web_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading'
        ];

        $parser->setData($data);
        return $parser->render('about');
    }
}