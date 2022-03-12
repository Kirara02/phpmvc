<?php 
class Mahasiswa_model {
    private $table = 'Mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $this->db->query("SELECT * FROM  $this->table WHERE id='$id'");
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data){
        $query = "INSERT Into mahasiswa VALUES
                    (:anime, :nama, :umur, :status) ";
        
        $this->db->query($query);
        $this->db->bind('anime', $data['anime']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->stmt->rowCount();
    }
}