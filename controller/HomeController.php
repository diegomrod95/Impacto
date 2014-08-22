<?php

final class HomeController extends BaseController {

    function __construct () {
        parent::__construct();
        
        require_once __DIR__ . '/../view/HomeView.php';
        
        // dependency injection da classe DbConncetion para a view
        $this->view = new HomeView($db);
    }

    public function Index () {
        $this->view->render();
    }
    
}