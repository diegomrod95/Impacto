<?php

/**
 * Description of Entidade
 *
 * @author Diego
 */
abstract class Entidade {

    protected $ativo;
    protected $data_cadastro;

    public function get_ativo() {
        return $this->ativo;
    }

    public function get_data_cadastro() {
        return $this->data_cadastro;
    }

    public function set_ativo($ativo) {
        $this->ativo = $ativo;
    }

    public function set_data_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

}
