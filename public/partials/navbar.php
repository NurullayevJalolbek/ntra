<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->
        <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
            <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <?php echo getUserEmailSession(); ?>
                <a href="/logout" class="text-danger d-flex align-items-center text-decoration-none">
                    <i class="bi bi-box-arrow-right me-2"></i> Log out
            </li>
            <a href="/login"
               class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                        data-feather="user" class="size-4 stroke-[3]"></i>
            </a>
            <li class="sm:inline ps-1 mb-0 hidden">
                <a href="/register" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>

        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>

                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li>
                                    <a href="index.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-one.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero One</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-two.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-two.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Two</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-three.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-three.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Three</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-four.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-four.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Four</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-five.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-five.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Five</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-six.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-six.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Six</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-seven.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-seven.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Seven</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-eight.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-eight.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Eight</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li>
                                    <a href="index-nine.html" class="sub-menu-item">
                                        <div class="lg:text-center">
                                            <span class="none lg:block"><img src="assets/images/demos/hero-nine.png"
                                                                             class="img-fluid rounded shadow-md" alt=""></span>
                                            <span class="lg:mt-2 block">Hero Nine <span
                                                        class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="buy.html" class="sub-menu-item">Buy</a></li>

                <li><a href="sell.html" class="sub-menu-item">Sell</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Listing</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Grid View </a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="grid.html" class="sub-menu-item">Grid Listing</a></li>
                                <li><a href="grid-sidebar.html" class="sub-menu-item">Grid Sidebar </a></li>
                                <li><a href="grid-map.html" class="sub-menu-item">Grid With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> List View </a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="list.html" class="sub-menu-item">List Listing</a></li>
                                <li><a href="list-sidebar.html" class="sub-menu-item">List Sidebar </a></li>
                                <li><a href="list-map.html" class="sub-menu-item">List With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Property Detail</a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                <li><a href="property-detail-two.html" class="sub-menu-item">Property Detail Two</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                        <li><a href="features.html" class="sub-menu-item">Featues</a></li>
                        <li><a href="pricing.html" class="sub-menu-item">Pricing</a></li>
                        <li><a href="faqs.html" class="sub-menu-item">Faqs</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agents</a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="agents.html" class="sub-menu-item">Agents</a></li>
                                <li><a href="agent-profile.html" class="sub-menu-item">Agent Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Agencies</a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="agencies.html" class="sub-menu-item">Agencies</a></li>
                                <li><a href="agency-profile.html" class="sub-menu-item">Agency Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="blog-sidebar.html" class="sub-menu-item"> Blog Sidebar</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span
                                    class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item">Comingsoon</a></li>
                                <li><a href="maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="404.html" class="sub-menu-item">404! Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
