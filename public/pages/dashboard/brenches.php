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
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">

                        <?php

                        /**
                         * @var  $branches
                         */


                        foreach ($branches as $ad): ?>

                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="/dashboard/assets/images/property/1.jpg" alt="">
                                </div>

                                <div class="p-6">
                                    <div class="pb-6">
                                        id -
                                        <?php echo $ad->id ?></a>
                                    </div>

                                    <span class="text-slate-400">Addres</span>
                                    <p class="text-lg font-medium"><?php echo $ad->address; ?></p>

                                    <span class="text-slate-400">Name</span>
                                    <p class="text-lg font-medium"><?php echo $ad->name; ?></p>

                                    <span class="text-slate-400">Soati</span>
                                    <p class="text-lg font-medium"><?php echo $ad->created_at; ?></p>

                                </div>
                            </div><!--end property content-->

                        <?php endforeach; ?>
                    </div><!--end container-->
                </div> <!-- End Content -->
            </div><!--end container-->
        </main>
    </div>
<?php

LoadPartials(path: "footer", LoadFromPublic: false);

?>
<?php