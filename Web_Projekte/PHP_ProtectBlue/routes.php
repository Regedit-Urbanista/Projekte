<?php
$page = $_GET['page'] ?? 'home';

// Erlaubte Routes
$routes = [
    'newsletter'    => 'php/newsletter.php',
    'luftverschmutzung'    => 'php/luftverschmutzung.php', 
    'review'    => 'php/review.php', 
    'login'    => 'login.php',
    'register'    => 'register.php',
    'registersuccess'    => 'registersuccess.php',
    'accountmanagement'    => 'accountmanagement.php',
    'co2recher'    => 'co2recher.php', 
];

$include = '404.php'; // Standard => Fehlerseite!

// Wenn Route existiert, wird sie eingebunden
if(array_key_exists($page, $routes)) {
    $include = $routes[$page];
}

include $include;
