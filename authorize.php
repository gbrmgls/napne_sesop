<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$username = 'admin';
$password = 'admin';

if( (!isset($_SERVER['PHP_AUTH_USER'])) || (!isset($_SERVER['PHP_AUTH_PW'])) ||
    ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password))
{
    //header('HTTP/1.1 401 Unathorized');
    header('WWW-Authenticate: Basic realm="APP_Napne"');
    exit("Para acessar esta página você precisa utilizar um nome de usuário válido");
}
