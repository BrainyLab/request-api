<?php

include_once "./vendor/autoload.php";

use Request\Create;

/**
 * Instance Library
 */
$request = new Create('http://localhost:3333', '');

/**
 * Post Method
 */
$data = $request->Post([], '/sessions');

/**
 * Debug Response
 */
var_dump($data);
