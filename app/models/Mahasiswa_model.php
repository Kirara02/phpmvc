<?php 
class Mahasiswa_model {
<<<<<<< HEAD
    private $table = 'waifu';
=======
    private $table = 'Mahasiswa';
>>>>>>> 13e5bc6a7bbc9d3d6ed51f3465fe633bff69b06b
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    
<<<<<<< HEAD
    public function getAllWaifu(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }
    public function getWaifuById($id){
        $this->db->query("SELECT * FROM  $this->table WHERE id='$id'");
        return $this->db->single();
    }
    public function tambahDataWaifu($data){
        $query = "INSERT Into $this->table VALUES
                    ('', :anime, :nama, :umur, :status) ";
        
        $this->db->query($query);
        $this->db->bind('anime', $data['anime']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
=======
    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $this->db->query("SELECT * FROM  $this->table WHERE id='$id'");
        return $this->db->single();
    }
>>>>>>> 13e5bc6a7bbc9d3d6ed51f3465fe633bff69b06b
}