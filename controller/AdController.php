<?php

namespace Controller;

use App\Ads;
use App\Branch;
use App\Status;
use JetBrains\PhpStorm\NoReturn;

class AdController
{


    public function edit(int $id): void
    {
        $brenches = (new Branch())->getBranches();
        $status = (new Status())->getStatuses();

        loadView('dashboard/create-ad', ['ads' => (new \App\Ads())->getAd($id), 'brenches' => $brenches, 'status' => $status]);
    }




    public function update(int $id): void
    {

        $ad = new \App\Ads();
        $image = new \App\Image();

        if ($_FILES['image']['error'] != 4) {
            $uploadPath = basePath("/public/assets/images/ads/");
            $imageDetails = $image->getImagesByAdId($id);
            $newFileName = $image->handleUpload();

            if ($imageDetails && file_exists($uploadPath . $imageDetails->name)) {
                unlink($uploadPath . $imageDetails->name);
            }

            $image->updateImage($imageDetails->id, $newFileName);

        }

        $ad->updateAds($id, $_POST['title'], $_POST['description'], $_SESSION['user']['id'], $_POST['status_id'],
            $_POST['branch_id'], $_POST['address'], $_POST['price'], $_POST['rooms']);

        redirect('/profile');


    }

    #[NoReturn] public function delete(int $id): void
    {
        $image = new \App\Image();
        $uploadPath = basePath("/public/assets/images/ads/");
        $imageDetails = $image->getImagesByAdId($id);
        if ($imageDetails && file_exists($uploadPath . $imageDetails->name)) {
            unlink($uploadPath . $imageDetails->name);
        }
        (new Ads())->deleteAds($id);
        redirect('/profile');

    }

    public function create(): void
    {
        $brenches = (new Branch())->getBranches();
        $status = (new Status())->getStatuses();

        loadView('dashboard/create-ad', ['brenches' => $brenches, 'status' => $status]);

    }

    public function search()
    {
        $searchPhrase = $_REQUEST['search_phrase'];
        $branch = $_GET['branch'] ?(int)$_GET['branch'] : null;
        $minPrice = $_GET['min_price'] ? (int)$_GET['min_price'] : 0;
        $maxPrice = $_GET['max_price'] ? (int)$_GET['max_price'] : PHP_INT_MAX;

        $ads          = (new Ads())->search($searchPhrase, $branch, $maxPrice,$minPrice);
        loadView('home', ['ads' => $ads]);
    }

    public  function  home()
    {
        $ads = (new Ads())->getAds();

        $branches = (new Branch())->getBranches();


        loadView('home', ['ads' => $ads, 'branches' => $branches]);

    }

}