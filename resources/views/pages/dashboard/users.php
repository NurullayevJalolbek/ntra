<?php


LoadPartials(path: "header", LoadFromPublic: false);

$users = (new \App\User())->getUsers();
//dd($users);

?>


<body class="font-body text-base text-black dark:text-white dark:bg-slate-900">

<div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    <?php LoadPartials(path: "sidebar", LoadFromPublic: false); ?>
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <?php LoadPartials(path: "top-header", LoadFromPublic: false); ?>
        <!-- Top Header -->

        <div class="container-fluid relative px-3">
            <div class="layout-specing">

                <div class="md:flex justify-between items-center">
                    <h5 class="text-lg font-semibold">Foydalanuvchilar</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                            <a href="index.html">Hously</a></li>
                        <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                            <i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                            aria-current="page">Review
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="grid md:grid-cols-3 gap-5">
                        <div class="picture-item">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                                <?php foreach ($users as $user): ?>

                                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800 p-6">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                            <img src="/assets/images/client/01.jpg"
                                                 class="size-16 rounded-full shadow dark:shadow-gray-800" alt="">
                                            <div class="ps-4">
                                                <a href=""
                                                   class="text-lg hover:text-green-600 duration-500 ease-in-out"> <?= $user->username; ?></a>
                                                <p class="text-slate-400"><?= $user->position; ?></p>
                                            </div>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-slate-400">Email </p>
                                            <p class="text-lg font-medium"> <?= $user->email; ?></p>

                                        </div>
                                        <div class="mt-1">
                                            <p class="text-slate-400">Phone  </p>
                                            <p class="text-lg font-medium"> <?= $user->phone; ?></p>

                                        </div>
                                        <div class="mt-1">
                                            <p class="text-slate-400">Gender</p>
                                            <p class="text-lg font-medium"> <?= $user->gender; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <p class="text-slate-400">Ro'yxatdan o'tgan vaqti</p>
                                            <p class="text-lg font-medium"> <?= $user->created_at; ?></p>
                                        </div>

                                    </div>
                                <?php endforeach ?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>

    </main>
    <?php
    loadPartials(path: 'footer', LoadFromPublic: false);
    ?>
    <!-- End Page Content -->
</div>





