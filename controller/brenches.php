<?php
declare( strict_types = 1 );

use App\Branch;

$branches = (new Branch())->getBranches();

LoadView("brenches", ["branches" => $branches]);
