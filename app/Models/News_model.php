<?php namespace App\Models;
use CodeIgniter\Model;
  
class News_model extends Model
{
    protected $table = 'news';
      
    public function getNews($id = false)
    {
        if($id === false){
            return $this->table('news')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('news')
                        ->where('news.news_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function insertNews($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateNews($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['news_id' => $id]);
    }
    public function deleteNews($id)
    {
        return $this->db->table($this->table)->delete(['news_id' => $id]);
    } 

}
?>