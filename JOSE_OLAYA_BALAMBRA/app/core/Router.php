<?php
class Router {
    public function run() {
        $url = $_GET['url'] ?? 'home';
        $params = explode('/', rtrim($url, '/'));
        
        $controllerName = ucfirst($params[0]) . 'Controller';
        $file = "../app/controllers/$controllerName.php";
        
        if (file_exists($file)) {
            require_once $file;
            $c = new $controllerName();
            $method = $params[1] ?? 'index';
            $c->$method();
        } else {
            require_once '../app/controllers/HomeController.php';
            $c = new HomeController();
            $c->index();
        }
    }
}
