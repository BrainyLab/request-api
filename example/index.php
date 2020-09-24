<?php

include_once "./vendor/autoload.php";

use BrainyLab\Request;

/**
 * Instance Library
 */
$request = new Request('http://localhost:3333', '');

/**
 * Post Method
 */
$data = $request->Post([], '/sessions');

/**
 * Debug Response
 */
var_dump($data);
