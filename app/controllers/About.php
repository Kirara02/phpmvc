<?php 
class About extends Controller {
    public function index($nama = "kirara", $job="programer", $age = 17){
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['judul'] = 'About me';
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'pages';
        $this->view('templates/header',$data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}