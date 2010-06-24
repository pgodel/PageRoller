<?php

require_once __DIR__.'/../pageroller/PageRollerKernel.php';

$kernel = new PageRollerKernel('prod', false);
$kernel->handle()->send();
