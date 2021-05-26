<?php namespace App\Models;
use CodeIgniter\Model;
  
class Article_model extends Model
{
    protected $table = 'articles';
      
    public function getArticle($id = false)
    {
        if($id === false){
            return $this->table('articles')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('articles')
                        ->where('articles.article_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function insertArticle($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateArticle($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['article_id' => $id]);
    }
    public function deleteArticle($id)
    {
        return $this->db->table($this->table)->delete(['article_id' => $id]);
    } 

}
?>