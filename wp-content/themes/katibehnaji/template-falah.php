<?php
/*
* Template name: falah2
*/
get_header('falahz');
?>
<aside class="fixed left-0 top-55 w-7/100 z-10 min-h-56 md:w-3/100 md:h-40 lg:h-60 xl:h-80 2xl:h-100">
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
<div id="deskside" class="w-35/100 hidden md:flex flex-col justify-start items-start fixed z-12 top-50/100 -translate-y-30/100">
    <ul class="list-none!">
        <li>
            <a href="#" id="gotokatibeh" class="text-yellow-500!">
                کتیبه ناجی
            </a>
        </li>
        <li>
            <a href="#" id="gotoAffiliatePro" class="text-yellow-500!">
                افیلیت پرو
            </a>
        </li>
        <li>
            <a href="#" id="gotomodel" class="text-yellow-500!">
                مدل انحصاری
            </a>
        </li>
        <li>
            <a href="#" id="gotodigital" class="text-yellow-500!">
                دیجیتال مارکتینگ
            </a>
        </li>
        <li>
            <a href="#" id="gotocoaching" class="text-yellow-500!">
                کوچینگ و برندینگ
            </a>
        </li>
        <li>
            <a href="#" id="gotoeventmarketing" class="text-yellow-500!">
                ایونت مارکتینگ
            </a>
        </li>
        <li>
            <a href="#" id="gototabliqmohiti" class="text-yellow-500!">
                تبلیغات محیطی
            </a>
        </li>
        <li>
            <a href="#" id="gotochap" class="text-yellow-500!">
                طراحی،چاپ و بسته بندی
            </a>
        </li>
        <li>
            <a href="#" id="gotohadaya" class="text-yellow-500!">
                هدایای تبلیغاتی
            </a>
        </li>
        <li>
            <a href="#" id="gotoeftekhar" class="text-yellow-500!">
                برندهایی که افتخار همکاری داشتیم
            </a>
        </li>
        <li>
            <a href="#" id="gotomaqalat" class="text-yellow-500!">
                مقالات اخبار تحلیل
            </a>
        </li>
        <li>
            <a href="#" id="gotofooter" class="text-yellow-500!">
                تماس با کتیبه ناجی
            </a>
        </li>
    </ul>
</div>
<div class="swiper baseSwiper" id="baseSwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide" id="katibeh">
            <div class="relative  bg-white rounded-sx overflow-hidden w-full h-full">
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
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" id="slidedesktopimage">
                    <?php
                    }
                    ?>
                    <div class="absolute top-0 right-0 z-4">
                        <?php
                        $image = get_field("desktopvideo");
                        if (! empty($image)) {
                        ?>
                            <video id="videoDesktop" class="grayscale-0 contrast-100 w-screen h-screen object-fill" autoplay muted loop>
                                <source src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                            </video>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="second-layer w-full h-80/100 absolute z-5 flex flex-col justify-between items-center top-20 right-0 down-videogradiant md:top-40">
                    <form action="#" class="searchForm md:hidden!">
                        <div class="border">
                            <div class="trail"></div>
                            <div class="trail trail-opposite"></div>
                        </div>
                        <div class="content">
                            <div class="flex">
                                <span class="bg-linear-65 from-primary  to-secondary w-17/100 py-1 px-1 flex justify-center items-center md:h-12! md:p-0!" id="formSpan">
                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/search.png" alt="search" class="w-1/2! md:min-h-2! md:w-33/100!">
                                </span>
                                <input type="text" name="search" id="search" class="bg-garyesh! md:h-12! px-4">
                            </div>
                        </div>
                    </form>
                    <div class="w-full flex justify-center items-center">
                        <h3 class="start text-center tracking-[1.75rem] uppercase font-gotic m-0!" id="start">
                            start
                        </h3>
                    </div>
                    <div class="md:w-full md:flex md:flex-start">
                        <div class="slogon text-left w-full px-6 md:w-50/100 md:mr-auto">
                            <div>
                                <div class="holding">
                                    <span class="font-gotic tracking-[0.8rem] inline-block">
                                        HOLDING
                                    </span>
                                </div>
                                <hgroup>
                                    <h1 class="uppercase text-[3.2rem]! font-frank! leading-15! text-left text-primary!">
                                        <?= the_field("englighslogon") ?>
                                    </h1>
                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/line.png" alt="line" class="w-full! md:w-3/6! md:mr-auto!">
                                    <h2 dir="rtl" class="font-gotic text-[1rem]! font-bold! text-left text-primary!">
                                        <?= the_field("persianslogon") ?>
                                    </h2>
                                </hgroup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="AffiliatePro">
            <div class="relative  bg-white rounded-sx overflow-hidden h-full">
                <div class="first-layer block! md:hidden!">
                    <?php
                    $image = get_field("affiliateimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block!">
                    <?php
                    $image = get_field("affiliateimagedesk");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="h-screen! w-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-full md:h-90/100 md:top-15 absolute z-5 flex flex-col justify-between items-center top-0 right-0 p-8">
                    <div class="top">
                        <hgroup>
                            <h2 class="text-primary! text-[1rem]! font-bold!">
                                <?= the_field('affilietemodel') ?>
                            </h2>
                            <h2 class="text-primary! text-[1rem]!">
                                <?= the_field('affilietekasb') ?>
                            </h2>
                            <h2 class="text-primary! text-[4rem]! m-0!">
                                <?= the_field('affilietetitle') ?>
                            </h2>
                            <h2 class="text-white! bg-secondary! text-[1rem]! mx-auto relative triangle">
                                <?= the_field('affilieteslogon') ?>
                            </h2>
                        </hgroup>
                    </div>
                    <div class="bottom w-full text-left">
                        <div class="text-left relative">
                            <div class="bg-primary! text-white absolute translate-x-50/100 left-20/100 -top-7 z-3 new-plan px-3 rounded-sm md:left-0">
                                <?= the_field('afeleatenewplan') ?>
                            </div>
                            <h2 class="text-white! font-black! text-[3rem]! m-0! text-shadow-20! text-shadow-white!  font-frank!">
                                <?= the_field('affiliatepro') ?>
                            </h2>
                            <p class="text-white! text-capitalize! tracking-[0.41rem]! mb-3!">
                                <?= the_field('withkatibehnaji') ?>
                            </p>
                            <a href="<?= the_field("afeleatlink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                                اطلاعات بیشتر
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="model">
            <div class="relative  bg-white rounded-sx overflow-hidden h-full w-full!">
                <div class="first-layer block! md:hidden!">
                    <?php
                    $image = get_field("modelmobileimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block!">
                    <?php
                    $image = get_field("modeldesktopimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-90/100 absolute top-10 md:h-85/100 md:top-20 z-5 flex flex-col justify-between items-center  right-0 p-8">
                    <div class="top">
                        <h2 class="text-[3rem]! text-primary! m-0!">
                            <?= the_field("karibemodel") ?>
                        </h2>
                        <p>
                            <span class="text-white! bg-secondary px-4 tracking-[0.61rem] capitalize!">
                                <?= the_field("brandingmodel") ?>
                            </span>
                        </p>
                    </div>
                    <div class="bottom w-full text-left px-5">
                        <div class="flex justify-center flex-row-reverse mb-3">
                            <p class="relative text-secondary!">
                                <span class="absolute text-[3rem]!">
                                    1
                                </span>
                            </p>
                            <div class="flex flex-col">
                                <div class="bg-linear-to-r from-gray-100/70 to-gray-500/70 text-center text-white text-[2rem] w-50 px-2">
                                    <?= the_field("pishbranding") ?>
                                </div>
                                <div class="text-secondary text-center">
                                    <?= the_field("prebranding") ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center flex-row-reverse mb-3">
                            <p class="relative text-secondary!">
                                <span class="absolute text-[3rem]!">
                                    2
                                </span>
                            </p>
                            <div class="flex flex-col">
                                <div class="bg-linear-to-r from-gray-100/70 to-gray-500/70 text-center text-white text-[2rem] w-50 px-2">
                                    <?= the_field("branding") ?>
                                </div>
                                <div class="text-secondary text-center">
                                    <?= the_field("brandingen") ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center flex-row-reverse mb-3">
                            <p class="relative text-secondary!">
                                <span class="absolute text-[3rem]!">
                                    3
                                </span>
                            </p>
                            <div class="flex flex-col">
                                <div class="bg-linear-to-r from-gray-100/70 to-gray-500/70 text-center text-white text-[2rem] w-50 px-2">
                                    <?= the_field("tadavom") ?>
                                </div>
                                <div class="text-secondary text-center">
                                    <?= the_field("brandingcontinuity") ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center flex-row-reverse mb-3">
                            <p class="relative text-secondary!">
                                <span class="absolute text-[3rem]!">
                                    4
                                </span>
                            </p>
                            <div class="flex flex-col">
                                <div class="bg-linear-to-r from-gray-100/70 to-gray-500/70 text-center text-white text-[2rem] w-50 px-2">
                                    <?= the_field("pasabranding") ?>
                                </div>
                                <div class="text-secondary text-center">
                                    <?= the_field("postbranding") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="digital">
            <div class="relative  bg-[#25388c] rounded-sx overflow-hidden h-full w-full!">
                <div class="first-layer block! md:hidden!">
                    <?php
                    $image = get_field("digitalmaketingmobileimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block!">
                    <?php
                    $image = get_field("digitalmaketingdesktopimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-80/100 absolute z-5 flex flex-col justify-between  top-20 right-0 p-8">
                    <div class="top">
                        <h2 class="text-white! text-right text-[2rem]!">
                            <span class="bg-primary px-3  blue-triangle">
                                <?= the_field("digitalmarketing") ?>
                            </span>
                        </h2>
                        <div class="m-0-parent text-white! text-right!">
                            <?= the_field("digitalmarketinglist") ?>
                        </div>
                    </div>
                    <div class="bottom w-full text-left" dir="ltr">
                        <h2 class="text-white! text-[3rem]! m-0! font-frank! char-reveal" id="animated-heading">
                            <?= the_field("digitalmarketingen") ?>

                        </h2>
                        <p class="text-white! text-capitalize! tracking-[0.41rem]! mb-3!">
                            <?= the_field('withkatibehnaji') ?>
                        </p>
                        <a href="<?= the_field("digitallink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                            اطلاعات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="coaching">
            <div class="relative  bg-[#D7DBE6] rounded-sx overflow-hidden h-full w-full!">
                <div class="first-layer block! md:hidden! w-full!">
                    <?php
                    $image = get_field("coachingmobileimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block! w-full!">
                    <?php
                    $image = get_field("coachingdeskimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-90/100 md:h-80/100 absolute z-5 flex flex-col justify-between items-center top-10 md:top-20 right-0 p-8">
                    <div class="top">
                        <div class="flex flex-wrap items-center">
                            <div class="w-40/100">
                                <h2 class="text-primary! right-red-line text-left px-4!">
                                    <?= the_field("coachingbranding") ?>
                                </h2>
                            </div>
                            <div class="w-60/100 text-gray-500 md:text-black text-right! text-[0.8rem]! md:text-[2rem]! leading-tight px-2 m-0-parent">
                                <?= the_field("coachingtext") ?>
                            </div>
                        </div>
                        <div class="triangle">
                            <span class="bg-secondary text-white px-4">
                                <?= the_field("coachingslogon") ?>
                            </span>
                        </div>
                    </div>
                    <div class="bottom w-full text-left">
                        <h2 class="text-primary! text-[3.5rem]! m-0! leading-14! font-frank!">
                            <?= the_field("coachingbrandingen") ?>
                        </h2>
                        <p class="text-gray-500! md:text-black! text-capitalize! tracking-[0.41rem]! mb-3!">
                            <?= the_field('withkatibehnaji') ?>
                        </p>
                        <a href="<?= the_field("coachnglink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                            اطلاعات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="eventmarketing">
            <div class="relative  bg-[#2B2D34] rounded-sx overflow-hidden h-full w-full!">
                <div class="first-layer block! md:hidden!">
                    <?php
                    $image = get_field("eventmarketing");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block!">
                    <?php
                    $image = get_field("eventmarketing");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-90/100 absolute z-5 flex flex-col justify-between items-center top-10 md:top-20 right-0 p-8">
                    <div class="top text-right! text-white">
                        <h2 class="text-white! text-[2.8rem]! m-0! event-marketing">
                            <?= the_field('eventmarketingtext') ?>
                        </h2>
                        <div class="m-0-parent">
                            <?= the_field('eventlist') ?>
                        </div>
                    </div>
                    <div class="bottom w-full text-left">
                        <h2 class="text-white! text-[2.9rem]! capitalize">
                            <?= the_field('eventmarketingen') ?>
                        </h2>
                        <p class="text-white! text-capitalize! tracking-[0.41rem]! mb-3!">
                            <?= the_field('withkatibehnaji') ?>
                        </p>
                        <a href="<?= the_field("eventlink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                            اطلاعات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="tabliqmohiti">
            <div class="relative  bg-white rounded-sx overflow-hidden h-full w-screen md:flex md:flex-col">
                <div class="first-layer block! md:hidden!">
                    <?php
                    $image = get_field("tablighatmobileimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block! mt-auto">
                    <?php
                    $image = get_field("tablighdeskimage");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-20!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-90/100 absolute z-5 flex flex-col justify-between items-center top-10 md:top-20 right-0 p-8">
                    <div class="top relative z-10">
                        <h2 class="text-right text-primary text-[2.8rem]! m-0!">
                            <?= the_field('tablighatmohiti') ?>
                        </h2>
                        <div class="text-right leading-6! text-gray-800! text-[0.9rem]! m-0-parent">
                            <?= the_field('tablighmohitilist') ?>
                        </div>
                    </div>
                    <div class="bottom w-full text-left relative z-3">
                        <?php
                        $image = get_field("tablighbannerimage");
                        if (! empty($image)) {
                        ?>
                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="tabliqat-banner w-80/100! md:w-20/100!">
                        <?php
                        }
                        ?>

                        <h2 class="text-[3rem]! z-4 relative mb-12! text-gray-900!  font-frank!">
                            <span>
                                <?= the_field('environmental') ?>
                            </span>
                        </h2>
                        <div class="absolute z-6 left-0 bottom-5 font-bold text-[3rem]! text-gray-900!  font-frank!">
                            <p class="m-0! advertizing">
                                <?= the_field('advertising') ?>
                            </p>
                        </div>
                        <a href="<?= the_field("tabliqlink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                            اطلاعات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="chap">
            <div class="relative bg-black rounded-lg overflow-hidden h-full w-full">
                <!-- Mobile Image -->
                <div class="block md:hidden">
                    <?php
                    $image = get_field("chapimage");
                    if (!empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen! object-cover">
                    <?php
                    }
                    ?>
                </div>

                <!-- Desktop Image -->
                <div class="hidden md:block">
                    <?php
                    $image = get_field("chapimgdesk");
                    if (!empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen! object-cover">
                    <?php
                    }
                    ?>
                </div>
                <!-- Content Overlay -->
                <div class="absolute h-85/100 md:h-80/100 top-12 md:top-25 inset-0 flex flex-col justify-between p-4 z-2">
                    <div class="flex flex-wrap w-full top">
                        <div class="w-40/100 md:w-2/5 mb-4 md:mb-0">
                            <h2 class="text-white! text-xl font-bold chap-line text-left leading-10! chap-heading md:text-black!">
                                <span class="text-left inline-block w-full"><?= the_field('tarahi') ?></span>
                                <span class="text-left inline-block w-fit text-white!" id="redbganimated"><?= the_field('chap') ?></span>
                                <span class="text-left inline-block w-full"><?= the_field('bastebandi') ?></span>
                            </h2>
                        </div>
                        <div class="w-60/100 md:w-3/5 text-white text-right no-list-style-parent m-0-parent text-[0.8rem]! px-1 leading-8 md:text-black!">
                            <?= the_field('chaptext') ?>
                        </div>
                    </div>

                    <div class="w-full text-left text-white! bottom">
                        <h2 class="text-[3.5rem]! font-bold text-white! font-frank! m-0!">
                            <?= the_field('designprintingpackaging') ?>
                        </h2>
                        <p class="tracking-wider mb-3">
                            <?= the_field('withkatibehnaji') ?>
                        </p>
                        <a href="<?= the_field("eventlink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                            اطلاعات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="hadaya">
            <div class="relative  bg-white rounded-sx overflow-hidden w-full h-full">
                <div class="first-layer block! md:hidden!">
                    <?php
                    $image = get_field("tabliqimagemobile");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="first-layer hidden! md:block!">
                    <?php
                    $image = get_field("hadayadesk");
                    if (! empty($image)) {
                    ?>
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-full! h-screen!">
                    <?php
                    }
                    ?>
                </div>
                <div class="second-layer w-full h-85/100 absolute z-5 flex flex-col justify-between items-center top-10 md:top-20 right-0 p-8">
                    <div class="top">
                        <h2 class="text-white! text-[3rem]! leading-10! m-0!">
                            <?= the_field('hadayatabliqati') ?>
                        </h2>
                        <p class="text-secondary leading-10!">
                            <?= the_field('hadayaderslogon') ?>
                        </p>
                        <div class="text-white leading-10! m-0-parent">
                            <?= the_field('hadayatext') ?>
                        </div>
                    </div>
                    <div class="bottom w-full text-left">
                        <h2 class="text-white! text-[3.5rem]! m-0!">
                            <?= the_field('promotionalgifts') ?>
                        </h2>
                        <p class="text-white! text-capitalize! tracking-[0.41rem]! mb-3!">
                            <?= the_field('withkatibehnaji') ?>
                        </p>
                        <a href="<?= the_field("hadayalink") ?>" class="rounded-sm! bg-secondary! text-white! px-3">
                            اطلاعات بیشتر
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="eftekhar">
            <div class="relative  bg-white rounded-sx overflow-hidden! h-full w-full! ">
                <div class="w-full md:w-60/100 h-screen md:mx-auto relative!">
                    <div class="second-layer w-full top-0 right-0 p-8 pt-20! md:pt-40!">
                        <h2 class="text-center text-[1rem]!">
                            <span id="typing-headlinespan01">
                                <?= the_field("eftekhartext01") ?>
                            </span>
                            <span class="bg-primary text-white" id="typing-headlinespan02">
                                <?= the_field("eftekhar") ?>
                            </span>
                            <span id="typing-headlinespan03">
                                <?= the_field("hamkari") ?>
                            </span>
                        </h2>
                        <p class="text-center text-[0.8rem]!" id="eftekhartextenglish">
                            <?= the_field('honor') ?>
                        </p>
                        <div class="w-80/100 mx-auto border-2 border-gray-500 rounded-2xl">
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
                                        <div class="w-1/3 md:w-1/4 xl:w-1/5 2xl:w-1/6 px-6 py-2 md:px-4 lg:px-10 xl:px-12 2xl:px-10">
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
                    </div>
                    <div class="third-layer absolute w-full z-5 bottom-0 right-0">
                        <div class="flex flex-wrap w-full">
                            <div class="w-1/3 md:w-1/3 px-1">
                                <div class="flex flex-col w-full">
                                    <h2 class="text-center relative text-secondary!">
                                        <span class="text-[4rem]" id="tagrobercontity">
                                            <?= the_field('tagrobercontity') ?>
                                        </span>
                                        <span class="block rotate-270 absolute top-0 left-0 z-7 text-[0.9rem] lg:left-40 2xl:left-20">
                                            سال
                                        </span>
                                    </h2>
                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/tagrobeh-01.png" alt="">
                                </div>
                            </div>
                            <div class="w-1/3 md:w-1/3 px-1">
                                <div class="flex flex-col w-full">
                                    <h2 class="text-center relative text-secondary!">
                                        <span class="text-[4rem]" id="projectcountity">
                                            <?= the_field('projectcountity') ?>
                                        </span>
                                        <span class="block rotate-270 absolute top-0 left-0 z-7 text-[0.9rem] lg:left-40 2xl:left-20">
                                            تعداد
                                        </span>
                                    </h2>
                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/projects.png" alt="">
                                </div>
                            </div>
                            <div class="w-1/3 md:w-1/3 px-1">
                                <div class="flex flex-col w-full">
                                    <h2 class="text-center relative text-secondary!">
                                        <span class="text-[4rem]" id="rezayatcountent">
                                            <?= the_field('rezayatcountent') ?>
                                        </span>
                                        <span class="block rotate-270 absolute top-0 left-0 z-7 text-[0.9rem] lg:left-40 2xl:left-20">
                                            درصد
                                        </span>
                                    </h2>
                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/rezayat.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" id="maqalat">
            <div class="relative  bg-white rounded-sx overflow-hidden h-full w-full! p-5">
                <div class="first-layer block! relative mt-10! w-full! md:mt-50! lg:mt-5! xl:mt-16!">
                    <hgroup>
                        <h2 class="text-[1rem]! flex items-stretch">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/purplebox.jpg" alt="purplebox" class="block w-1/5!">
                            <span class="bg-linear-to-r from-[#fbfcfc] to-[#e5e6e7] flex items-center">
                                <?= the_field("articletitle") ?>
                            </span>
                        </h2>

                        <h2 class="text-[1rem]! flex items-center" ?>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/line-2.png" alt="purplebox" class="w-1/5! md:h-[3px]!">

                            <?= the_field("articletitleen") ?>
                        </h2>
                    </hgroup>
                    <div class="position-relative w-60/100 xl:w-40/100 mx-auto">
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
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article.png" alt="article" class="w-1/2!">
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
                                            </div>
                                        </div>
                                    <?php
                                        break;
                                    case 2:
                                    ?>
                                        <div class="slidecount-<?= $articleCounter ?> bg-[#42195e]! rounded-2xl absolute top-45 xl:top-40 right-25 w-60/100 xl:w-40/100 xl:right-138 z-4 shadow-xl border-black border-2 -rotate-5 md:-rotate-2">
                                            <div class="relative">
                                                <div class="absolute top-20 -right-7 z-2">
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article-02.png" alt="article" class="w-1/2!">
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
                                    case 3:
                                    ?>
                                        <div class="slidecount-<?= $articleCounter ?> bg-[#230e2e]! rounded-2xl absolute top-80 xl:top-40 right-20 xl:right-135 w-60/100 xl:w-40/100 z-6 shadow-xl border-black border-2 -rotate-15 md:-rotate-5">
                                            <div class="relative">
                                                <div class="absolute top-14 -right-5 z-2">
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article-03.png" alt="article" class="w-1/2!">
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

                        <?php
                                $articleCounter++;
                            endwhile;
                        }
                        wp_reset_postdata();


                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="swiper-slide" id="maqalat02">
            <div class="relative  bg-white rounded-sx overflow-hidden h-full w-full! p-5">
                <div class="first-layer block! relative mt-10! w-full! md:mt-50! lg:mt-5! xl:mt-16!">
                    <hgroup>
                        <h2 class="text-[1rem]! flex items-stretch">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/purplebox.jpg" alt="purplebox" class="block w-1/5!">
                            <span class="bg-linear-to-r from-[#fbfcfc] to-[#e5e6e7] flex items-center">
                                <?= the_field("articletitle") ?>
                            </span>
                        </h2>

                        <h2 class="text-[1rem]! flex items-center" ?>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/line-2.png" alt="purplebox" class="w-1/5! md:h-[3px]!">

                            <?= the_field("articletitleen") ?>
                        </h2>
                    </hgroup>
                    <div class="position-relative w-60/100 xl:w-40/100 mx-auto">
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
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article.png" alt="article" class="w-1/2!">
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
                                            </div>
                                        </div>
                                    <?php
                                        break;
                                    case 2:
                                    ?>
                                        <div class="slidecount-<?= $articleCounter ?> bg-[#42195e]! rounded-2xl absolute top-45 xl:top-40 right-25 w-60/100 xl:w-40/100 xl:right-138 z-4 shadow-xl border-black border-2 -rotate-5 md:-rotate-2">
                                            <div class="relative">
                                                <div class="absolute top-20 -right-7 z-2">
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article-02.png" alt="article" class="w-1/2!">
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
                                    case 3:
                                    ?>
                                        <div class="slidecount-<?= $articleCounter ?> bg-[#230e2e]! rounded-2xl absolute top-80 xl:top-40 right-20 xl:right-135 w-60/100 xl:w-40/100 z-6 shadow-xl border-black border-2 -rotate-15 md:-rotate-5 animate__rotateOutDownRight animate__animated  animate__delay">
                                            <div class="relative animate__rotateOutDownRight animate__animated">
                                                <div class="absolute top-14 -right-5 z-2">
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article-03.png" alt="article" class="w-1/2!">
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

                        <?php
                                $articleCounter++;
                            endwhile;
                        }
                        wp_reset_postdata();


                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="swiper-slide" id="maqalat03">
            <div class="relative  bg-white rounded-sx overflow-hidden h-full w-full! p-5">
                <div class="first-layer block! relative mt-10! w-full! md:mt-50! lg:mt-5! xl:mt-16!">
                    <hgroup>
                        <h2 class="text-[1rem]! flex items-stretch">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/purplebox.jpg" alt="purplebox" class="block w-1/5!">
                            <span class="bg-linear-to-r from-[#fbfcfc] to-[#e5e6e7] flex items-center">
                                <?= the_field("articletitle") ?>
                            </span>
                        </h2>

                        <h2 class="text-[1rem]! flex items-center" ?>
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/line-2.png" alt="purplebox" class="w-1/5! md:h-[3px]!">

                            <?= the_field("articletitleen") ?>
                        </h2>
                    </hgroup>
                    <div class="position-relative w-60/100 xl:w-40/100 mx-auto">
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
                                                    <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/article.png" alt="article" class="w-1/2!">
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
                                            </div>
                                        </div>
                                <?php
                                        break;
                                }
                                ?>

                        <?php
                                $articleCounter++;
                            endwhile;
                        }
                        wp_reset_postdata();


                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="swiper-slide" id="footer">
            <div class="relative  bg-blue-900 rounded-sx overflow-hidden h-full w-full xl:pt-20">
                <div class="w-full md:w-65/100 mx-auto">
                    <div class="flex justify-center items-center pt-15">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="flex justify-center items-center w-1/6 md:w-1/10">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/logo.webp" alt="instagram" class="w-full!">
                        </a>
                    </div>
                    <div class="px-8">
                        <div class="flex flex-wrap">
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        تماس با ما
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        برندبوک
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        درباره ما
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        ایونت مارکتینگ
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        نمونه کارها
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        دیجیتال مارکتینگ
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        پروژه ها
                                    </a>
                                </div>
                            </div>
                            <div class="w-1/2 md:w-1/3 px-2 my-2">
                                <div class="mahallo">
                                    <a href="#" class="text-white!">
                                        تبلیغات محیطی
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-2 my-2">
                                <div class="mahallo w-80/100 md:w-full mx-auto">
                                    <a href="#" class="text-white!">
                                        مدل برندینگ کتیبه ناجی
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-2 w-80/100 mx-auto text-white text-right!">
                        <div class="flex items-center!">
                            <div class="w-1/10! xl:w-3/100!">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/adressicon.webp" alt="adressicon.webp" class="w-full!">
                            </div>
                            <p class="text-yellow-500! my-0 w-3/10! m-0!">
                                دفتر تهـــــران |
                            </p>
                            <p class="m-0! w-6/10! m-0!">
                                خیابــــان ظفــــر، بلوار آرش شرقی، خیابان دلیری، پلاک14، واحد 1
                                37 15 860 - 021 - 33 15 860 - 021
                            </p>
                        </div>
                        <div class="flex items-center!">
                            <div class="w-1/10! xl:w-3/100!">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/adressicon.webp" alt="adressicon" class="w-full!">
                            </div>
                            <p class="text-yellow-500! my-0! w-3/10">
                                دفتر کرج|
                            </p>
                            <p class="w-6/10! my-0!">
                                گوهردشت،فلکه اول، ساختمان ایرانیان
                                83 - 81 16 20 34 - 026
                            </p>
                        </div>
                    </div>
                    <div class="my-2 w-80/100 mx-auto text-yellow-500 text-center! flex items-center justify-center">
                        <div class="xl:w-10/100">
                            <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/whatsupgold.webp" alt="whatsupgold" class="w-1/7!">
                        </div>
                        <p class="m-0!"> 4700 144 0935</p>
                    </div>
                    <p class="text-center m-0! text-white!">
                        همین حالا تماس بگیرید
                    </p>
                    <div class="w-50/100 md:w-25/100 flex flex-wrap mx-auto bg-white my-0">
                        <div class="w-1/4 md:w-1/4 px-1">
                            <a href="#">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/instagram.webp" alt="instagram" class="w-full!">
                            </a>
                        </div>
                        <div class="w-1/4 md:w-1/4 px-1">
                            <a href="#">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/whatsappicon.webp" alt="whatsappicon" class="w-full!">
                            </a>
                        </div>
                        <div class="w-1/4 md:w-1/4 px-1">
                            <a href="#">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/telegram.webp" alt="telegram" class="w-full!">
                            </a>
                        </div>
                        <div class="w-1/4 md:w-1/4 px-1">
                            <a href="#">
                                <img src="<?= esc_url(home_url('/')) ?>wp-content/themes/katibehnaji/assets/images/falah/aparat.webp" alt="aparat" class="w-full!">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination md:hidden"></div>
</div>



<?php
get_footer('falahz');
