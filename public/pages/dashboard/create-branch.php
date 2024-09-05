<?php

declare(strict_types=1);
loadPartials('header');
loadPartials('navbar');
?>


    <div class="page-wrapper toggled">
        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <div class="container-fluid relative px-3">
                <div class="layout-specing">
                    <!-- Start Content -->
                    <div class="md:flex justify-between items-center">
                        <h5 class="text-lg font-semibold">Add Property</h5>

                        <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                            <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white">
                                <a href="index.html">Hously</a></li>
                            <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                                <i class="mdi mdi-chevron-right"></i></li>
                            <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white"
                                aria-current="page">Add Property
                            </li>
                        </ul>
                    </div>

                    <div class="container relative">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                            <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                                <form id="ads-create" action="/create/branch" method="post"
                                      enctype="multipart/form-data">
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="col-span-12">
                                            <label for="title" class="font-medium">Adress</label>
                                            <input name="Adress" id="title" type="text" class="form-input mt-2"
                                                   placeholder="Adress">
                                        </div>
                                        <div class="col-span-12">
                                            <label for="title" class="font-medium">Name </label>
                                            <input name="name" id="title" type="text" class="form-input mt-2"
                                                   placeholder="Name">
                                        </div>
                                    </div>

                                    <button type="submit" id="submit"
                                            class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                        Yuborish
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
                <div class="container-fluid">
                    <div class="grid grid-cols-1">
                        <div class="sm:text-start text-center mx-md-2">
                            <p class="mb-0 text-slate-400">©
                                <script>document.write(new Date().getFullYear())</script>
                                Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                                        href="https://shreethemes.in/" target="_blank"
                                        class="text-reset">Shreethemes</a>.
                            </p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
