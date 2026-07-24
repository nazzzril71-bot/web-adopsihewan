<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

// Menggunakan koneksi internal Railway
$db_host = getenv('DB_HOST') ?: 'mysql.railway.internal';
$db_port = getenv('DB_PORT') ?: '3306'; // Port internal wajib 3306
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASSWORD') ?: 'VjAwFwTZrlTBMlcPvABAlSULyBbLZwKH';
$db_name = getenv('DB_NAME') ?: 'railway';

$db['default'] = array(
    'dsn'      => '',
    'hostname' => $db_host,
    'username' => $db_user,
    'password' => $db_pass,
    'database' => $db_name,
    'dbdriver' => 'mysqli',
    'dbport'   => $db_port,
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => FALSE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);