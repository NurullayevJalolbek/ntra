<?php


LoadPartials(path: "header", LoadFromPublic: false);
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

<section
        class="h-screen flex items-center justify-center relative overflow-hidden bg-[url('/dashboard/assets/images/01.jpg')] bg-no-repeat bg-center bg-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
            <div class="p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                <div class="text-center">
                    <img src="/dashboard/assets/images/client/07.jpg"
                         class="mx-auto size-20 rounded-full shadow dark:shadow-gray-800" alt="">
                    <h5 class="mb-6 mt-4 text-xl font-semibold">Calvin Carlo</h5>
                </div>
                <form action="/lock/scren" method="post">
                    <div class="grid grid-cols-1">
                        <div class="mb-4 text-start">
                            <label class="font-semibold" for="LoginPassword">Password:</label>
                            <input id="LoginPassword" name="lock_password" type="password" class="form-input mt-3 rounded-md" required=""
                                   placeholder="Password:">
                        </div>
                        <?php
                        if (isset($_SESSION['password_error'])) {
                            echo '<p class="text-danger">' . $_SESSION['password_error'] . '</p>';
                            unset($_SESSION['password_error']);
                        }
                        ?>


                        <div class="flex justify-between mb-4">
                            <div class="inline-flex items-center mb-0">
                                <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-green-600 focus:border-green-300 focus:ring focus:ring-offset-0 focus:ring-green-200 focus:ring-opacity-50 me-2"
                                       type="checkbox" value="" id="RememberMe" required>
                                <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember me</label>
                            </div>
                            <p class="text-slate-400 mb-0"><a href="reset-password.html" class="text-slate-400">Forgot
                                    password ?</a></p>
                        </div>
                        <div class="mb-4">
                            <button type="submit"
                                    class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md w-full">
                                Login / Sign in
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!--end section -->

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk"/>
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                       for="chk">
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
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden">LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->

<!-- JAVASCRIPTS -->
<script src="/dashboard/assets/libs/feather-icons/feather.min.js"></script>
<script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/dashboard/assets/js/plugins.init.js"></script>
<script src="/dashboard/assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>





