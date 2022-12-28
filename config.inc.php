<?php
if ($_SERVER['SERVER_ADDR']=="127.0.0.1" || $_SERVER['HTTP_HOST']=="my-bt.in") $server_localhost = true;
else $server_localhost = false;

if ($server_localhost)
{
  $dbconfig = [
    'host'        => 'localhost',
    'driver'      => 'mysql',
    'database'    => 'name',
    'username'    => 'root',
    'password'    => '',
    'charset'     => 'utf8',
    'collation'   => 'utf8_general_ci',
    'prefix'      => ''
  ];
}
else
{
  $dbconfig = [
    'host'        => 'localhost',
    'driver'      => 'mysql',
    'database'    => '',
    'username'    => '',
    'password'    => '',
    'charset'     => 'utf8',
    'collation'   => 'utf8_general_ci',
    'prefix'      => ''
  ];
}

?>