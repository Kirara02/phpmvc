<?php 

class App {
<<<<<<< HEAD
    protected $controller = 'Home';
    protected $method = 'Index';
=======
    protected $controller = 'home';
    protected $method = 'index';
>>>>>>> 13e5bc6a7bbc9d3d6ed51f3465fe633bff69b06b
    protected $params = [];

    public function __construct() {
        // contoller
        $url = $this->parseURL();
        if ($url === NULL) {
            $url = [$this->controller];
        }
        if(file_exists("../app/controllers/$url[0].php")){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controller. '.php';
        $this->controller = new $this->controller;

        // method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
<<<<<<< HEAD
                
=======
>>>>>>> 13e5bc6a7bbc9d3d6ed51f3465fe633bff69b06b
            }
        }

        // params
        if (!empty($url)){
            $this->params = array_values($url);
        }

        // jalankan function & method serta jalankan params jika ada
        call_user_func_array([$this->controller,$this->method], $this->params);

    }
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 13e5bc6a7bbc9d3d6ed51f3465fe633bff69b06b
