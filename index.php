<?php

require_once __DIR__.'/bootstrap/Bootstrap.php';

$conn = new DbConnection();

$conn->new_query("SELECT * FROM `teste` WHERE `id` = :id", 
    array('id' => 1), 
    function ($row) {
        echo $row['nome'] . '<br />'; 
    }
);