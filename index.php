<?php

/*
 * Composer Autoload
 * */

require './vendor/autoload.php';

/*
 * Load Config Vars
 * */

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

/*
 * App Setup
 * */

require 'app/config/setup.php';

/*
 * Middleware
 * */

require  'app/config/middleware.php';

/*
 * DB Connect
 * */

require 'app/config/eloquent.php';


/*
 * Models
 * */

/*
 * Routes
 * */

/*
 * Run App
 * */

$app->run();

?>
