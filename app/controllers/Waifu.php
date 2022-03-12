<?php 
class Waifu extends Controller{
    public function index(){
        $data['judul'] = 'Data Waifu';
        $data['mhs'] = $this->model('Waifu_model')->getAllWaifu();
        $this->view('templates/header', $data);
        $this->view('waifu/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] = 'Detail Waifu';
        $data['mhs'] = $this->model('Waifu_model')->getWaifuById($id);
        $this->view('templates/header', $data);
        $this->view('waifu/detail', $data);
        $this->view('templates/footer');
    }
    public function input(){
        $data['judul'] = 'Input Waifu';
        $this->view('templates/header', $data);
        $this->view('waifu/input', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Waifu_model')->tambahDataWaifu($_POST)>0){
            header ('location: '. BASEURL . '/waifu');
            exit;
        }
    }
}