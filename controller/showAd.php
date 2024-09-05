<?php
declare(strict_types=1);
/**
 * @var $id
 *
 */
use App\Ads;

$ads = (new Ads())->getAd($id);

loadView("single-ads", ["ad" => $ads]);

?>

