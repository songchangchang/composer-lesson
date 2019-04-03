<?php

require 'vendor/autoload.php';

$enging = new Mustache_Engine();

echo $enging->render('Hello {{ name }}',['name' => '畅']);