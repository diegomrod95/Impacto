<?php

final class DbConnection {
    
    private $host = 'localhost';
    private $username = 'equip431_impacto';
    private $password = 'Mega@code';
    private $db_name = 'equip431_impacto';
    
    private function get_string() {
        return 'mysql:host='.$this->host.';dbname='.$this->db_name;
    }
    
    private function get_connection () {
        $conn = new PDO($this->get_string(), $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        return $conn;
    }
    
    public function new_query($query, $args, $callback) {
        $conn = $this->get_connection();
        $stmt = $conn->prepare($query);
        $stmt->execute($args);
        
        while ($row = $stmt->fetch()) {
            $callback($row);
        }
    }
    
    public function new_entity_query($query, $args, $class, $callback) {
        $conn = $this->get_connection();
        
        $stmt = $conn->prepare($query);
        $stmt->execute($args);
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        
        while ($obj = $stmt->fetch()) {
            $callback($obj);
        }
    }
    
    public function new_command($query, $args) {
        $conn = $this->get_connection();
        $stmt = $conn->prepare($query);
        $stmt->execute($args);
        
        return $stmt->rowCount();
    }
    
    public function get_host() {
        return $this->host;
    }

    public function get_username() {
        return $this->username;
    }

    public function get_password() {
        return $this->password;
    }

    public function get_db_name() {
        return $this->db_name;
    }

    public function set_host($host) {
        $this->host = $host;
    }

    public function set_username($username) {
        $this->username = $username;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function set_db_name($db_name) {
        $this->db_name = $db_name;
    }

}