<?php

final class TesteController extends BaseController {
    
    public function Index () {
        echo "Teste";
    }
    
    public function details ($arg) {
        echo $arg;
    }
}