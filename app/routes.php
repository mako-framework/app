<?php

use \mako\http\routing\Routes;

Routes::get('/', '\app\controllers\Index::welcome');