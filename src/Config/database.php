<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 9.03.16
 * Time: 11:40
 */
$connectionOptions = array(
    'driver' => 'pdo_mysql',
    'dbname' => 'reservations',
    'user' => 'helmes',
    'password' => 'bootcamp',
    'host' => 'localhost',
    'charset' => 'utf8',
    'driverOptions' => array(
        1002 => 'SET NAMES UTF8'
    )
);
