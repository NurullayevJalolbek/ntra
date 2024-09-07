<?php

LoadPartials(path: 'header', LoadFromPublic: false);
?>

    <div class="page-wrapper toggled">
        <?php LoadPartials(path: "sidebar", LoadFromPublic: false); ?>

        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <?php LoadPartials(path: 'top-header', LoadFromPublic: false); ?>

            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <div class="grid grid-cols-1">
                        <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                            <input id="pro-banner" name="profile-banner" type="file" class="hidden"
                                   onchange="loadFile(event)">
                            <div class="relative shrink-0">
                                <img src="/dashboard/assets/images/bg.jpg" class="h-80 w-full object-cover"
                                     id="profile-banner"
                                     alt="">
                                <div class="absolute inset-0 bg-black/70"></div>
                                <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-12 grid-cols-1">
                        <div class="xl:col-span-3 lg:col-span-4 md:col-span-4 mx-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 -mt-48">
                                <div class="profile-pic text-center mb-5">
                                    <input id="pro-img" name="profile-image" type="file" class="hidden"
                                           onchange="loadFile(event)"/>
                                    <div>
                                        <div class="relative size-24 mx-auto">
                                            <img src="dashboard/assets/images/client/07.jpg"
                                                 class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                                 id="profile-image" alt="">
                                            <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="text-lg font-semibold"><?= (new \App\Session())->getName() ?></h5>
                                            <p class="text-slate-400">calvin@hotmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-100 dark:border-gray-700">
                                    <h5 class="text-xl font-semibold mt-4">Personal Details :</h5>
                                    <div class="mt-4">
                                        <div class="flex items-center">
                                            <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Email :</h6>
                                                <a href="" class="text-slate-400">calvin@hotmail.com</a>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Skills
                                                    :</h6>
                                                <a href="" class="text-slate-400">html</a>, <a href=""
                                                                                               class="text-slate-400">css</a>,
                                                <a href="" class="text-slate-400">js</a>, <a href=""
                                                                                             class="text-slate-400">mysql</a>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <i data-feather="italic" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Language
                                                    :</h6>
                                                <a href="" class="text-slate-400">English</a>, <a href=""
                                                                                                  class="text-slate-400">Japanese</a>,
                                                <a href="" class="text-slate-400">Chinese</a>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <i data-feather="globe" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Website
                                                    :</h6>
                                                <a href="" class="text-slate-400">www.cristina.com</a>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <i data-feather="gift" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Birthday
                                                    :</h6>
                                                <p class="text-slate-400 mb-0">2nd March, 1996</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Location
                                                    :</h6>
                                                <a href="" class="text-slate-400">Beijing, China</a>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                            <div class="flex-1">
                                                <h6 class="text-green-600 dark:text-white font-medium mb-0">Cell No
                                                    :</h6>
                                                <a href="" class="text-slate-400">(+12) 1254-56-4896</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="xl:col-span-9 lg:col-span-8 md:col-span-8 mt-6">
                            <div class="grid grid-cols-1 gap-6">
                                <div class="p-6 relative rounded-md shadow-lg bg-white dark:bg-slate-900 flex justify-start items-center">
                                    <a href="/create/ads">
                                        <button type="submit" id="submit"
                                                class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md px-6 py-3 text-base">
                                            E'lon qo'shish
                                        </button>
                                    </a>
                                </div>
                                <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <h5 class="text-xl font-semibold">Mening e'lonlarim :</h5>

                                    <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-6">
                                        <?php
                                        /**
                                         * @var $ads
                                         */
                                        foreach ($ads as $ad):?>
                                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                                <div class="relative">
                                                    <img src="../assets/images/ads/<?= $ad['image'] ?>" alt="">

                                                    <div class="absolute top-4 end-4">
                                                        <a href="/ads/update/<?= $ad['id'] ?>"
                                                           class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-black dark:text-white">
                                                            <i class="mdi mdi-pencil text-[20px]"></i>
                                                        </a>
                                                    </div>

                                                </div>

                                                <div class="p-6">
                                                    <div class="pb-6">
                                                        <a href="/ads/<?= $ad['id'] ?>"
                                                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad['title']; ?></a>
                                                    </div>

                                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                        <li class="flex items-center me-4">
                                                            <i class="mdi mdi-compress-arrows text-2xl me-2 text-green-600"></i>
                                                            <span>8000sqf</span>
                                                        </li>

                                                        <li class="flex items-center me-4">
                                                            <i class="mdi mdi-bed-double text-2xl me-2 text-green-600"></i>
                                                            <span>4 Beds</span>
                                                        </li>

                                                        <li class="flex items-center">
                                                            <i class="mdi mdi-bath text-2xl me-2 text-green-600"></i>
                                                            <span>4 Baths</span>
                                                        </li>
                                                    </ul>

                                                    <ul class="pt-6 flex justify-between items-center list-none">
                                                        <li class="flex items-center">
                                                            <div>
                                                                <span class="text-slate-400">Price</span>
                                                                <p class="text-lg font-medium">$ <?= $ad['price'] ?></p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <form action="ads/delete/<?= $ad['id'] ?>" method="post">
                                                                <input type="hidden" name="_method" value="delete">
                                                                <button type="submit" id="submit"
                                                                        style="background:none; border:none; padding:0;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                         height="16" fill="red" class="bi bi-trash3"
                                                                         viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                </button>
                                                            </form>

                                                        </li>
                                                    </ul>

                                                </div>
                                            </div><!--end property content-->
                                        <?php
                                        endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div><!--end container-->
        </main>
        <!--End page-content" -->
    </div>

<?php
LoadPartials(path: 'footer', LoadFromPublic: false);
?>