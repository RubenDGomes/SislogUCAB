<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['sislog/login'] = 'sislog/login';
// $route['sislog/register'] = 'sislog/register';
// $route['sislog'] = 'sislog/login';
// $route['sislog/(:any)'] = 'sislog/view/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
