<?php

abstract class BaseView {

    protected $title = "Impacto Tecnologia";

    function __construct() {
        
    }
    
    public function render () {
        include __DIR__ . '/../templates/base.view.php';
    }
    
    protected abstract function render_body();
    
}