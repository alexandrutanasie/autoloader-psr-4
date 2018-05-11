<?php
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('VENDOR', ROOT . 'vendor' . DIRECTORY_SEPARATOR);
 
require VENDOR . 'autoload.php';


use App\Users\User;
use App\Users\Job;

new User(); //output Hello world
new Job(); //output I'm programmer

