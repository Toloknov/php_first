<?php
require 'autoload.php';
use Core\Router;
use Core\Request;

$request = new Request();

$config = require "config.php";

$router = new Router($config['routes']);

$router->dispatch($request);

