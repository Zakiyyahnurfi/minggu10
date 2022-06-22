<?php
class Prodi_model extends CI_Model {

    private $tabel = "prodi";

    public function getAll(){
        $query = $this->db->get($this->tabel);
        return $query->result();  
    }

    public function findById($id){
        $this->db->where("kode", $id);
        $query = $this->db->get($this->tabel);
        return $query->row();
    }

    public function save($data){

    }

    public function update($data){
        
    }

    public function delete($id){
        
    }

}