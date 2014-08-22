<?php

abstract class BaseView {

    protected $title = "Impacto Tecnologia";
    protected $categorias = array();
    protected $db;

    private function get_categorias_from_db() {
        $query = "SELECT * FROM `categoria` WHERE `ativo` = 'S'";
        $this->categorias = 
                $this->db->fetch_entity_query($query, array(), 'Categoria');
    }

    function __construct() {
        $this->db = new DbConnection();
        $this->get_categorias_from_db();
    }

    public function render() {
        include __DIR__ . '/../templates/base.view.php';
    }

    protected abstract function render_body();
}
