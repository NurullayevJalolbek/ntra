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


<!-- JAVASCRIPTS -->
<script src="../assets/libs/dash/libs/jsvectormap/jsvectormap.min.js"></script>
<script src="../assets/libs/dash/libs/jsvectormap/maps/world.js"></script>
<script src="../assets/js/dash/jsvectormap.init.js"></script>
<script src="../assets/libs/dash/libs/apexcharts/apexcharts.min.js"></script>
<script src="../assets/libs/dash/libs/feather-icons/feather.min.js"></script>
<script src="../assets/libs/dash/libs/simplebar/simplebar.min.js"></script>
<script src="../assets/js/dash/plugins.init.js"></script>
<script src="../assets/js/dash/app.js"></script>


<script>
    const handleChange = () => {
        const fileUploader = document.querySelector('#input-file');
        const getFile = fileUploader.files
        if (getFile.length !== 0) {
            const uploadedFile = getFile[0];
            readFile(uploadedFile);
        }
    }

    const readFile = (uploadedFile) => {
        if (uploadedFile) {
            const reader = new FileReader();
            reader.onload = () => {
                const parent = document.querySelector('.preview-box');
                parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
            };

            reader.readAsDataURL(uploadedFile);
        }
    };
</script>
<!-- JAVASCRIPTS -->
</body>
</html>