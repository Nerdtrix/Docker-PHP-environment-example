<?php

 /**
*################################
*#> Powered by Nerdtrix.org <#
*################################
* 
* @copyright (c) Nerdtrix LLC 2021 - Current
* @author Name: Jerry Urena
* @author Social links:  @jerryurenaa
* @author email: jerryurenaa@gmail.com
* @author website: jerryurenaa.com
* @license MIT (included within this project)
* 
*/


/**
 * This is an example connecting to mysql database
 */

 
try 
{ 
    $config = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
    ];


    $db = new PDO(sprintf(
        "mysql:host=%s;dbname=%s", 
        "host.docker.internal", 
        "dockerexample"),  
        "user", 
        "password",
        $config
    );

    #connection successful
    print("DB connected");
}
catch(PDOException $e)
{
    die(print_r($e->getMessage()));
}