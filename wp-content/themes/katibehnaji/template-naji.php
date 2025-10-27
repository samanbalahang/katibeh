<?php
/*
* Template name: naji
*/
get_header('naji');
?>
<main>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php
                    $image = get_field("slider");
                ?>
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt']?>">
                <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/naji-slider.jpg" alt="اسلایدر فروشگاه کتیبه ناجی"> -->
            </div>
            <div class="swiper-slide">
                  <?php
                    $image = get_field("slider2");
                ?>
                <img src="<?= $image['url'] ?>" alt="<?= $image['alt']?>">
                <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/naji-slider-2.jpg" alt="اسلیدر فروشگاه کتیبه ناجی"> -->
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <section id="productCat" class="my-5 productCat">
        <div class="w-100 md:w-80/100 mx-auto">
            <div class="flex flex-wrap w-full">
                <div class="w-1/3 md:w-1/6 p-4 my-4 each-cat">
                    <div class="flex flex-col w-full">
                        <a href="product-category/مردانه/">
                            <div class="rounded-2xl overflow-hidden">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/back-cat-1.jpg" class="w-full" alt="پیراهن مردانه">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-1/3 md:w-1/6 p-4 my-4 each-cat">
                    <div class="flex flex-col w-full">
                        <a href="product-category/مردانه/">
                            <div class="rounded-2xl overflow-hidden">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/back-cat-2.jpg" class="w-full" alt="پیراهن مردانه">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-1/3 md:w-1/6 p-4 my-4 each-cat">
                    <div class="flex flex-col w-full">
                        <a href="product-category/مردانه/">
                            <div class="rounded-2xl overflow-hidden">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/back-cat-3.jpg" class="w-full" alt="پیراهن مردانه">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-1/3 md:w-1/6 p-4 my-4 each-cat">
                    <div class="flex flex-col w-full">
                        <a href="product-category/مردانه/">
                            <div class="rounded-2xl overflow-hidden">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/back-cat-4.jpg" class="w-full" alt="پیراهن مردانه">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-1/3 md:w-1/6 p-4 my-4 each-cat">
                    <div class="flex flex-col w-full">
                        <a href="product-category/مردانه/">
                            <div class="rounded-2xl overflow-hidden">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/back-cat-5.jpg" class="w-full" alt="پیراهن مردانه">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-1/3 md:w-1/6 p-4 my-4 each-cat">
                    <div class="flex flex-col w-full">
                        <a href="product-category/مردانه/">
                            <div class="rounded-2xl overflow-hidden">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/back-cat-6.jpg" class="w-full" alt="پیراهن مردانه">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="shegeft" class="w-100 md:w-80/100 mx-auto my-5 shegeft">
        <div class="rounded-2xl bg-dark  w-full p-4">
            <div class="flex justify-between px-4 align-center">
                <h2>
                    شگفت انگیزهای امروز
                </h2>
                <a href="product-category/شگفت/" class="text-inherit! flex items-center px-4 rounded-full border">
                    <span>
                        دیدن همه
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </a>
            </div>
            <div class="flex flex-wrap w-full p-4 my-5">
                <div class="w-full md:w-20/100 px-4">
                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/amazing-1.png" alt="amazing-1.png">
                </div>
                <div class="w-full md:w-80/100 px-4">
                    <!-- Swiper -->
                    <div class="swiper shegeftSwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'order' => 'desc',
                                'posts_per_page' => 9,
                                'tax_query'             => array(
                                    array(
                                        'taxonomy'      => 'product_cat',
                                        'field'         => 'tag_ID', //This is optional, as it defaults to 'term_id'
                                        'terms'         => 32,
                                    ),
                                )
                            );
                            $productsLoop = new WP_Query($args);
                            if ($productsLoop->have_posts()) {
                                global $post;
                                while ($productsLoop->have_posts()) : $productsLoop->the_post();
                                    $productId    =  get_the_ID();
                                    $price         = strval(wc_get_product(get_the_ID())->get_variation_sale_price('max', true));
                                    $sellprice     = strval(wc_get_product(get_the_ID())->get_variation_sale_price('min', true));
                                    $pricelength   = intval(strlen($price));
                                    $toman         = $pricelength - 1;
                                    $Thosendtoman  = substr($price, 0, $toman);
                                    // $Thosendtoman  = $price;  
                                    $insertion = ",";
                                    $index = 3;
                                    $Thosendtoman = substr_replace($Thosendtoman, $insertion, $index, 0);
                            ?>
                                    <div class="swiper-slide">
                                        <div class="bg-white rounded-2xl overflow-hidden flex flex-col justify-center items-center">
                                            <div class="overflow-hidden group">
                                                <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="w-full group-hover:scale-110 ">
                                            </div>
                                            <div class="w-full py-4 min-h-60 px-4">
                                                <h3 class="text-sm!">
                                                    <?= get_the_title(); ?>
                                                </h3>
                                                <p>
                                                    <?= wp_trim_words(get_the_content(), 10, ''); ?>
                                                    <?php //get_the_excerpt()  
                                                    ?>
                                                </p>
                                                <div class="flex justify-between px-4">
                                                    <p class="bg-green-200 text-green-500">
                                                        <?= $Thosendtoman  ?>
                                                    </p>
                                                    <p class="line-through text-gray-300 text-sm">
                                                        <?= $sellprice  ?>
                                                    </p>
                                                </div>
                                                
                                            </div>
                                            <div class="py-5">
                                                    <a href="<?= get_permalink() ?>" class='bg-green-500! text-white! text-center! py-2! px-6! rounded-2xl!'>
                                                        افزودن به سبد خرید
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            }
                            wp_reset_postdata();


                            ?>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="porFroosh" class="w-100 md:w-80/100 mx-auto">
        <h2 class="text-center both-border">
            <span>
                پرفروش‌ترین محصولات
            </span>
        </h2>
        <div class="w-full my-5">
            <!-- Swiper -->
            <div class="swiper shegeftSwiper">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'order' => 'desc',
                        'posts_per_page' => 9,
                        'tax_query'             => array(
                            array(
                                'taxonomy'      => 'product_cat',
                                'field'         => 'tag_ID', //This is optional, as it defaults to 'term_id'
                                'terms'         => 18,
                            ),
                        )
                    );
                    $productsLoop = new WP_Query($args);
                    if ($productsLoop->have_posts()) {
                        global $post;
                        while ($productsLoop->have_posts()) : $productsLoop->the_post();
                            $productId    =  get_the_ID();
                            $price         = strval(wc_get_product(get_the_ID())->get_variation_sale_price('max', true));
                            $sellprice     = strval(wc_get_product(get_the_ID())->get_variation_sale_price('min', true));
                            $pricelength   = intval(strlen($price));
                            $toman         = $pricelength - 1;
                            $Thosendtoman  = substr($price, 0, $toman);
                            // $Thosendtoman  = $price;  
                            $insertion = ",";
                            $index = 3;
                            $Thosendtoman = substr_replace($Thosendtoman, $insertion, $index, 0);


                    ?>
                            <div class="swiper-slide">
                                <div class="bg-white rounded-2xl overflow-hidden flex flex-col justify-center items-center border border-gray-200 rounded-2xl overflow-hidden">
                                    <div class="overflow-hidden group">
                                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="w-full group-hover:scale-110 ">
                                    </div>
                                    <div class="w-full py-4  px-4 min-h-20">
                                        <h3 class="text-sm!">
                                            <?= get_the_title(); ?>
                                        </h3>

                                    </div>
                                    <div class="border-t-1 py-5 w-90/100">
                                        <a href="<?= get_permalink() ?>" class='text-black! text-center! px-4! '>
                                            <?= $Thosendtoman ?>
                                            تومان
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    }
                    wp_reset_postdata();


                    ?>
                </div>

                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="w-100 md:w-80/100 mx-auto">
        <div class="flex flex-wrap">
            <div class="w-1/2 md:w-1/4 px-5 ">
                <div class="position-relative our-add flex flex-col justify-center items-center">
                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/khadamat.png" alt="">
                    <h3 class="text-sm!">
                        خدمات پس از خرید
                    </h3>
                    <p class="text-center min-h-25 text-xs! py-3">
                        میزبان صدای گرمتان هستیم. هدف تیم پشتیبانی ما تلاش با تمام قوا برای ارائه بهترین خدمات به مشتریان عزیز می باشد.
                    </p>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 px-5 ">
                <div class="position-relative our-add flex flex-col justify-center items-center">
                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/esalat.png" alt="">
                    <h3 class="text-sm!">
                        ضمانت بازگشت وجه
                    </h3>
                    <p class="text-center min-h-25 text-xs! py-3">
                        تا ۷ روز برای احترام به انتخاب مشتریان کالای خریداری شده برگردانده می‌شود.

                    </p>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 px-5 ">
                <div class="position-relative our-add flex flex-col justify-center items-center">
                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/zemanat.png" alt="">
                    <h3 class="text-sm!">
                        ضمانت اصالت
                    </h3>
                    <p class="text-center min-h-25 text-xs! py-3">
                        تمامی کالاها اورجینال و با ضمانت اصل بودن از نمایندگی معتبر تهیه و ارائه می‌شوند.


                    </p>
                </div>
            </div>
            <div class="w-1/2 md:w-1/4 px-5 ">
                <div class="position-relative our-add flex flex-col justify-center items-center">
                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/fast.png" alt="">
                    <h3 class="text-sm!">
                        ارسال سریع و آسان
                    </h3>
                    <p class="text-center min-h-25 text-xs! py-3">
                        ارسال رایگان برای خریدهای بالای 1 میلیون و 200 هزار تومان و در زمان انتخابی مشتری به سریعترین شکل ممکن می‌باشد.


                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-gray-200 p-5 my-5">
        <div class="w-full md:w-80/100 mx-auto">
            <h2 class="text-center both-border">
                <span>
                    پرفروش‌ترین محصولات
                </span>
            </h2>
            <!-- Swiper -->
            <div class="swiper poorSwiper py-5 my-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-1.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-2.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-3.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-4.jpg" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-5.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-1.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-2.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="flex justify-center items-center bg-white!">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/brand-3.png" width="250" height="250" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="my-5 w-full md:w-80/100 mx-auto">
      
            <h2 class="text-center both-border">
                <span>
                    جدید ترین مقالات
                </span>
            </h2>
              <div class="flex flex-wrap">
            <?php
            $args = array(
                'post_type' => 'post',
                'order' => 'desc',
                'posts_per_page' => 4,
                'tax_query'             => array(
                    array(
                        'taxonomy'      => 'category',
                        'field'         => 'tag_ID', //This is optional, as it defaults to 'term_id'
                        'terms'         => 39,
                    ),
                )
            );
            $productsLoop = new WP_Query($args);
            if ($productsLoop->have_posts()) {
                while ($productsLoop->have_posts()) : $productsLoop->the_post();
            ?>
                <div class="w-full md:w-1/4 px-5 mt-5">
                    <div class="border rounded-2xl overflow-hidden p-5">
                        <div class="overflow-hidden">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="w-full group-hover:scale-110 rounded-2xl">
                        </div>
                        <div class="mt-5 min-h-25">
                            <h2 class="text-center text-xs!">
                               <?= get_the_title(); ?>
                            </h2>
                            <p class="flex items-center text-xs! py-5!" >
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                    <g id="SVGRepo_iconCarrier"> <circle opacity="0.5" cx="12" cy="12" r="10" stroke="#1c4c2eff" stroke-width="1.5"/> <path d="M12 8V12L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </g>

                                    </svg>
                                <?= get_the_date("Y/M/d"); ?>
                            </p>
                        </div>
                        <div class="text-center text-xs!">
                            <a href="<?= get_permalink() ?>" class="bg-green-500! text-center! px-5! py-2! rounded-full! text-white!">
                                مشاهده

                            </a>
                        </div>
                    </div>
                </div>

            <?php
                endwhile;
            }
            wp_reset_postdata();


            ?>
        </div>
    </section>
</main>
<?php
get_footer('naji');
