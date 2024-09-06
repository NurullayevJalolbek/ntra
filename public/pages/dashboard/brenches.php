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
        <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="index.html"><img src="assets/images/logo-light.png" alt=""></a>
                </div>

                <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                    <li>
                        <a href="/admin"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="/admin/ads"><i class="mdi mdi-home-city me-2"></i>E'lonlar </a>
                    </li>

                    <li>
                        <a href="/admin/branches"><i class="mdi mdi-home-heart me-2"></i>Filiallar</a>
                    </li>

                    <li>
                        <a href="/create/branch"><i class="mdi mdi-home-plus me-2"></i>Filial qo'shish</a>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>Foydalanuvchilar </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="profile-setting.html">Profile Settings</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="mdi mdi-post-outline me-2"></i>Blog</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="mdi mdi-file-document-outline me-2"></i>Pages</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="starter.html">Starter</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="review.html">Review</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Term & Condition</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="mdi mdi-login me-2"></i>Authentication</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="signup-success.html">Signup Success</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                                <li><a href="lock-screen.html">Lockscreen</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="mdi mdi-layers me-2"></i>Miscellaneous</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="comingsoon.html">Comingsoon</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                                <li><a href="error.html">Error</a></li>
                                <li><a href="thankyou.html">Thank You</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-gradient-to-b to-transparent from-slate-800 text-center">
                            <span class="relative z-10">
                                <span class="text-xl font-medium h5 text-white">Upgrade to Pro</span>

                                <span class="text-slate-400 mt-3 mb-5 block">Get one month free and subscribe to pro</span>

                                <a href="https://1.envato.market/hously" target="_blank"
                                   class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
                            </span>

                        <span class="mdi mdi-home-city-outline text-[160px] absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto text-center opacity-[0.02] text-white z-0"></span>
                    </li>
                </ul>
                <!-- sidebar-menu  -->
            </div>
        </nav>
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-gray-50 dark:bg-slate-800">
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-bar flex justify-between">
                    <div class="flex items-center space-x-1">
                        <!-- Logo -->
                        <a href="#" class="xl:hidden block me-2">
                            <img src="dashboard/assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                            <span class="md:block hidden">
                                    <img src="dashboard/assets/images/logo-dark.png" class="inline-block dark:hidden"
                                         alt="">
                                    <img src="dashboard/assets/images/logo-light.png" class="hidden dark:inline-block"
                                         alt="">
                                </span>
                        </a>
                        <!-- Logo -->

                        <!-- show or close sidebar -->
                        <a id="close-sidebar"
                           class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"
                           href="javascript:void(0)">
                            <i data-feather="menu" class="size-4"></i>
                        </a>
                        <!-- show or close sidebar -->

                        <!-- Searchbar -->
                        <div class="ps-1.5">
                            <div class="form-icon relative sm:block hidden">
                                <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                                <label for="searchItem"></label><input type="text"
                                                                       class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white"
                                                                       name="s" id="searchItem" placeholder="Search...">
                            </div>
                        </div>
                        <!-- Searchbar -->
                    </div>

                    <ul class="list-none mb-0 space-x-1">
                        <!-- Country Dropdown -->
                        <li class="dropdown inline-block relative">
                            <button data-dropdown-toggle="dropdown"
                                    class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"
                                    type="button">
                                <img src="dashboard/assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                            </button>
                            <!-- Dropdown menu -->
                        </li>
                        <!-- Country Dropdown -->

                        <!-- Notification Dropdown -->
                        <li class="dropdown inline-block relative">
                            <button data-dropdown-toggle="dropdown"
                                    class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"
                                    type="button">
                                <i data-feather="bell" class="size-4"></i>
                                <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                                 onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                                    </span>
                                <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800"
                                    data-simplebar>
                                    <li>
                                        <a href="#!" class="block font-medium py-1.5 px-4">
                                            <div class="flex items-center">
                                                <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                    <i data-feather="shopping-cart" class="size-4"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="text-[15px] font-medium block">Order Complete</span>
                                                    <small class="text-slate-400">15 min ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="block font-medium py-1.5 px-4">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/04.jpg"
                                                     class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                <div class="ms-2">
                                                    <span class="text-[15px] font-medium block"><span
                                                                class="font-semibold">Message</span> from Luis</span>
                                                    <small class="text-slate-400">1 hour ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="block font-medium py-1.5 px-4">
                                            <div class="flex items-center">
                                                <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                    <i data-feather="dollar-sign" class="size-4"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="text-[15px] font-medium block"><span
                                                                class="font-semibold">One Refund Request</span></span>
                                                    <small class="text-slate-400">2 hour ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="block font-medium py-1.5 px-4">
                                            <div class="flex items-center">
                                                <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                    <i data-feather="truck" class="size-4"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="text-[15px] font-medium block">Deliverd your Order</span>
                                                    <small class="text-slate-400">Yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="block font-medium py-1.5 px-4">
                                            <div class="flex items-center">
                                                <img src="assets/images/client/05.jpg"
                                                     class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                                <div class="ms-2">
                                                    <span class="text-[15px] font-medium block"><span
                                                                class="font-semibold">Cally</span> started following you</span>
                                                    <small class="text-slate-400">2 days ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li><!--end dropdown-->
                        <!-- Notification Dropdown -->

                        <!-- User/Profile Dropdown -->
                        <li class="dropdown inline-block relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"><img
                                        src="assets/images/client/07.jpg" class="rounded-md" alt=""></span>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                                 onclick="event.stopPropagation();">
                                <ul class="py-2 text-start">
                                    <li>
                                        <a href="profile.html"
                                           class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                    class="mdi mdi-account-outline me-2"></i>Profile</a>
                                    </li>
                                    <li>
                                        <a href="chat.html"
                                           class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                    class="mdi mdi-chat-outline me-2"></i>Chat</a>
                                    </li>
                                    <li>
                                        <a href="profile-setting.html"
                                           class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                    class="mdi mdi-cog-outline me-2"></i>Settings</a>
                                    </li>
                                    <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                    <li>
                                        <a href="lock-screen.html"
                                           class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                    class="mdi mdi-lock-outline me-2"></i>Lockscreen</a>
                                    </li>
                                    <li>
                                        <a href="login.html"
                                           class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                    class="mdi mdi-logout me-2"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li><!--end dropdown-->
                        <!-- User/Profile Dropdown -->
                    </ul>
                </div>
            </div>
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