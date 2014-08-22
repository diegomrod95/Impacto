<?php

abstract class BaseController {
    
    protected $db;
    protected $view;
    
    public function __construct() {
        $db = new DbConnection();
    }
}