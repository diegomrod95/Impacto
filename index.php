<?php

require_once __DIR__.'/bootstrap/Bootstrap.php';
require_once __DIR__.'/routes.php';

/**
 * Função auxiliar para tratar warnings e notices como exceptions.
 */
function custom_error_handler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        return;
    }
 
    switch ($errno) {
    case E_USER_ERROR:
        echo "<b>ERROR</b> [$errno] $errstr<br />\n";
        echo "  Fatal error on line $errline in file $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Aborting...<br />\n";
        exit(1);
        break;
 
    case E_USER_WARNING:
        throw new Exception("<b>WARNING</b> [$errno] $errstr<br />\n");
        break;
 
    case E_USER_NOTICE:
        throw new Exception("<b>NOTICE</b> [$errno] $errstr<br />\n");
        break;
 
    default:
        throw new Exception("Unknown error type: [$errno] $errstr<br />\n");
        break;
    }
 
    return true;
}

// Define o handler customizado para tratamento de warnings e notices
set_error_handler("custom_error_handler");

/**
 * =============================================================================
 * == ROTEAMENTO DE URL'S                                                     ==
 * =============================================================================
 */

$url = explode('/', $_GET['url']);;
$ctr = NULL;

if (isset($url) && isset($routes)) {

    $ctr = $routes[$url[0]];

} else {

    die("Erro! Url nao definida.");

}

try {
    
    require_once __DIR__ . '/controller/' . $ctr . '.php';
    
    $controller = new $ctr();
    
    if (sizeof($url) == 3) {
        
        // GET: controller/action/id
        $controller->$url[1]($url[2]);    
    
    } else {
        
        if (isset($url[1])) {
            
            // GET: controller/action
            $controller->$url[1]();
        
        } else {
            
            // GET: controller
            $controller->Index();
        
        }
    }
} catch (Exception $ex) {
    
    $index = new HomeController();
    $index->Index();

}