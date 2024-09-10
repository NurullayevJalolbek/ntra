<?php

loadPartials("header");
loadPartials("navbar");

/**
 *
 * @var $branches
 */
//dd($branches);

?>

    <section class="relative lg:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative mb-6">
                    <div class="grid grid-cols-1">
                        <form action="/search" method="get">
                            <ul class="inline-block sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 rounded-t-xl border-b dark:border-gray-800"
                                id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                                <li role="presentation" class="inline-block">
                                    <button class="px-6 py-2 text-base font-medium rounded-md w-full hover:text-green-600 transition-all duration-500 ease-in-out"
                                            id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab"
                                            aria-controls="buy-home" aria-selected="true">Uy topish
                                    </button>
                                </li>
                                <li role="presentation" class="inline-block">
                                    <button class="px-6 py-2 text-base font-medium rounded-md w-full transition-all duration-500 ease-in-out"
                                            id="sell-home-tab" data-tabs-target="#sell-home" type="button" role="tab"
                                            aria-controls="sell-home" aria-selected="false">Sherik topish
                                    </button>
                                </li>
                            </ul>

                            <div id="StarterContent"
                                 class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                    <div class="registration-form text-dark text-start">
                                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                            <div>
                                                <label class="form-label font-medium text-slate-900 dark:text-white">
                                                    Qidiruv: <span class="text-red-600">*</span>
                                                </label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-search icons"></i>
                                                    <input name="search_phrase" type="text" id="search_phrase"
                                                           class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                           placeholder="Qidiruv iborasi">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-properties"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Filiallar:</label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-estate icons"></i>
                                                    <select class="form-select z-2" data-trigger name="branch"
                                                            id="choices-catagory-buy"
                                                            aria-label="Default select example">
                                                        <option value="">Filiallar</option>
                                                        <?php   foreach ($branches as $branch){
                                                            echo "<option value='$branch->id'>$branch->name</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Min
                                                    Price :</label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger
                                                            id="choices-min-price-buy"
                                                            aria-label="Default select example">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Max
                                                    Price :</label>
                                                <div class="filter-search-form relative mt-2">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger
                                                            id="choices-max-price-buy"
                                                            aria-label="Default select example">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <button type="submit" id="search-buy"
                                                        class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded">
                                                    Qidirish
                                                </button>
                                            </div>

                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </div>

                                <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                                    <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                            <div>
                                                <label class="form-label font-medium text-slate-900 dark:text-white">Search
                                                    : <span class="text-red-600">*</span></label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-search icons"></i>
                                                    <input  type="text" id="job-keyword"
                                                           class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                           placeholder="Search your keaywords">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-properties"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Filiaallar:</label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-estate icons"></i>
                                                    <select class="form-select z-2" data-trigger
                                                            id="choices-catagory-sell"
                                                            aria-label="Default select example">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Min
                                                    Price :</label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger "
                                                            id="choices-min-price-sell"
                                                            aria-label="Default select example">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Max
                                                    Price :</label>
                                                <div class="filter-search-form relative mt-2">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger
                                                            id="choices-max-price-sell"
                                                            aria-label="Default select example">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <input type="submit" id="search-sell" "
                                                       class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                                       >
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </div>

                                <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                                    <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                            <div>
                                                <label class="form-label font-medium text-slate-900 dark:text-white">Search
                                                    : <span class="text-red-600">*</span></label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-search icons"></i>
                                                    <input  type="text" id="job-keyword"
                                                           class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                           placeholder="Search your keaywords">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-properties"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Select
                                                    Categories:</label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-estate icons"></i>
                                                    <select class="form-select z-2" data-trigger
                                                            id="choices-catagory-rent"
                                                            aria-label="Default select example">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Min
                                                    Price :</label>
                                                <div class="filter-search-form relative filter-border mt-2">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger
                                                            id="choices-min-price-rent"
                                                            aria-label="Default select example">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price"
                                                       class="form-label font-medium text-slate-900 dark:text-white">Max
                                                    Price :</label>
                                                <div class="filter-search-form relative mt-2">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger
                                                            id="choices-max-price-rent"
                                                            aria-label="Default select example">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <input type="submit" id="search-rent"
                                                       class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                                       value="Search">
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </div>
                            </div>
                        </form>
                    </div><!--end grid-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->
        <div class="container relative">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

                <?php

                /**
                 * @var  $ads
                 */

                foreach ($ads as $ad): ?>

                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                        <div class="relative">
                            <img src="assets/images/property/1.jpg" alt="">

                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)"
                                   class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                            class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="/ads/<?php echo $ad['id'] ?>"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"> <?php echo $ad['title'] ?></a>
                            </div>

                            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$ <?php echo $ad['price'] ?></p>
                                </li>

                            </ul>
                        </div>
                    </div><!--end property content-->

                <?php endforeach; ?>

            </div><!--end container-->
    </section>


<?php
loadPartials(path:"footer");

