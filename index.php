<?php
// index.php

require_once 'model.php';
require_once 'controller.php';

$uri = $_SERVER['REQUEST_URI'];
if (preg_match('/index\.php$/', $uri)) {
    list_action();
} elseif (preg_match('/index\.php\/show/', $uri) && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page not found</h1></body></html>';
}
