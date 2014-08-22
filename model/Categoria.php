<?php

final class Categoria extends Entidade {

    private $id;
    private $super;
    private $nome;
    private $imagem;
    private $descricao;
    
    public function get_id() {
        return $this->id;
    }

    public function get_super() {
        return $this->super;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_imagem() {
        return $this->imagem;
    }

    public function get_descricao() {
        return $this->descricao;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_super($super) {
        $this->super = $super;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
    }

    public function set_imagem($imagem) {
        $this->imagem = $imagem;
    }

    public function set_descricao($descricao) {
        $this->descricao = $descricao;
    }

}
