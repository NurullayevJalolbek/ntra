<?php
declare(strict_types=1);


use App\Status;

//dd($_POST);

if ($_POST['status']){


    $newStatus  = (new Status())->create($_POST['status']);



    if ($newStatus) {
        header("Location: /create/status");
        exit();
    }
    return;

}
echo "Hamma bosh maydonlarni to'ldiring";



