
<?php
loadPartials("header");
loadPartials("navbar");

;
?>
<section class="relative lg:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            <?php
            ;
            /**
             * @var  $ads
             */


//            dd($ads);
            foreach ($ads as $ad): ?>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="tiny-slide">
                        <img src="../assets/images/property/single/2.jpg" class="rounded-md shadow dark:shadow-gray-700" alt="">
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?php echo $ad['name'] ?></a>
                        </div>
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?php echo $ad['address'] ?></a>
                        </div>


                        <ul class="pt-6 flex justify-between items-center list-none">


<!--                            <li>-->
<!--                                <span class="text-slate-400">Rating</span>-->
<!--                                <ul class="text-lg font-medium text-amber-400 list-none">-->
<!--                                    <li class="inline"><i class="mdi mdi-star"></i></li>-->
<!--                                    <li class="inline"><i class="mdi mdi-star"></i></li>-->
<!--                                    <li class="inline"><i class="mdi mdi-star"></i></li>-->
<!--                                    <li class="inline"><i class="mdi mdi-star"></i></li>-->
<!--                                    <li class="inline"><i class="mdi mdi-star"></i></li>-->
<!--                                    <li class="inline text-black dark:text-white">5.0(30)</li>-->
<!--                                </ul>-->
<!--                            </li>-->
                        </ul>
                    </div>
                </div><!--end property content-->

            <?php endforeach; ?>

        </div><!--end container-->
</section><!--end section-->
