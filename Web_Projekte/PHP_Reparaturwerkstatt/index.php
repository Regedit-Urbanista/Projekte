<?php
require 'core/bootstrap.php';

$routes = [
    '' => 'AusgabeController@index',
    '/form' => 'EinfuegenController@index',
    '/form/speichern' => 'EinfuegenController@validation',
    '/ausgabe' => 'AusgabeController@index',
    '/bearbeiten' => 'BearbeitenController@index',
    '/update' => 'BearbeitenController@update',
];

$db = [
	'name'     => 'reparatur',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');