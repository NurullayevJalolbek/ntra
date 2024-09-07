<?php


LoadPartials(path: "header", LoadFromPublic: false);


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
                    Start Content
                    <div class="">
                        <div class="container relative">
                            <div class="grid md:grid-cols-2 grid-cols-2 gap-2 mt-6">

                                <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                                    <div>
                                        <p class="font-medium mb-4">Upload your property image here, Please click
                                            "Upload
                                            Image" Button.</p>
                                        <div class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">
                                            Supports JPG, PNG and MP4 videos. Max file size : 10MB.
                                        </div>
                                        <input form="ads-create" type="file" id="input-file" name="image"
                                               accept="image/*"
                                               onchange={handleChange()} hidden>
                                        <label class="btn-upload btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-6 cursor-pointer"
                                               for="input-file">Upload Image</label>
                                    </div>
                                </div>

                                <div class="container mx-auto p-4">
                                    <div class="">
                                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
                                            <form id="ads-create" action="/create/branch" method="post" enctype="multipart/form-data">
                                                <div class="grid grid-cols-12 gap-5">
                                                    <div class="col-span-12 md:col-span-6">
                                                        <label for="adress" class="font-medium">Adress</label>
                                                        <input name="Adress" id="adress" type="text"
                                                               class="form-input mt-2 w-full md:w-3/4 lg:w-2/3 xl:w-1/2"
                                                               placeholder="Adress" required>
                                                    </div>
                                                    <div class="col-span-12 md:col-span-6">
                                                        <label for="name" class="font-medium">Name</label>
                                                        <input name="name" id="name" type="text"
                                                               class="form-input mt-2 w-full md:w-3/4 lg:w-2/3 xl:w-1/2"
                                                               placeholder="Name" required>
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
                            </div>
                        </div>
                    </div>
                </div><!--end container-->
            </div>
        </main>
    </div>


<?php

LoadPartials(path: "footer", LoadFromPublic: false);

?>
<?php