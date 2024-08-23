<?php



use App\Branch;


$brenchllar = (new Branch())-> getBranches();

LoadView("dashboard/create-ad", ["brenchllar" => $brenchllar]);