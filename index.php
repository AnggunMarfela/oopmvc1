<?php
// Susunan file: oopmvc/index.php

// Autoload models and controllers
require_once 'model/model_anggota.php';
require_once 'controller/anggota.php';

// Parse the URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define the base path of the application
$basePath = '/oopmvc/index.php';

// Define routes
$routes = [
    $basePath => 'index',
    $basePath . '/detail' => 'detail'
];

// Route handling
if (array_key_exists($uri, $routes)) {
    $action = $routes[$uri];

    if ($action === 'detail' && isset($_GET['Id'])) {
        $id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_NUMBER_INT);
        if ($id !== false) {
            detail($id);
        } else {
            http_response_code(400);
            echo "<html><body><h1>Invalid ID</h1></body></html>";
        }
    } elseif ($action === 'index') {
        index();
    } else {
        http_response_code(400);
        echo "<html><body><h1>Bad Request</h1></body></html>";
    }
} else {
    http_response_code(404);
    echo "<html><body><h1>Page not found</h1></body></html>";
}
?>
