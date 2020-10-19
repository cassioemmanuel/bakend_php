<?php
require_once __DIR__. '/vendor/autoload.php'

use Giph\Giphy;

$gyphy = new Gyphy();

print_r($gyphy->searchGifs('smile'));
