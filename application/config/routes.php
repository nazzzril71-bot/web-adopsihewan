<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Tambahkan route manual agar login dan dashboard selalu terbaca sempurna
$route['login'] = 'login';
$route['dashboard'] = 'dashboard';
$route['pet'] = 'pet';