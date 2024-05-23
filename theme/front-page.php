<?php

/**
 * The homepage template file
 *
 * @package Swistak_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="hero">
      <div class="mx-auto h-[450px] md:h-[600px] max-w-full bg-primary flex flex-col items-center justify-center">
        <div class="container max-w-[1024px] flex flex-col items-center justify-center">
          <h1 class="text-3xl md:text-5xl lg:text-6xl text-center font-extrabold text-white tracking-wide	!leading-[50px] md:!leading-[70px]">
            <?php the_field('hero_text'); ?>
          </h1>
        </div>
      </div>
    </section>

    <section class="introduction">
      <div class="container py-20">
        <div class="text-content mx-auto mb-16 max-w-[700px]">
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <h3 class="mb-8 text-center text-3xl font-bold leading-10"><?php the_field('title_above_tiles'); ?></h3>
          </div>
          <div class="text-lg text-center"><?php the_field('subtitle_above_tiles'); ?></div>
        </div>
        <button class="mx-auto mb-5 block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
          <a href="#"><?php the_field('button_introduction_title'); ?></a>
        </button>
        <a href="#more" class="mx-auto block w-fit text-lg hover:text-primary transition duration-200">..Dowiedz się więcej..</a>
      </div>
    </section>

    <section class="swiper1 mb-20 overflow-hidden">
      <div class="max-w-full w-full lg:container mx-auto">
        <div class="swiper px-5 max-w-full" data-js="swiper-tiles-mobile">
          <div class="swiper-wrapper lg:grid lg:grid-cols-3 lg:gap-10">
            <?php
            if (have_rows('swiper1')) :
              while (have_rows('swiper1')) : the_row();
                $image = get_sub_field('tile_icon');
                $tile_text = get_sub_field('tile_text');
            ?>
                <div class="swiper-slide max-w-full h-auto border border-primary rounded-2xl p-10 flex flex-col items-center justify-center">
                  <div class="icon mb-5">
                    <span class="text-[100px]"><?php echo $image; ?></span>
                  </div>
                  <div class="text-content text-center">
                    <p><?php echo $tile_text; ?></p>
                  </div>
                </div>
            <?php
              endwhile;
            else :
            endif;
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="about-author bg-primary overflow-visible lg:mt-52">
      <div class="container py-20 flex flex-col-reverse md:flex-row gap-14 md:gap-28 justify-center">
        <div class="about-image rounded-xl relative lg:scale-[1.2]">
          <?php $about_author_img = get_field('about_author_img'); ?>
          <img src="<?php echo ($about_author_img) ? esc_html($about_author_img['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo ($about_author_img) ? esc_html($about_author_img['title']) : 'logo'; ?>" class="lg:mt-[-130px] w-full md:w-auto">
        </div>
        <div class="about-text text-white max-w-[450px]">
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--left">
              <div class="ks-decoration__wave ks-decoration__wave--small [&>div]:bg-white">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <h3 class="mb-8 text-3xl font-bold leading-10"><?php the_field('about_author_title'); ?></h3>
          </div>
          <p class="text-lg leading-8"><?php the_field('about_author_desc'); ?></p>
        </div>
      </div>
    </section>

    <section class="attention">
      <div class="container py-20">
        <div class="text-content mx-auto mb-16 max-w-[700px]">
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <h3 class="mb-8 text-center text-3xl font-bold leading-10"><?php the_field('attention_title'); ?></h3>
          </div>
          <div class="text-lg text-left mb-5"><?php the_field('attention_desc'); ?></div>
        </div>
        <div class="excel-table-tile mx-auto mb-16 max-w-[700px]">
          <p class="mb-8 text-center text-3xl font-bold leading-10"><?php the_field('image_title'); ?></p>
          <img src="<?php echo (get_field('screenshot')) ? esc_html(get_field('screenshot')['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo esc_html(get_field('screenshot')['title']); ?>">
          <div class="desc mt-10 text-lg">
            <?php the_field('desc') ?>
          </div>
        </div>
      </div>
    </section>

    <section class="opinions overflow-hidden">
      <div class="container mx-auto pb-20">
        <div class="title-content mb-16 relative">
          <div class="ks-decoration ks-decoration--center">
            <div class="ks-decoration__wave ks-decoration__wave--small">
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
            </div>
          </div>
          <h3 class="mb-12 mx-auto max-w-[850px] text-3xl font-bold text-center"><?php the_field('title') ?></h3>
        </div>
        <div class="swiper mb-20 max-w-full overflow-visible" data-js="swiper-tiles-mobile-horizontal">
          <div class="swiper-wrapper xl:grid lg:grid-cols-2 lg:gap-10">
            <?php
            if (have_rows('opinions')) :
              while (have_rows('opinions')) : the_row();
                $image = get_sub_field('image');
                $quote = get_sub_field('quote');
                $opinion_text = get_sub_field('opinion_text');
                $author = get_sub_field('author');
                $author_desc = get_sub_field('author_desc');
            ?>
                <div class="swiper-slide lg:min-w-[450px] h-auto opinion-tile p-5 md:p-12 py-8 md:py-auto rounded-md flex flex-col md:flex-row gap-10 bg-[#00b3a71a] relative">

                  <img class="rounded-md w-[250px] h-[250px]" src="<?php echo esc_html($image['url']); ?>" alt="<?php echo esc_html($image['title']); ?>">
                  <div class="opinion-text">
                    <p class="mb-5 text-lg font-semibold"><?php echo $quote; ?></p>
                    <p class="mb-5"><?php echo $opinion_text; ?></p>
                    <p class="font-semibold text-base leading-5"><?php echo $author; ?></p>
                    <p class="text-gray-400 leading-5 font-light"><?php echo $author_desc; ?></p>
                  </div>
                </div>
            <?php
              endwhile;
            else :
            endif;
            ?>
          </div>
        </div>
        <button class="mx-auto mb-5 block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
          <a href="#">..Tez tak chcę!..</a>
        </button>
      </div>
    </section>

    <section class="text-section mb-20">
      <div class="font-bold text-center text-lg lg:text-2xl">
        <div class="negatives-row py-20 bg-[#F7F7F7]">
          <div class="container max-w-[850px]">
            <div class="title">
              <div class="title-content mb-16 relative">
                <div class="ks-decoration ks-decoration--center">
                  <div class="ks-decoration__wave ks-decoration__wave--small">
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                    <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                  </div>
                </div>
                <h3 class="font-semibold text-2xl">Brzmi znajomo?</h3>
                <p class="subtitle mb-8 font-bold text-3xl leading-10">„Robię za dużo na raz… i to mnie przytłacza.”</p>
              </div>
            </div>

            <p class="font-semibold">Przez to:</p>
            <ul class="mt-10 font-semibold leading-10 [&>li]:mb-8 [&>li]:last:mb-0">
              <li>❌ idziesz wolniej od innych, albo w ogóle stoisz w miejscu, marnując swój potencjał,</li>
              <li>❌ brakuje Ci wolnego czasu na odpoczynek, dla rodziny i na hobby,</li>
              <li>❌ czujesz się zmęczony i przytłoczony ilością zadań na swojej liście rzeczy do zrobienia. </li>
            </ul>
          </div>
        </div>

        <div class="desc mx-auto my-20 text-left font-normal [&>p]:mb-8">
          <div class="container max-w-[850px] text-center text-2xl">
            <p class="mb-10">Wkurza Cię to, że nie możesz odpuścić tych mniej ważnych rzeczy, choć wiesz, że Cię hamują.</p>
            <p class="mb-10">Ale najgorsze jest to, że odbija się to na Twoim samopoczuciu, zdrowiu i relacjach. Czasami masz po prostu ochotę rzucić to wszystko i wyjechać w Bieszczady.</p>
            <p class="mb-10">Ale najgorsze jest to, że odbija się to na Twoim samopoczuciu, zdrowiu i relacjach. Czasami masz po prostu ochotę rzucić to wszystko i wyjechać w Bieszczady.</p>
            <p>Nie masz pewności, co warto dalej robić, a co lepiej sobie odpuścić.</p>
            <p class="font-bold">A gdyby tak istniało proste w użyciu narzędzie, które da Ci taką pewność?
            </p>
          </div>
        </div>

        <div class="positives-row py-20 bg-[#F7F7F7]">
          <div class="container mx-auto max-w-[850px] text-center">
            <h3 class="font-bold text-3xl mb-5">Wyobraź sobie inny scenariusz </h3>
            <div class="desc2 font-normal text-2xl text-left">
              <p class="mb-8">Wyobraź sobie, że przestałeś robić wszystko, a skupiłeś się na mniejszej liczbie rzeczy. Ale tych ,<span class="font-bold">najważniejszych</span>, które są bardziej spójne z Twoimi talentami.</p>
              <p class="mb-8">Wycofałeś się z aktywności, które tylko zajmowały Twój czas, ale były zapychaczami. Teraz widzisz większe postępy w najważniejszych dla siebie obszarach. <span class="font-bold">Jesteś wreszcie spokojny, bo wiesz, które rzeczy:</span></p>
              <ul class="mb-8">
                <li>✔️ zapewnią Ci stabilność i bezpieczeństwo </li>
                <li>✔️ pomogą Ci zrealizować w pełni Twój potencjał</li>
              </ul>
              <p class="mb-8">Zamiast stresu i chaosu masz klarowność i spokój, bo wiele spraw Ci się wyjaśniło. Zyskałeś kilka dodatkowych godzin wolnego czasu w tygodniu, które możesz przeznaczać na odpoczynek, dla rodziny i przyjaciół lub na hobby.</p>
              <h4 class="mb-5 font-bold">Czy taki scenariusz jest w ogóle osiągalny?</h4>
              <p>Tak! Choć większość osób nie wierzy, że w jej realizacji pomoże Ci jedna tabelka w Excelu.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="zawartosc" class="about-product mb-20">
      <div class="container max-w-[1140px] text-left text-lg lg:text-2xl">
        <div class="title-content mb-16 relative">
          <div class="ks-decoration ks-decoration--center">
            <div class="ks-decoration__wave ks-decoration__wave--small">
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
            </div>
          </div>
          <h3 class="mb-4 font-bold text-3xl text-center"><?php the_field('about_product_title'); ?></h3>
        </div>

        <div class="about-desc mb-24">
          <div class="tool-image mb-5">
            <img src="<?php echo (get_field('about_product_img')) ? esc_html(get_field('about_product_img')['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo esc_html(get_field('about_product_img')['title']); ?>">
          </div>
          <?php the_field('about_product_desc'); ?>
        </div>

        <ul class="about-steps [&>li]:mb-8">
          <?php
          if (have_rows('steps')) :
            while (have_rows('steps')) : the_row();
              $steps_number = get_sub_field('steps_number');
              $step_title = get_sub_field('step_title');
              $step_desc = get_sub_field('step_desc');
              $step_img = get_sub_field('step_img');
          ?>
              <li class="md:flex gap-10 basis mb-8">
                <div class="desc basis-1/2 self-center">
                  <p class="font-bold mb-5">
                    <span class="text-primary text-3xl"><?php echo $steps_number; ?></span><?php echo $step_title ?>
                  </p>
                  <p><?php echo $step_desc; ?></p>
                </div>
                <div class="about-img basis-1/2">
                  <img src="<?php echo esc_html(get_sub_field('step_img')['url']); ?>" alt="<?php echo esc_html(get_sub_field('step_img')['title']); ?>">
                </div>
              </li>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </ul>
      </div>
    </section>

    <section class="about-specifics lg:mb-20 bg-[#F7F7F7]">
      <div class="container max-w-[850px] py-20">
        <div class="title text-center">
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <h3 class="font-bold text-3xl"><?php the_field('about_secifics_title'); ?></h3>
          </div>
          <p class="subtitle mb-8 font-medium text-2xl leading-10"><?php the_field('about_secifics_subtitle'); ?></p>
          <p class="subtitle2 font-medium text-2xl"><?php the_field('about_secifics_subtitle2'); ?></p>
        </div>
        <ul class="my-10 mx-auto max-w-[700px] text-lg lg:text-2xl leading-10 [&>li]:mb-8">
          <?php
          if (have_rows('specifics_list')) :
            while (have_rows('specifics_list')) : the_row();
              $specifics_list_item = get_sub_field('specifics_list_item');
          ?>
              <li><?php echo $specifics_list_item; ?></li>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </ul>
        <button class="mx-auto block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
          <a href="#"><?php the_field('specifics_btn_text'); ?></php></a>
        </button>
      </div>
    </section>

    <section class="why">
      <div class="container mx-auto max-w-[850px] mb-10 py-20 bg-[#00b3a71a] rounded-xl">
        <div class="title text-center">
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <h3 class="mb-2 font-bold text-3xl"><?php the_field('why_title'); ?></h3>
          </div>
          <p class="subtitle mb-8 font-medium text-2xl leading-10"><?php the_field('why_subtitle'); ?></p>
        </div>
        <ul class="my-10 mx-auto max-w-[700px] text-lg lg:text-2xl leading-9 [&>li]:mb-8">
          <?php
          if (have_rows('why_list')) :
            while (have_rows('why_list')) : the_row();
              $why_list_item = get_sub_field('why_list_item');
          ?>
              <li><?php echo $why_list_item; ?></li>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </ul>
      </div>
    </section>

    <section class="see-more">
      <div class="container max-w-[850px] py-20 text-lg lg:text-2xl">
        <div class="title mb-5 text-center">
          <h3 class="mb-2 font-semibold text-3xl"><?php the_field('see_more_title'); ?></h3>
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <p class="subtitle mb-8 font-bold text-3xl leading-10"><?php the_field('see_more_subtitle'); ?></p>
          </div>
          <div class="subtitle leading-10"><?php the_field('see_more_desc'); ?></div>
        </div>
        <div class="laptop-image mb-8">
          <img src="<?php echo (get_field('see_more_screenshot')) ? esc_html(get_field('see_more_screenshot')['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo esc_html(get_field('see_more_screenshot')['title']); ?>">
        </div>
        <p class="subtitle leading-10 text-center"><?php the_field('see_more_img_desc'); ?></p>
      </div>
    </section>

    <section class="career-path-opinions-swiper mb-20 overflow-hidden">
      <div class="max-w-full px-5 w-full md:container mx-auto">
        <h3 class="mb-24 font-bold text-3xl text-center">Osoby, które już skorzystały ze <span class="text-primary">Ścieżek Kariery </span>mówią</h3>

        <div class="swiper mb-20 max-w-full overflow-visible" data-js="swiper-tiles-mobile">
          <div class="swiper-wrapper lg:grid lg:grid-cols-3 lg:gap-10">
            <?php
            if (have_rows('career_path_opinions_swiper')) :
              while (have_rows('career_path_opinions_swiper')) : the_row();
                $author_img = get_sub_field('career_path_opinions_swiper_img');
                $opinion_text = get_sub_field('career_path_opinions_swiper_text');
                $author_name = get_sub_field('career_path_opinions_swiper_author_name');
            ?>
                <div class="swiper-slide max-w-full h-auto rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 hover:border-primary transition duration-300 relative">
                  <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                    <div class="opinion-author-image mx-auto max-w-[150px] relative">
                      <img src="<?php echo esc_html($author_img['url']); ?>" alt="<?php echo esc_html($author_img['title']); ?>">
                      <div class="w-[50px] h-[50px] p-3 rounded-full bg-primary flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                        <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                          <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="text-content text-center">
                    <p class="mb-5 font-light"><?php echo $opinion_text; ?></p>
                    <p class="author font-semibold text-lg"><?php echo $author_name; ?></p>
                  </div>
                </div>
            <?php
              endwhile;
            else :
            endif;
            ?>
          </div>
        </div>

        <button class="mx-auto block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
          <a href="#"><?php the_field('career_path_opinions_btn_text'); ?></a>
        </button>
      </div>
    </section>

    <section id="dla-kogo" class="will-it-work bg-[#F7F7F7]">
      <div class="container mx-auto py-20">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-2xl"><?php the_field('will_it_work_title'); ?></h3>
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <p class="subtitle mb-8 font-bold text-3xl leading-10"><?php the_field('will_it_work_subtitle'); ?></p>
          </div>
        </div>
        <ul class="my-10 mx-auto max-w-[700px] text-2xl leading-9 [&>li]:mb-8">
          <?php
          if (have_rows('will_it_work_list')) :
            while (have_rows('will_it_work_list')) : the_row();
              $will_it_work_list_item = get_sub_field('will_it_work_list_item');
          ?>
              <li><?php echo $will_it_work_list_item; ?></li>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </ul>
        <button class="mx-auto mb-24 block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
          <a href="#"><?php the_field('will_it_work_btn_text'); ?></a>
        </button>

        <h3 class="mb-2 font-semibold text-3xl text-center"><?php the_field('will_it_work_title2'); ?></h3>
        <ul class="my-10 mx-auto max-w-[700px] text-2xl leading-9 [&>li]:mb-8">
          <?php
          if (have_rows('will_it_work_list2')) :
            while (have_rows('will_it_work_list2')) : the_row();
              $will_it_work_list2_item = get_sub_field('will_it_work_list2_item');
          ?>
              <li><?php echo $will_it_work_list2_item; ?></li>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </ul>
      </div>
    </section>

    <section id="gwarancja" class="guarantee">
      <div class="container mx-auto max-w-[850px] py-20">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-2xl"><?php the_field('guarantee_title'); ?></h3>
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <p class="subtitle mb-8 font-bold text-3xl leading-10"><?php the_field('guarantee_subtitle'); ?></p>
          </div>
        </div>
        <div class="desc mx-auto mb-16 text-left text-2xl font-normal [&>p]:mb-8">
          <?php the_field('guarantee_desc'); ?>
          <button class="mx-auto mb-5 block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
            <a href="#"><?php the_field('guarantee_btn'); ?></a>
          </button>
        </div>
      </div>
    </section>

    <section class="prices">
      <div class="container max-w-[850px] mx-auto pb-20">
        <div class="desc mb-20 p-10 mx-auto text-left text-2xl font-normal [&>p]:mb-8 border-[2px] border-primary rounded-xl">
          <h3 class="mb-8 font-bold text-3xl text-center"><?php the_field('prices_title'); ?></h3>
          <p><?php the_field('prices_desc'); ?></p>
          <div class="price text-green-800 text-center text-3xl font-bold">
            <p>Cena promocyjna: 147 zł</p>
          </div>
          <p class="text-center">
            Jednorazowa inwestycja
          </p>
          <button class="mx-auto block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
            <a href="#">..Dodaj do koszyka (147 zł)..</a>
          </button>
        </div>

        <h3 class="mb-8 font-bold text-3xl text-center"><?php the_field('prices_title2'); ?></h3>
        <div class="desc mx-auto text-left text-2xl font-normal">
          <?php the_field('prices_desc2'); ?>
        </div>
      </div>
    </section>

    <section id="bonusy" class="bonuses mb-20 bg-[#F7F7F7]">
      <div class="container max-w-[850px] mx-auto py-20">
        <div class="title mb-10 text-center">
          <h3 class="mb-2 font-semibold text-2xl"><?php the_field('bonuses_title'); ?></h3>
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <p class="subtitle font-bold text-3xl leading-10"><?php the_field('bonuses_subtitle'); ?></p>
          </div>
        </div>

        <ul class="bonuses-tiles text-xl [&>li]:mb-20">
          <?php
          if (have_rows('bonuses_list')) :
            while (have_rows('bonuses_list')) : the_row();
              $bonuses_list_item_title = get_sub_field('bonuses_list_item_title');
              $bonuses_list_item_desc = get_sub_field('bonuses_list_item_desc');
              $bonuses_list_item_price = get_sub_field('bonuses_list_item_price');
              $bonuses_list_item_img = get_sub_field('bonuses_list_item_img');
          ?>
              <li class="flex flex-col-reverse md:flex-row gap-10 basis">
                <div class="basis-2/3">
                  <div class="product-desc mb-5">
                    <p class="font-bold mb-2"><?php echo $bonuses_list_item_title; ?></p>
                    <p class="desc"><?php echo $bonuses_list_item_desc; ?></p>
                  </div>
                  <div class="product-price font-bold">
                    <p>Wartość: <span class="text-red-500"><?php echo $bonuses_list_item_price; ?></span></p>
                    <p>Z narzędziem <span class="text-primary">Twoje Ścieżki Kariery</span>: bezpłatnie😊 </p>
                  </div>
                </div>
                <div class="about-img basis-1/3">
                  <img src="<?php echo ($bonuses_list_item_img) ? esc_html($bonuses_list_item_img['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo esc_html($bonuses_list_item_img['title']); ?>">
                </div>
              </li>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </ul>
        <button class="mx-auto block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
          <a href="#"><?php the_field('bonuses_btn') ?></a>
        </button>
      </div>
    </section>

    <section class="about-swistak overflow-x-hidden">
      <div class="container mx-auto pb-20 ">
        <div class="title-content mb-16 relative">
          <div class="ks-decoration ks-decoration--center">
            <div class="ks-decoration__wave ks-decoration__wave--small">
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
              <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
            </div>
          </div>
          <h3 class="mb-8 font-bold text-3xl text-center"><?php the_field('about_swistak_title') ?></h3>
        </div>
        <div class="mx-auto max-w-[850px] flex flex-col-reverse md:flex-row basis gap-12">
          <div class="desc basis-3/4 mx-auto mb-12 text-left text-lg font-normal [&>p]:mb-5">
            <?php the_field('about_swistak_text'); ?>
          </div>
          <div class="img basis-1/4">
            <img src="<?php echo (get_field('about_swistak_img')) ? esc_html(get_field('about_swistak_img')['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo esc_html(get_field('about_swistak_img')['title']); ?>">
            <p class="img-desc text-lg italic">„Przestań robić wszystko– zacznij wybierać mądrze!”</p>
          </div>
        </div>
        <div class="about-swistak-opinions w-full">
          <h3 class="mb-24 font-bold text-3xl text-center">Oto garść opinii od moich zadowolonych klientek i klientów (łącznie otrzymałem ponad 216+ pozytywnych rekomendacji na LinkedIn):</h3>
          <div class="swiper max-w-full overflow-visible" data-js="swiper-tiles-mobile">
            <div class="swiper-wrapper lg:grid lg:grid-cols-3 lg:gap-10">
              <?php
              if (have_rows('career_path_opinions_swiper')) :
                while (have_rows('career_path_opinions_swiper')) : the_row();
                  $author_img = get_sub_field('career_path_opinions_swiper_img');
                  $opinion_text = get_sub_field('career_path_opinions_swiper_text');
                  $author_name = get_sub_field('career_path_opinions_swiper_author_name');
              ?>
                  <div class="swiper-slide max-w-full h-auto rounded-2xl p-10 pt-36 shadow-xl border-[1px] border-gray-200 hover:border-primary transition duration-300 relative">
                    <div class="z-10 absolute top-0 left-[50%] translate-x-[-50%] translate-y-[-40%]">
                      <div class="opinion-author-image mx-auto max-w-[150px] relative">
                        <img src="<?php echo esc_html($author_img['url']); ?>" alt="<?php echo esc_html($author_img['title']); ?>">
                        <div class="w-[50px] h-[50px] p-3 rounded-full bg-primary flex items-center justify-center z-10 absolute bottom-0 left-[50%] translate-x-[-50%] translate-y-[50%]">
                          <svg class="w-full rotate-180" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 379.51" fill="white">
                            <path d="M299.73 345.54c81.25-22.55 134.13-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160.01-60.55C243.33-10.34 430.24-36.22 485.56 46.34c12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.6 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77zm-267.78 0c81.25-22.55 134.14-69.68 147.28-151.7 3.58-22.31-1.42-5.46-16.55 5.86-49.4 36.97-146.53 23.88-160-60.55-27.14-149.49 159.78-175.37 215.1-92.81 12.87 19.19 21.39 41.59 24.46 66.19 13.33 106.99-41.5 202.28-137.82 247.04-17.82 8.28-36.59 14.76-56.81 19.52-10.12 2.04-17.47-3.46-20.86-12.78-2.87-7.95-3.85-16.72 5.2-20.77z" />
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="text-content text-center">
                      <p class="mb-5 font-light"><?php echo $opinion_text; ?></p>
                      <p class="author font-semibold text-lg"><?php echo $author_name; ?></p>
                    </div>
                  </div>
              <?php
                endwhile;
              else :
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="decision-time py-20 overflow-hidden">
      <div class="container mx-auto">
        <div class="title text-center">
          <h3 class="mb-2 font-semibold text-3xl">Czas na Twoją decyzję.</h3>
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <p class="subtitle mb-8 font-bold text-3xl leading-10">Jaką z tych 3 ścieżek wybierasz?</p>
          </div>
        </div>
        <div class="swiper mb-20 overflow-visible" data-js="swiper-tiles-mobile">
          <div class="swiper-wrapper lg:grid lg:grid-cols-3 lg:gap-10">
            <?php
            if (have_rows('decision_time_swiper')) :
              while (have_rows('decision_time_swiper')) : the_row();
                $decision_time_swiper_slide_content = get_sub_field('decision_time_swpier_slide_content');
            ?>
                <div class="swiper-slide max-w-full h-auto rounded-2xl p-10 shadow-lg border-[1px] border-gray-200 hover:border-primary hover:bg-white transition duration-300 relative [&>p]:mb-5">
                  <?php echo $decision_time_swiper_slide_content; ?>
                </div>
            <?php
              endwhile;
            else :
            endif;
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="whats-next">
      <div class="container max-w-[1024px] mx-auto pb-20">
        <div class="title text-center mb-8">
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <h3 class="mb-5 font-semibold text-3xl"><?php the_field('whats_next_title'); ?></h3>
          </div>
          <div class="desc [&>p]:text-2xl">
            <?php the_field('whats_next_desc'); ?>
          </div>
        </div>
        <div class="cta p-10 text-center font-bold text-3xl border-[2px] border-primary rounded-xl">
          <?php the_field('whats_next_cta'); ?>
        </div>
        <div class="arrow-down my-10 mx-auto w-fit text-[60px] text-primary rotate-90">&#x27A4;</div>
        <div class="cta2 p-10 text-center font-bold text-2xl border-[2px] border-primary rounded-xl">
          <p class="mb-5"><?php the_field('whats_next_cta2_title'); ?></p>
          <img src="<?php echo (get_field('whats_next_cta2_img')) ? esc_html(get_field('whats_next_cta2_img')['url']) : get_template_directory_uri() . '/assets/img/swistak-logo-default.svg'; ?>" alt="<?php echo esc_html(get_field('whats_next_cta2_img')['title']); ?>">
          <div class="my-10 text-left text-[24px]">
            <?php esc_html(the_field('whats_next_cta2_list')); ?>
          </div>

          <button class="mx-auto mb-5 block w-fit bg-primary px-5 py-4 text-white text-lg font-medium rounded-2xl hover:bg-[#008077] transition duration-200">
            <a href="#"><?php the_field('whats_next_btn'); ?></a>
          </button>
        </div>
      </div>
    </section>

    <section class="order-benefits">
      <div class="container mx-auto max-w-[1024px] pb-20">
        <div class="container mx-auto mb-10 rounded-xl border-[2px] border-primary p-6 md:flex basis justify-center items-center text-center">
          <div class="col mb-8 basis-1/2 text-xl">
            <?php the_field('order_benefits1'); ?>
          </div>
          <div class="col basis-1/2 text-xl">
            <?php the_field('order_benefits2'); ?>
          </div>
        </div>
        <p class="mx-auto w-fit text-xl"><?php the_field('order_benefits_email_help'); ?></p>
      </div>
    </section>

    <section id="faq" class="faq bg-[#F7F7F7] py-20">
      <div class="container mx-auto">
        <div class="title mb-10 text-center">
          <h3 class="mb-2 font-semibold text-2xl"><?php the_field('faq_title'); ?></h3>
          <div class="title-content mb-16 relative">
            <div class="ks-decoration ks-decoration--center">
              <div class="ks-decoration__wave ks-decoration__wave--small">
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(45deg);"></div>
                <div class="ks-decoration__line ks-decoration__line--small" style="transform: rotate(-45deg);"></div>
              </div>
            </div>
            <p class="subtitle font-bold text-3xl leading-10"><?php the_field('faq_subtitle'); ?></p>
          </div>
        </div>
        <div class="questions-container [&>.question-container]:mb-4">
          <?php
          if (have_rows('questions_list')) :
            while (have_rows('questions_list')) : the_row();
              $question_text = get_sub_field('question_text');
              $answer = get_sub_field('answer');
          ?>
              <div class="question-container text-xl md:text-2xl px-5 md:px-8 py-5 border-[2px] border-primary rounded-xl" data-js="dropdown">
                <div class="question cursor-pointer group flex justify-between items-center" aria-expanded="false" data-js="dropdown-toggle">
                  <h4 class="font-semibold leading-7 group-hover:text-primary transition-all duration-300"><?php echo $question_text; ?></h4>
                  <div class="faq-arrow rotate-90 group-aria-expanded:rotate-[270deg] transition duration-300">
                    <span class="group-hover:text-primary text-3xl">&#x27A4;</span>
                  </div>
                </div>
                <div class="answer overflow-hidden h-0 text-lg md:text-xl transition-all duration-300 font-light" data-js="dropdown-container">
                  <div class="py-5">
                    <?php echo $answer; ?></div>
                </div>
              </div>
          <?php
            endwhile;
          else :
          endif;
          ?>
        </div>
    </section>
  </main>
</div>

<?php
get_footer();
