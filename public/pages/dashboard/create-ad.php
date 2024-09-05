<?php

declare(strict_types=1);
loadPartials('header');
LoadPartials("navbar");

/**
 * @var  $ads
 * @var  $brenches
 * @var $status
 */

$uri = explode('/', $_SERVER['REQUEST_URI']);
if (in_array('create', $uri)) {
    $action = '/create/ads';
    $ads = null;
} else {
    $action = "/ads/update/$ads->id";
}
//dd($brenches);


?>

<div class="page-wrapper toggled">
    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <div class="top-header">
            <div class="header-bar flex justify-between">
                <div class="flex items-center space-x-1">
                    <!-- Logo -->
                    <a href="#" class="xl:hidden block me-2">
                        <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                        <span class="md:block hidden">
                                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
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
                            <input type="text"
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
                            <img src="assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                             onclick="event.stopPropagation();">
                            <ul class="list-none py-2 text-start">
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="assets/images/flags/germany.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        German</a>
                                </li>
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="assets/images/flags/italy.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        Italian</a>
                                </li>
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="assets/images/flags/russia.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        Russian</a>
                                </li>
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="assets/images/flags/spain.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        Spanish</a>
                                </li>
                            </ul>
                        </div>
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
                Start Content
                <div class="md:flex justify-between items-center">
                </div>

                <div class="container relative">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                            <div>
                                <p class="font-medium mb-4">Upload your property image here, Please click "Upload
                                    Image" Button.</p>
                                <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">
                                    Supports JPG, PNG and MP4 videos. Max file size : 10MB.
                                </div>
                                <input form="ads-create" type="file" id="input-file" name="image" accept="image/*"
                                       onchange={handleChange()} hidden>
                                <label class="btn-upload btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-6 cursor-pointer"
                                       for="input-file">Upload Image</label>
                            </div>
                        </div>

                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                            <form id="ads-create" action="<?= $action ?>" method="post" enctype="multipart/form-data">
                                <div class="grid grid-cols-12 gap-5">
                                    <input type="hidden" name="_method" value="patch">
                                    <div class="col-span-12">
                                        <label for="title" class="font-medium">Sarlavha</label>
                                        <input name="title" id="title" type="text" class="form-input mt-2"
                                               placeholder="Sarlavha" value="<?= $ads?->title ?>">
                                    </div>

                                    <div class="md:col-span-4 col-span-12">
                                        <label for="description" class="font-medium">Ta'rif</label>
                                        <div class="form-icon relative mt-2">
                                            <i class="mdi mdi-arrow-expand-all absolute top-2 start-4 text-green-600"></i>
                                            <textarea name="description" id="description" class="form-input ps-11"
                                                      placeholder="E'lon bo'yicha ta'rif...">
                                                    <?= $ads?->description ?>
                                                </textarea>
                                        </div>
                                    </div>

                                    <div class="md:col-span-4 col-span-12 hidden">
                                        <div class="form-icon relative mt-2">
                                            <input name="user" value="5" type="number" class="form-input ps-11">
                                        </div>
                                    </div>
                                    <div class="md:col-span-4 col-span-12 hidden">
                                        <div class="form-icon relative mt-2">
                                            <input name="status" value="1" type="number" class="form-input ps-11">
                                        </div>
                                    </div>

                                    <div class="md:col-span-4 col-span-12 hidden">
                                        <div class="form-icon relative mt-2">
                                            <!--                                            <input name="branch" value="1" type="number" class="form-input ps-11">-->
                                        </div>
                                    </div>
                                    <div class="form-container flex mt-2">
                                        <div class="form-group mr-4">
                                            <label for="branch1" class="font-medium">Branch</label>
                                            <select name="branch_id" id="branch1" class="form-input ps-11" style="width: 300px;">
                                                <?php foreach ($brenches as $brench) : ?>
                                                    <option value="<?= $brench->id; ?>">
                                                        <?php echo $brench->name; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="branch2" class="font-medium">Status</label>
                                            <select name="status_id" id="branch2" class="form-input ps-11" style="width: 150px;">
                                                <?php foreach ($status as $statuc) : ?>
                                                    <option value="<?= $statuc->id; ?>">
                                                        <?php echo $statuc->name; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="md:col-span-4 col-span-12">
                                        <label for="address" class="font-medium">Manzil</label>
                                        <input name="address" id="address" type="text" class="form-input mt-2"
                                               placeholder="Manzil:" value="<?= $ads?->address ?>">
                                    </div>
                                    <div class="inputs-container">
                                        <div class="input-group">
                                            <label for="price" class="font-medium">Narxi:</label>
                                            <div class="form-icon relative mt-2">
                                                <i class="mdi mdi-currency-usd absolute top-2 start-4 text-green-600"></i>
                                                <input name="price" id="price" type="number" class="form-input ps-11"
                                                       placeholder="Narxi($) :" value="<?= $ads?->price ?>">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <label for="rooms" class="font-medium">Xonalar:</label>
                                            <div class="form-icon relative mt-2">
                                                <input name="rooms" id="rooms" type="number" class="form-input ps-11"
                                                       placeholder="Xonalar :" value="<?= $ads?->rooms ?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" id="submit"
                                        class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                    Saqlash
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
                            NTRA. Design with <i class="mdi mdi-heart text-red-600"></i> by PHP N1 group.
                        </p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>

<?php
loadPartials('footer');
?>

