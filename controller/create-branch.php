<?php
declare(strict_types=1);


use App\Branch;




//dd($_POST);

if ($_POST['Adress'] && $_POST['name']) {


    $newBranch  = (new Branch())->create($_POST['Adress'], $_POST['name']);


    if ($newBranch) {
        header("Location: /create/branch");
        exit();
    }
    return;

}
echo "Hamma bosh maydonlarni to'ldiring";



