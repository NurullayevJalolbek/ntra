<?php

namespace Controller;

use App\Ads;
use App\Branch;
use App\Status;
use JetBrains\PhpStorm\NoReturn;

class AdController
{


    public function edit(int $id): void{
        $brenches = (new Branch())-> getBranches();
        $status = (new Status())->getStatuses();

        loadView('dashboard/create-ad', ['ads' => (new \App\Ads())->getAd($id), 'brenches' => $brenches, 'status' => $status]);
    }

    #[NoReturn] public  function update(int $id): void
    {
//        if($_FILES['image']['error'] != 4){ {
//            $uploadPath = basePath("/public/assets/images/ads");
//            $Images = new \App\Image();
//        }


        $ad = new Ads();

        $ad->updateAds($id, $_POST['title'], $_POST['description'], $_SESSION['user']['id'], $_POST['status_id'],
            $_POST['branch_id'], $_POST['address'], $_POST['price'], $_POST['rooms']);

        redirect('/profile2');

    }

    #[NoReturn] public function  delete(int $id): void
    {
//        dd($id);
        (new Ads())->deleteAds($id);
        redirect('/profile2');

    }

    public function  create(): void
    {
        $brenches = (new Branch())-> getBranches();
        $status = (new Status())->getStatuses();

        loadView('dashboard/create-ad', ['brenches' => $brenches, 'status' => $status]);

    }

}