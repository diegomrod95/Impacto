<?php

class HomeView extends BaseView {
    
    function __construct () {
        parent::__construct();
        
        $this->title .= " - Home";
    }
    
    
    protected function render_body() {
        echo "Estamos no controller Home";
    }

}