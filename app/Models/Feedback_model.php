<?php namespace App\Models;
use CodeIgniter\Model;
  
class Feedback_model extends Model
{
    protected $table = 'feedback';
      
    public function getFb($id = false)
    {
        if($id === false){
            return $this->table('feedback')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('feedback')
                        ->where('feedback.fb_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function insertFb($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function deleteFb($id)
    {
        return $this->db->table($this->table)->delete(['fb_id' => $id]);
    } 
}
?>