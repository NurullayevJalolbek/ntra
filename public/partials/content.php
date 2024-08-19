<?php
/**
 * Credits:
 * https://tailwindflex.com/@arya/responsive-products-grid
 * source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html
 */

?>

<div class="text-center p-10">
    <h1 class="font-bold text-4xl mb-4">Flats for rent</h1>
</div>

<section id="Projects"
         class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <?php
    $ads = getAds();


    foreach ($ads as $ad):?>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="/ads/<?php echo $ad['id'] ?> ">
                <img src="https://images.unsplash.com/photo-1649261191606-cb2496e97eee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                     alt="Product" class="h-80 w-72 object-cover rounded-t-xl"/>
                <div class="px-4 py-3 w-72">
                    <div class="flex">
                <span class="text-gray-400 mr-3 uppercase text-xs"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
</svg>
  </span> <?php echo $ad['address'] ?>
                    </div>
                    <p class="text-lg font-bold text-black truncate block capitalize"> <?php echo $ad['title'] ?> </p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3"> $<?php echo $ad['price'] ?> </p>
                        <div class="ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill - rule="evenodd"
                                      d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                                <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>


</section>