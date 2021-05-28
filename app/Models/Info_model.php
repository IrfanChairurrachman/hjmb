<?php namespace App\Models;
use CodeIgniter\Model;
  
class Info_model extends Model
{
    protected $table = 'information';
      
    public function getInfo($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['info_id' => $id]);
        }   
    }
    public function updateInfo($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['info_id' => $id]);
    }
}
?>