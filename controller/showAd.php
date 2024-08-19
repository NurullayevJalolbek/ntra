<?php
declare(strict_types=1);
/**
 * @var $id
 *
 */



use App\Ads;

$ad = (new Ads())->getAd($id);

loadView("single-ads", ["ad" => $ad]);

?>




<?php loadPartials("footer"); ?>
