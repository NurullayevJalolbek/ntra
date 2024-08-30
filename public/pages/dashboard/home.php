<?php


LoadPartials(path:"header", LoadFromPublic: false);

?>

<body class="font-body text-base text-black dark:text-white dark:bg-slate-900">
<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="index.html"><img src="assets/images/logo-light.png" alt=""></a>
            </div>

            <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                <li>
                    <a href="index.html"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Dashboard</a>
                </li>

                <li>
                    <a href="explore-property.html"><i class="mdi mdi-home-city me-2"></i>Explore Properties</a>
                </li>

                <li>
                    <a href="favorite-property.html"><i class="mdi mdi-home-heart me-2"></i>Favorite Properties</a>
                </li>

                <li>
                    <a href="add-property.html"><i class="mdi mdi-home-plus me-2"></i>Add Properties</a>
                </li>

                <li>
                    <a href="chat.html"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>User Profile</a>
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

                                <a href="https://1.envato.market/hously" target="_blank" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
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
                                    <img src="dashboard/assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="dashboard/assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                    </a>
                    <!-- Logo -->

                    <!-- show or close sidebar -->
                    <a id="close-sidebar" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" href="javascript:void(0)">
                        <i data-feather="menu" class="size-4"></i>
                    </a>
                    <!-- show or close sidebar -->

                    <!-- Searchbar -->
                    <div class="ps-1.5">
                        <div class="form-icon relative sm:block hidden">
                            <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                            <label for="searchItem"></label><input type="text" class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </div>
                    <!-- Searchbar -->
                </div>

                <ul class="list-none mb-0 space-x-1">
                    <!-- Country Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <img src="dashboard/assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                        </button>
                        <!-- Dropdown menu -->
                    </li>
                    <!-- Country Dropdown -->

                    <!-- Notification Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" type="button">
                            <i data-feather="bell" class="size-4"></i>
                            <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                                    </span>
                            <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800" data-simplebar>
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
                                            <img src="assets/images/client/04.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Message</span> from Luis</span>
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
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">One Refund Request</span></span>
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
                                            <img src="assets/images/client/05.jpg" class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Cally</span> started following you</span>
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
                            <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"><img src="assets/images/client/07.jpg" class="rounded-md" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <a href="profile.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-account-outline me-2"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="chat.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
                                </li>
                                <li>
                                    <a href="profile-setting.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-cog-outline me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="lock-screen.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-lock-outline me-2"></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="login.html" class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i class="mdi mdi-logout me-2"></i>Logout</a>
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
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-semibold">Hello, Calvin</h5>
                        <h6 class="text-slate-400">Welcome back!</h6>
                    </div>
                </div>

                <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Revenue</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium">$ <span class="counter-value" data-target="45890">42205</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-currency-usd text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Visitor</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value" data-target="2456">1857</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-account-group-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Total Properties</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value" data-target="358">54</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-city-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Properties for Sell</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value" data-target="243">60</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-lightning-bolt-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->

                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="p-5 flex items-center justify-between">
                                    <span class="me-3">
                                        <span class="text-slate-400 block">Properties for Rent</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-2xl font-medium"><span class="counter-value" data-target="115">45</span></span>
                                        </span>
                                    </span>

                            <span class="flex justify-center items-center rounded-md size-12 min-w-[48px] bg-slate-50 dark:bg-slate-800 shadow shadow-gray-100 dark:shadow-gray-700 text-green-600">
                                        <i class="mdi mdi-home-clock-outline text-[28px]"></i>
                                    </span>
                        </div>
                    </div><!--end-->
                </div>

                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="lg:col-span-8">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Revenue Analytics</h6>

                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>
                            </div>
                            <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                        </div>
                    </div>

                    <div class="lg:col-span-4">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Sales Data</h6>

                                <div class="position-relative">
                                    <select class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                        <option value="Y" selected>Yearly</option>
                                        <option value="M">Monthly</option>
                                        <option value="W">Weekly</option>
                                        <option value="T">Today</option>
                                    </select>
                                </div>
                            </div>

                            <div class="p-6">
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Website</span>
                                        <span class="text-slate-400">50%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 50%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Team Member</span>
                                        <span class="text-slate-400">12%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Agents</span>
                                        <span class="text-slate-400">6%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 6%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Social Media</span>
                                        <span class="text-slate-400">15%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 15%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Digital Marketing</span>
                                        <span class="text-slate-400">12%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <div class="flex justify-between mb-2">
                                        <span class="text-slate-400">Via Others</span>
                                        <span class="text-slate-400">5%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                        <div class="bg-green-600 h-[6px] rounded-full" style="width: 5%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
                    <div class="xl:col-span-3 lg:col-span-6 order-1">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Area Map</h6>

                                <span class="text-slate-400">Last update 5 days ago</span>
                            </div>

                            <div class="p-6">
                                <div id="map" class="w-full h-[236px]"></div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-6 lg:col-span-12 xl:order-2 order-3">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Recent Transections</h6>

                                <a href="" class="btn btn-link font-normal text-slate-400 hover:text-green-600 after:bg-green-600 transition duration-500">View orders <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                            <div class="relative overflow-x-auto block w-full xl:max-h-[284px] max-h-[350px]" data-simplebar>
                                <table class="w-full text-start">
                                    <thead class="text-base">
                                    <tr>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3"></th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[140px]">Date</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[120px]">Name</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3">Price</th>
                                        <th class="text-start font-semibold text-[15px] px-4 py-3 min-w-[40px]">Type</th>
                                        <th class="text-end font-semibold text-[15px] px-4 py-3 min-w-[70px]">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/1.jpg" class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700" alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Mr. Rocky</th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$1245/M</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Rent</th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Paid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/2.jpg" class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700" alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Mr. Cristino</th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$12450</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Sell</th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Unpaid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/3.jpg" class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700" alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Mr. Jack</th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$12450</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Sell</th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-emerald-600/10 dark:bg-emerald-600/20 border border-emerald-600/10 dark:border-emerald-600/20 text-emerald-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Paid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/4.jpg" class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700" alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Ms. Cally</th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$12450</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Sell</th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Unpaid</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">
                                            <div class="relative md:shrink-0">
                                                <img src="dashboard/assets/images/property/5.jpg" class="object-cover size-12 min-w-[48px] rounded-md shadow dark:shadow-gray-700" alt="">
                                            </div>
                                        </th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">10th Aug 2023</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Ms. Cristina</th>
                                        <td class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="text-slate-400">$1245/M</span>
                                        </td>
                                        <th class="text-start border-t border-gray-100 dark:border-gray-800 px-4 py-3 font-semibold">Rent</th>
                                        <td class="text-end border-t border-gray-100 dark:border-gray-800 px-4 py-3">
                                            <span class="bg-red-600/10 dark:bg-red-600/20 border border-red-600/10 dark:border-red-600/20 text-red-600 text-[15px] font-medium px-2.5 py-0.5 rounded h-5 ms-1">Unpaid</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-3 lg:col-span-6 xl:order-3 order-2">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                <h6 class="text-lg font-semibold">Top Properties</h6>

                                <a href="" class="btn btn-link font-normal text-slate-400 hover:text-green-600 after:bg-green-600 transition duration-500">See More <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                            <div class="relative overflow-x-auto block w-full max-h-[284px] p-6" data-simplebar>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/1.jpg" class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700" alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-red-600 text-end"><i class="mdi mdi-arrow-bottom-right"></i> 11%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/2.jpg" class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700" alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 20%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/3.jpg" class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700" alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 24%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/4.jpg" class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700" alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 21%</span>
                                </div>

                                <div class="flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="relative md:shrink-0">
                                            <img src="dashboard/assets/images/property/5.jpg" class="object-cover size-14 min-w-[56px] rounded-md shadow dark:shadow-gray-700" alt="">
                                        </div>

                                        <div class="ms-2">
                                            <a href="" class="font-medium hover:text-green-600 block text-lg">House</a>
                                            <span class="text-slate-400">Baton Rouge, USA</span>
                                        </div>
                                    </div>

                                    <span class="w-20 text-emerald-600 text-end"><i class="mdi mdi-arrow-top-right"></i> 45%</span>
                                </div>
                            </div>
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
                        <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="size-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="size-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- LTR & RTL Mode Code -->
<div class="fixed top-[40%] -end-3 z-50">
    <a href="" id="switchRtl">
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden" >LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->
<?php

LoadPartials(path:"footer", LoadFromPublic: false);

?>