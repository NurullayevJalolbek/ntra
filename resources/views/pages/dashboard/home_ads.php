<?php


LoadPartials(path: "header", LoadFromPublic: false);;
/**
 * @var  $ads
 */
//dd($ads);

?>

    <body class="font-body text-base text-black dark:text-white dark:bg-slate-900">

    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        <?php   LoadPartials(path:"sidebar", LoadFromPublic: false);  ?>
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <!-- Top Header -->
            <?php   LoadPartials(path:"top-header", LoadFromPublic: false);  ?>
            <!-- Top Header -->

            <div class="container-fluid relative px-3">
                <div class="layout-specing">

                    <!-- Start Content -->

                    <div class="md:flex justify-between items-center">
                        <h5 class="text-lg font-semibold">Explore Properties</h5>

                        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                            <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                <a href="index.html">Hously</a></li>
                            <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                                <i class="mdi mdi-chevron-right"></i></li>
                            <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                                aria-current="page">Properties
                            </li>
                        </ul>
                    </div>
                    <!--                        <div class="container relative">-->

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                        <?php
                        foreach($ads as $ad):
                            ?>
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="../assets/images/ads/<?= ($ad['image']); ?>" alt="">

                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="/ads/<?= ($ad['id']); ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?= $ad['title']; ?> </a>
                                    </div>

                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="mdi mdi-arrow-expand-all text-2xl me-2 text-green-600"></i>
                                            <span><?= ($ad->rooms); ?></span>
                                        </li>

                                        <li class="flex items-center me-4">
                                            <i class="mdi mdi-bed text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>

                                        <li class="flex items-center">
                                            <i class="mdi mdi-shower text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>

                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$ <?= ($ad['price']); ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div> <!-- End Content -->
            </div><!--end container-->
        </main>
    </div>
<?php

LoadPartials(path: "footer", LoadFromPublic: false);

?>
<?php