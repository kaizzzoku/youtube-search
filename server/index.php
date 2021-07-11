<?php

require './vendor/autoload.php';

(new \App\Env('.env'))->load();

$core = new App\Core();

$core->handle();