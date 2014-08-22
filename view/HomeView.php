<?php

class HomeView extends BaseView {
    
    function __construct () {
        parent::__construct();
        
        $this->title .= " - Home";
    }
    
    protected function render_body() {
        include __DIR__ . '/../templates/home/home.view.php';
    }

}