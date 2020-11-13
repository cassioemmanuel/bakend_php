<?php

require_once __DIR__. '/vendor/autoload.php';

use Giphy\Gyphy;

$gyphy = new Gyphy();

print_r($gyphy->searchGifs('smile'));