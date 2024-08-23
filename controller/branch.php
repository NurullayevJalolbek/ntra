<?php
declare(strict_types=1);
/**
 * @var $id
 *
 */
use App\Branch;

$ads = (new Branch())->getBranches();


loadView("branch", ["ads" => $ads]);

?>

