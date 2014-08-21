<?php

/**
 * Description of Usuario
 *
 * @author Diego
 */
class Usuario extends Entidade {
    private $id;
    private $username;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $genero;
    private $data_nascimento;
    private $email;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $pais;
    private $telefone;
    private $celular;
    private $hash;
    private $seed;
    private $temp_hash;
    
    public function get_id() {
        return $this->id;
    }

    public function get_username() {
        return $this->username;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_sobrenome() {
        return $this->sobrenome;
    }

    public function get_cpf() {
        return $this->cpf;
    }

    public function get_genero() {
        return $this->genero;
    }

    public function get_data_nascimento() {
        return $this->data_nascimento;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_endereco() {
        return $this->endereco;
    }

    public function get_bairro() {
        return $this->bairro;
    }

    public function get_cidade() {
        return $this->cidade;
    }

    public function get_estado() {
        return $this->estado;
    }

    public function get_pais() {
        return $this->pais;
    }

    public function get_telefone() {
        return $this->telefone;
    }

    public function get_celular() {
        return $this->celular;
    }

    public function get_hash() {
        return $this->hash;
    }

    public function get_seed() {
        return $this->seed;
    }

    public function get_temp_hash() {
        return $this->temp_hash;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_username($username) {
        $this->username = $username;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
    }

    public function set_sobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function set_cpf($cpf) {
        $this->cpf = $cpf;
    }

    public function set_genero($genero) {
        $this->genero = $genero;
    }

    public function set_data_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function set_endereco($endereco) {
        $this->endereco = $endereco;
    }

    public function set_bairro($bairro) {
        $this->bairro = $bairro;
    }

    public function set_cidade($cidade) {
        $this->cidade = $cidade;
    }

    public function set_estado($estado) {
        $this->estado = $estado;
    }

    public function set_pais($pais) {
        $this->pais = $pais;
    }

    public function set_telefone($telefone) {
        $this->telefone = $telefone;
    }

    public function set_celular($celular) {
        $this->celular = $celular;
    }

    public function set_hash($hash) {
        $this->hash = $hash;
    }

    public function set_seed($seed) {
        $this->seed = $seed;
    }

    public function set_temp_hash($temp_hash) {
        $this->temp_hash = $temp_hash;
    }
}
