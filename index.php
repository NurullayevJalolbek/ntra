<?php

require_once  "bootstrap.php";

$users = new App\User();
$users->create('jalol', '12345', 'male', '937381028');
