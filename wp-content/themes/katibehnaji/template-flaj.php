<?php
/*
* Template name: falah
*/
get_header('falah');
?>
<main>
    <aside class="fixed left-1 top-55 w-7/100 z-10 min-h-56">
        <div class="svg-wrapper w-full relative z-3">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16.77 93.22"
                preserveAspectRatio="xMidYMid meet"
                style="width:100%; height:auto; display:block;">
                <!-- Your gradient definitions -->
                <path class="fill-primary" d="M10.16 19.11c0.13,0.08 0.26,0.16 0.39,0.24l0.01 0.01 0 0c3.73,2.42 6.21,6.63 6.21,11.38l0 31.75c0,5.01 -2.75,9.41 -6.82,11.76 -6.81,4.49 -9.95,13.33 -9.95,18.97l0 -17.16 0 -5.69 0 -47.52 0 -5.68 0 -17.18c0,5.7 3.21,14.66 10.16,19.11z" />
            </svg>
        </div>
        <div class="absolute w-full bottom-0 z-2">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                viewBox="0 0 16.77 102.36"
                preserveAspectRatio="xMidYMid meet"
                style="width:100%; height:auto; display:block; shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Layer_x0020_1">
                    <path class="fill-secondary" d="M10.16 83.25c0.13,-0.08 0.26,-0.16 0.39,-0.24l0.01 -0.01 0 -0c3.73,-2.42 6.21,-6.63 6.21,-11.38l0 -40.89c0,-5.01 -2.75,-9.41 -6.82,-11.76 -6.81,-4.49 -9.95,-13.33 -9.95,-18.97l0 17.16 0 5.69 0 56.66 0 5.68 0 17.18c0,-5.7 3.21,-14.66 10.16,-19.11z" />
                </g>
            </svg>
        </div>
    </aside>
    <section class="w-full relative h-screen pt-1 px-1 pb-1 bg-linear-45 from-primary-900  to-primary overflow-hidden">
        <div class="animated-border-box-glow"></div>
        <div class="relative  bg-white rounded-sx overflow-hidden h-full z-5">
            <div class="first-layer block! md:hidden! relative">
                <?php
                $image = get_field("slidermobile");
                if (! empty($image)) {
                ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="relative z-5" id="slidemobileimage">
                <?php
                }
                ?>
                <div class="absolute top-0 right-0 z-4">
                    <?php
                    $image = get_field("mobilevideo");
                    if (! empty($image)) {
                    ?>
                        <video id="videoMobile" class="grayscale-0 contrast-100" autoplay muted loop>
                            <source src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                        </video>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="first-layer hidden! md:block!">
                <?php
                $image = get_field("slider");
                if (! empty($image)) {
                ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                <?php
                }
                ?>
            </div>
            <div class="second-layer w-full h-88/100 absolute z-5 flex flex-col justify-between items-center bottom-0 right-0 down-videogradiant">
                <form action="#" class="searchForm">
                    <div class="border">
                        <div class="trail"></div>
                        <div class="trail trail-opposite"></div>
                    </div>
                    <div class="content">
                        <div class="flex">
                            <span class="bg-linear-65 from-primary  to-secondary w-17/100 py-1 px-1 flex justify-center items-center" id="formSpan">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/search.png" alt="search" class="w-1/2">
                            </span>
                            <input type="text" name="search" id="search" class="bg-garyesh!">
                        </div>
                    </div>
                </form>
                <div class="w-full flex justify-center items-center">
                    <h3 class="start text-center tracking-[1.75rem] uppercase font-gotic m-0!" id="start">
                        start
                    </h3>
                </div>
                <div class="slogon text-left w-full px-6">
                    <div>
                        <div class="holding">
                            <span class="font-gotic tracking-[0.8rem] inline-block">
                                HOLDING
                                <br>
                            </span>
                        </div>
                        <hgroup>
                            <h1 class="uppercase text-[3.2rem]! font-frank! leading-15! text-justify text-last-justify whitespace-nowrap">
                                <?= the_field("englighslogon") ?>
                            </h1>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/line.png" alt="line" class="w-full">
                            <h1 dir="rtl" class="font-gotic text-[1.2rem]! font-bold! text-justify text-last-justify">
                                <?= the_field("persianslogon") ?>
                            </h1>
                        </hgroup>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full relative h-screen pt-1 px-1 pb-1 bg-linear-45 from-primary-900  to-primary overflow-hidden">
        <div class="animated-border-box-glow"></div>
        <div class="relative  bg-[#596772] rounded-sx overflow-hidden h-full z-5">
            <div class="first-layer block! md:hidden!">
                <?php
                $image = get_field("affiliateimage");
                if (! empty($image)) {
                ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                <?php
                }
                ?>
            </div>
            <div class="first-layer hidden! md:block!">
                <?php
                $image = get_field("affiliateimagedesk");
                if (! empty($image)) {
                ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                <?php
                }
                ?>
            </div>
            <div class="second-layer w-full h-full absolute z-5 flex flex-col justify-between items-center top-0 right-0 p-8">
                <div class="top">
                    <hgroup>
                        <h2>
                            <?= the_field('affilietetitle') ?>
                        </h2>
                        <h2>
                            <?= the_field('affilietetitleen') ?>
                        </h2>
                    </hgroup>
                    <div class="text-justify">
                        <?= the_field('affilietetext') ?>
                    </div>
                    <a href="<?= the_field("affilietelink") ?>" class="block rounded-full ">
                        ادامه مطلب
                    </a>
                </div>
                <div class="bottom w-full">
                    <div class="w-1/2 mr-auto">
                        <a href="<?= the_field("affilietelink") ?>" class="block rounded-full bg-linear-to-r from-[#3c2370] to-[#500c4a ] ">
                            اطلاعات بیشتر
                        </a>
                        <h2>
                            <?= the_field('affilietetitleen') ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full relative h-screen pt-1 px-1 pb-1 bg-linear-45 from-primary-900  to-primary overflow-hidden">
        <div class="animated-border-box-glow"></div>
        <div class="relative  bg-white rounded-sx overflow-hidden h-full z-5">
            <div class="second-layer w-full top-0 right-0 p-8">
                <p class="text-center">
                    <?= the_field('brandstitle'); ?>
                </p>
                <p class="text-center text-[0.9rem]!">
                    <?= the_field('brandstitleen') ?>
                </p>
                <div class="flex flex-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'katibehlogos',
                        'order' => 'desc',
                        'posts_per_page' => -1
                    );
                    $productsLoop = new WP_Query($args);
                    if ($productsLoop->have_posts()) {
                        global $post;
                        while ($productsLoop->have_posts()) : $productsLoop->the_post();
                    ?>
                            <div class="w-1/3 md:1/4 px-6 py-2">
                                <?= the_post_thumbnail('medium', array(
                                    'class' => 'katibeh-logo img-fluid custom-logo'
                                )); ?>
                            </div>
                    <?php
                        endwhile;
                    }
                    wp_reset_postdata();


                    ?>
                </div>
            </div>
            <div class="third-layer absolute w-full z-5 bottom-0 right-0">
                <div class="flex flex-wrap w-full">
                    <div class="w-1/3 md:w-1/3 px-1">
                        <div class="flex flex-col w-full">
                            <h2 class="text-center relative text-secondary!">
                                <span class="text-[4rem]">
                                    <?= the_field('tajrobehcounter') ?>
                                </span>
                                <span class="block rotate-270 absolute top-0 left-0 z-7 text-[0.9rem]">
                                    سال
                                </span>
                            </h2>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/tagrobeh-01.png" alt="">
                        </div>
                    </div>
                    <div class="w-1/3 md:w-1/3 px-1">
                        <div class="flex flex-col w-full">
                            <h2 class="text-center relative text-secondary!">
                                <span class="text-[4rem]">
                                    <?= the_field('tajrobehcounter') ?>
                                </span>
                                <span class="block rotate-270 absolute top-0 left-0 z-7 text-[0.9rem]">
                                    سال
                                </span>
                            </h2>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/tagrobeh-01.png" alt="">
                        </div>
                    </div>
                    <div class="w-1/3 md:w-1/3 px-1">
                        <div class="flex flex-col w-full">
                            <h2 class="text-center relative text-secondary!">
                                <span class="text-[4rem]">
                                    <?= the_field('tajrobehcounter') ?>
                                </span>
                                <span class="block rotate-270 absolute top-0 left-0 z-7 text-[0.9rem]">
                                    سال
                                </span>
                            </h2>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/tagrobeh-01.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full relative h-screen pt-1 px-1 pb-1 bg-linear-45 from-primary-900  to-primary overflow-hidden">
        <div class="animated-border-box-glow"></div>
        <div class="relative  bg-white rounded-sx overflow-hidden h-full z-5 p-5">
            <div class="first-layer block! md:hidden! relative">
                <hgroup>
                    <h2 class="text-[1rem]! flex items-stretch">
                        <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/purplebox.jpg" alt="purplebox" class="block w-1/5">
                        <span class="bg-linear-to-r from-[#fbfcfc] to-[#e5e6e7] inline-block">
                            <?= the_field("articletitle") ?>
                        </span>
                    </h2>

                    <h2 class="text-[1rem]! flex items-center" ?>
                        <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/line-2.png" alt="purplebox">

                        <?= the_field("articletitleen") ?>
                    </h2>
                </hgroup>
                <div class="position-relative w-60/100 mx-auto">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'order' => 'desc',
                        'posts_per_page' => 3,
                        'tax_query'             => array(
                            array(
                                'taxonomy'      => 'category',
                                'field'         => 'tag_ID', //This is optional, as it defaults to 'term_id'
                                'terms'         => 47,
                            ),
                        )
                    );
                    $articleCounter = 1;
                    $productsLoop = new WP_Query($args);
                    if ($productsLoop->have_posts()) {
                        while ($productsLoop->have_posts()) : $productsLoop->the_post();
                    ?>
                            <?php
                            switch ($articleCounter) {
                                case 1:
                            ?>
                                    <div class="slidecount-<?= $articleCounter ?> w-full bg-[#673b97]! rounded-2xl relative">
                                        <div class="relative">
                                            <div class="absolute top-10 -right-3 z-2">
                                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article.png" alt="article" class="w-1/2">
                                            </div>
                                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="w-full group-hover:scale-110 rounded-2xl">
                                            <div class="text-white p-4 mt-6">
                                                <h2 class="text-white! text-center">
                                                    <?= get_the_title(); ?>
                                                </h2>
                                                <p class="text-justify">
                                                    <?= get_the_excerpt();; ?>
                                                </p>
                                            </div>
                                        <?php
                                        break;
                                    case 2:
                                        ?>
                                            <div class="slidecount-<?= $articleCounter ?> bg-[#42195e]! rounded-2xl absolute top-45 right-25 w-60/100 z-4 shadow-xl border-black border-2 -rotate-5">
                                                <div class="relative">
                                                    <div class="absolute top-20 -right-7 z-2">
                                                        <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article-02.png" alt="article" class="w-1/2">
                                                    </div>
                                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="w-full group-hover:scale-110 rounded-2xl">
                                                    <div class="text-white px-4 mt-6">
                                                        <h2 class="text-white! text-center">
                                                            <?= get_the_title(); ?>
                                                        </h2>
                                                        <p class="text-justify">
                                                            <?= get_the_excerpt();; ?>
                                                        </p>
                                                    </div>
                                                <?php
                                                break;
                                            case 3:
                                                ?>
                                                    <div class="slidecount-<?= $articleCounter ?> bg-[#230e2e]! rounded-2xl absolute top-80 right-20 w-60/100 z-6 shadow-xl border-black border-2 -rotate-15">
                                                        <div class="relative">
                                                            <div class="absolute top-14 -right-5 z-2">
                                                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article-03.png" alt="article" class="w-1/2">
                                                            </div>
                                                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="w-full group-hover:scale-110 rounded-2xl">
                                                            <div class="text-white px-4 mt-6">
                                                                <h2 class="text-white! text-center">
                                                                    <?= get_the_title(); ?>
                                                                </h2>
                                                                <p class="text-justify">
                                                                    <?= get_the_excerpt();; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                break;
                                        }
                                            ?>
                                                </div>
                                            </div>
                                    <?php
                                    $articleCounter++;
                                endwhile;
                            }
                            wp_reset_postdata();


                                    ?>
                                        </div>

                                    </div>
    </section>
</main>
<?php
get_footer('falah');
