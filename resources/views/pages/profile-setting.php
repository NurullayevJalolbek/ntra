<?php
LoadPartials(path: "header", LoadFromPublic: false);
/**
 *
 * @var $user
 */

//dd($user);
?>

<div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    <?php LoadPartials(path: "sidebar", LoadFromPublic: false); ?>
    <!-- sidebar-wrapper  -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <?php LoadPartials(path: "top-header", LoadFromPublic: false); ?>
        <!-- Top Header -->
        <!-- Start Page Content -->
        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <div class="grid grid-cols-1">
                    <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                        <input id="pro-banner" name="profile-banner" type="file" class="hidden"
                               onchange="loadFile(event)">
                        <div class="relative shrink-0">
                            <img src="/dashboard/assets/images/bg.jpg" class="h-80 w-full object-cover"
                                 id="profile-banner" alt="">
                            <div class="absolute inset-0 bg-black/70"></div>
                            <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 gap-6 mt-6">
                    <div class="xl:col-span-3 lg:col-span-4 md:col-span-4">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center">
                                <input id="pro-img" name="profile-image" type="file" class="hidden"
                                       onchange="loadFile(event)"/>
                                <div>
                                    <div class="relative size-24 mx-auto">
                                        <img src="/dashboard/assets/images/client/07.jpg"
                                             class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800"
                                             id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold"><?php echo $user->username; ?></h5>
                                        <p class="text-slate-400"><?php echo $user->email; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                                <form action="/profile/setting" method="post">
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                        <div>
                                            <label class="form-label font-medium">Name : <span
                                                        class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                <input type="text"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="First Name:" id="firstname" name="name"
                                                       value="<?php echo $user->username; ?>" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="md:col-span-4 col-span-12">
                                                <label for="status" class="font-medium">Gender: <span
                                                            class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <select name="gender" id="status" class="form-input ps-11"
                                                            style="width: 100%;" required>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">Your Email : <span
                                                        class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                <input type="email"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Email" name="email"
                                                       value="<?php echo htmlspecialchars($user->email); ?>"
                                                       required="">
                                            </div>
                                            <?php
                                            if (isset($_SESSION['updateEmail_error'])) {
                                                echo '<p class="text-red-600 mt-2">' . htmlspecialchars($_SESSION['updateEmail_error']) . '</p>';
                                                unset($_SESSION['updateEmail_error']);
                                            }
                                            ?>
                                        </div>

                                        <div>
                                            <label class="form-label font-medium">Position : </label>
                                            <div class="form-icon relative mt-2">
                                                <!--                                                <i data-feather="bookmark" class="size-4 absolute top-3 start-4"></i>-->
                                                <input name="position" id="occupation" type="text"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       value="<?php echo $user->position; ?>">
                                            </div>
                                        </div>
                                    </div><!--end grid-->

                                    <!--                                    <div class="grid grid-cols-1">-->
                                    <!--                                        <div class="mt-5">-->
                                    <!--                                            <label class="form-label font-medium">Description : </label>-->
                                    <!--                                            <div class="form-icon relative mt-2">-->
                                    <!--                                                <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>-->
                                    <!--                                                <textarea name="comments" id="comments" class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Message :"></textarea>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div> -->

                                    <button id="submit"
                                            class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5"
                                            type="submit">
                                        Save Changes
                                    </button>

                                </form><!--end form-->
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4">Contact Info & Change password :</h5>

                                <form action="/profile/setting" method="post">
                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">


                                        <div>
                                            <label class="form-label font-medium">Phone No. :</label>
                                            <div class="form-icon relative mt-2">
                                                <div class="flex">
                                                    <!-- Read-only part for +998 -->
                                                    <span class="input-group-text px-3 py-2 h-10 bg-gray-200 dark:bg-slate-800 dark:text-slate-200 rounded-l border border-gray-200 dark:border-gray-800">
                +998
            </span>
                                                    <!-- Editable part for user to input the rest of the number -->
                                                    <input name="phone_number" id="number" type="number"
                                                           class="form-input py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-r outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0 w-full"
                                                           placeholder="XX XXX XX XX"
                                                           value="<?php echo $user->phone ? substr($user->phone, 4) : ''; ?>"
                                                           style="padding-left: 40px;" required> <!-- Added required attribute -->
                                                </div>
                                            </div>
                                        </div>





                                        <div>
                                            <label class="form-label font-medium">Old password :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                <input name="old_password" type="password"  id="old-password"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Old password" value="<?php echo $user->password; ?>"
                                                       readonly>
                                                <svg onclick="togglePassword('old-password')"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                     class="size-6 absolute top-3 end-4 cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-5">
                                        <div>
                                            <label class="form-label font-medium"> Confirm Password:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                <input name="confirm_password" type="password" id="retype-new-password"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="Confirm Password" required>
                                                <svg onclick="togglePassword('retype-new-password')" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                     class="size-6 absolute top-3 end-4 cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                                </svg>
                                            </div>
                                            <!-- PHP orqali xatolikni chiqarish -->
                                            <?php
                                            if (isset($_SESSION['password_error'])) {
                                                echo '<p class="text-red-600 mt-2">' . htmlspecialchars($_SESSION['password_error']) . '</p>';
                                                unset($_SESSION['password_error']);
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <label class="form-label font-medium">New password :</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                <input  name="new_password" type="password" id="new-password"
                                                       class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0"
                                                       placeholder="New password" required>
                                                <svg onclick="togglePassword('new-password')"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                     class="size-6 absolute top-3 end-4 cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit"
                                            class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                                        Save
                                    </button>

                                </form>
                            </div>

                            <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <h5 class="text-lg font-semibold mb-4 text-red-600">Delete Account :</h5>

                                <p class="text-slate-400 mb-4">Do you want to delete the account? Please press below
                                    "Delete" button</p>

                                <a href=""
                                   class="btn bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div><!--end container-->
    </main>
</div>
<script>
    function togglePassword(id) {
        const passwordInput = document.getElementById(id);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>


<?php

LoadPartials(path: "footer", LoadFromPublic: false);

?>

