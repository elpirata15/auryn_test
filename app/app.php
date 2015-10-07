<?php

require  dirname(__DIR__). '/vendor/autoload.php';

use App\Core\ClientSoap;
use App\Core\ServerSoap;
use Auryn\Injector;

$class = new ServerSoap(new ClientSoap());
var_dump($class->doSomething());
$dic = new Injector;
$server = $dic->make('ServerSoap');
