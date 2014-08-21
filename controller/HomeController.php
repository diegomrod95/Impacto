<?php

final class HomeController extends BaseController {

    function __construct () {
        require_once __DIR__ . '/../view/HomeView.php';
        
        $this->view = new HomeView();
    }

    public function Index () {
        $this->view->render();
    }
    
}