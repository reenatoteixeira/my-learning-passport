<?php

$router->get('/', 'Http/controllers/index.php');
$router->get('/about', 'Http/controllers/about.php');
$router->get('/contact', 'Http/controllers/contact.php');

$router->get('/student/login', 'Http/controllers/student/login.php');

$router->get('/teacher/login', 'Http/controllers/teacher/login.php');
$router->get('/teacher/register', 'Http/controllers/teacher/register.php');