<?php

class HomeView extends BaseView {
    
    function __construct ($db) {
        parent::__construct($db);
        
        $this->title .= " - Home";
    }
    
    protected function render_body() {
        include __DIR__ . '/../templates/home/home.view.php';
    }

}