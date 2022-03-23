<?php 
class Waifu extends Controller{
    public function index(){
        $data['judul'] = 'Data Waifu';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllWaifu();
        $this->view('templates/header', $data);
        $this->view('waifu/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] = 'Detail Waifu';
        $data['mhs'] = $this->model('Mahasiswa_model')->getWaifuById($id);
        $this->view('templates/header', $data);
        $this->view('waifu/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataWaifu($_POST)>0){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header ('location: '. BASEURL . '/waifu');
            exit;
        }else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header ('location: '. BASEURL . '/waifu');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Mahasiswa_model')->hapusWaifu($id)>0){
            Flasher::setFlash('Berhasil','dihapus','success');
            header ('location: '.BASEURL. '/waifu');
            exit;
        }else{
            Flasher::setFlash('Gagal','dihapus','danger');
            header ('location: '.BASEURL. '/waifu');
            exit;
        }
    }
    public function edit($id){
        $data['judul'] = "Edit Waifu";
        $data['mhs'] = $this->model('Mahasiswa_model')->getWaifuById($id);
        $this->view('templates/header',$data);
        $this->view('waifu/edit', $data);
        $this->view('templates/footer');
    }
}