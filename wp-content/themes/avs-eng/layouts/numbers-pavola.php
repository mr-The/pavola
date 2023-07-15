<?php
/*
Template Name: Проживание
*/

get_header();
?>


<?php
// Панорамное изображение
?>
<?php $panorama_image = get_field('panorama_image'); ?>
<?php if ($panorama_image): ?>
  <section class="panorama-block" style="background-image: url('<?php echo esc_url($panorama_image); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_description')); ?>
      </p>
      <div class="btn_group .panorama-block ">
        <button class="popup-with-zoom-anim btn btn-callback" data-mfp-src="#order_back">Забронировать</button>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>
          <?php echo wp_kses_post(get_field('prewiev_text_block_title')); ?>
        </h1>
        <div class="content">
          <?php echo wp_kses_post(get_field('prewiev_text_block_content')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// Важно
?>
<div class="important container">
  <span>
    ВАЖНО
  </span>
</div>

<?php
// Блок "Текст Важно"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('important_text_block_title')); ?>
        </h2>
        <div class="content">
          <?php echo wp_kses_post(get_field('important_text_block_content')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="line container"></div>
<!-- Блок с иконками-->

<section class="icons-block">
  <div class="icons-grid">
    <ul class="icons-grid container">
      <li class="icons-grid_col">
        <div class="icons-grid_col t-align_left">
          <img class="icons-grid_img" src="<?php bloginfo('template_url'); ?>/images/store_24.svg" style='width:55px;'
            alt='icons' />
          <div class="icons-grid_title">
            <h3>Круглосуточная стойка администрации
            </h3>
          </div>
          <div class="icons-grid_text">
            <p>Наши администраторы сделают все, чтобы ваш отдых был комфортным и незабываемым.
            </p>
          </div>
        </div>
      </li>
      <li class="icons-grid_col">
        <div class="icons-grid_col t-align_left">
          <img class="icons-grid_img" src="<?php bloginfo('template_url'); ?>/images/Layer_3.svg" style='width:55px;'
            alt='icons' />
          <div class="icons-grid_title">
            <h3>Предоставляется бесплатный wi-fi
            </h3>
          </div>
          <div class="icons-grid_text">
            <p>На случай, если вы хотите оставаться на связи, находясь в эпицентре живописной природы.
            </p>
          </div>
        </div>
      </li>
      <li class="icons-grid_col">
        <div class="icons-grid_col t-align_left">
          <img class="icons-grid_img" src="<?php bloginfo('template_url'); ?>/images/Tilda_Icons_44_travel_bicycle.svg"
            style='width:55px;' alt='icons'>
          <div class="icons-grid_title">
            <h3>Прокат спортивного инвентаря
            </h3>
          </div>
          <div class="icons-grid_text">
            <p>Велосипеды, самокаты, ролики и многое другое
            </p>
          </div>
        </div>
      </li>
      <li class="icons-grid_col">
        <div class="icons-grid_col t-align_left">
          <img class="icons-grid_img" src="<?php bloginfo('template_url'); ?>/images/re_trees.svg" style='width:55px;'
            alt='icons'>
          <div class="icons-grid_title">
            <h3>Природа на расстоянии вытянутой руки
            </h3>
          </div>
          <div class="icons-grid_text">
            <p>Живописные уголки территории словно вышли из закладок фотохостингов либо со страниц National Geographic.
            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- Номера -->
<div class="wp-caption-text">
  <h2 id="numbers">Номера</h2>
</div>
<?php
// Панорамное изображение
?>
<?php $numbers_panorama_image = get_field('numbers_panorama_image'); ?>
<?php if ($numbers_panorama_image): ?>
  <section class="panorama-block" style="background-image: url('<?php echo esc_url($numbers_panorama_image); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('numbers_panorama_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('numbers_panorama_image_description')); ?>
      </p>
      <div class="btn_group .panorama-block ">
        <button class="popup-with-zoom-anim btn btn-callback" data-mfp-src="#order_back">Забронировать</button>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('numbers_text_block_title')); ?>
        </h2>
        <div class="content">
          <?php echo wp_kses_post(get_field('numbers_text_block_content')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $number_image = get_field('number_image'); ?>
<?php if ($number_image): ?>
  <section class="number-block container">
    <div class="row">
      <div class="col">
        <div class='number-box-wraper'>
          <div class='number_conteiner_image'>
            <img class='number_image' src="<?php echo esc_url($number_image); ?>" alt="Номер">
          </div>

          <div class='number_conteiner_text'>

            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Tilda_Icons_41_hotel_couple.svg"
                  style='width:55px;' alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Двухместные номера.<br>Площадь 24 кв.м.
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Достаточно просторные, чтобы разместиться вдвоем. Детская кроватка — по запросу.
                  </p>
                </div>
              </div>
            </div>


            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Tilda_Icons_41_hotel_lux.svg"
                  style='width:55px;' alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Номера категории «люкс» и «полулюкс».
                    <br>Площадь 48 кв.м.
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Двухкомнатные номера с живописным видом на Ладожское озеро.
                  </p>
                </div>
              </div>
            </div>


            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Tilda_Icons_41_hotel_tv.svg"
                  style='width:55px;' alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Современная техника и Smart TV
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Смотрите телевизор, если вдруг устанете смотреть на карельские пейзажи.
                  </p>
                </div>
              </div>
            </div>

            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Tilda_Icons_41_hotel_cleaning.svg"
                  style='width:55px;' alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Обслуживание номеров
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Наши горничные позаботятся о том, чтобы в вашем номере всегда было чисто и комфортно.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-centr">
          <div class="btn_group .panorama-block ">
            <button class="popup-with-zoom-anim btn btn-callback" data-mfp-src="#order_back">Забронировать</button>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<!-- Слайдер -->
<?php if (get_field('numbers_slider')): ?>
  <div class="contaniner">
    <div class="row">
      <div class="col">
        <section class="main-slider">
          <div class="slider_init">
            <?php while (has_sub_field('numbers_slider')): ?>
              <!-- start slide -->
              <div class="item">
                <?php if (get_sub_field('upload-image')): ?>
                  <img src="<?php the_sub_field('upload-image'); ?>" alt="">
                <?php endif; ?>
                <!-- end slide -->
              </div>
            <?php endwhile; ?>
        </section>
      </div>
    </div>
  </div>
  <hr>
<?php endif; ?>

<!-- Коттеджи -->
<div class="wp-caption-text">
  <h2 id="cottage">Коттеджи</h2>
</div>
<?php
// Панорамное изображение
?>
<?php $cottage_panorama_image = get_field('cottage_panorama_image'); ?>
<?php if ($cottage_panorama_image): ?>
  <section class="panorama-block" style="background-image: url('<?php echo esc_url($cottage_panorama_image); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('cottage_panorama_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('cottage_panorama_image_description')); ?>
      </p>
      <div class="btn_group .panorama-block ">
        <button class="popup-with-zoom-anim btn btn-callback" data-mfp-src="#order_back">Забронировать</button>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3>
          <?php echo wp_kses_post(get_field('cottage_text_block_title')); ?>
        </h3>
        <div class="content">
          <?php echo wp_kses_post(get_field('cottage_text_block_content')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $cottage_image = get_field('cottage_image'); ?>
<?php if ($cottage_image): ?>
  <section class="number-block container">
    <div class="row">
      <div class="col">
        <div class='number-box-wraper'>
          <div class='number_conteiner_image'>
            <img class='number_image' src="<?php echo esc_url($cottage_image); ?>" alt="Коттедж">
          </div>

          <div class='number_conteiner_text'>

            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/nomer3-1.svg" style='width:55px;'
                  alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Шестиместные коттеджи.
                    <br>Площадь 200 кв.м.
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Три спальни с ванными комнатами — для большой семьи или компании друзей.
                  </p>
                </div>
              </div>
            </div>


            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/nomer3-2.svg" style='width:55px;'
                  alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Сауна
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Идеально для релакса после долгой прогулки на свежем воздухе.
                  </p>
                </div>
              </div>
            </div>


            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/nomer3-3.svg" style='width:55px;'
                  alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Камин
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Настоящий камин в центре просторной гостиной.
                  </p>
                </div>
              </div>
            </div>

            <div class='number_group_text'>
              <div class='number_icon_block'>
                <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/nomer3-4.svg" style='width:55px;'
                  alt='icon'>
              </div>
              <div class='number_text-box'>
                <div class='number_title_block'>
                  <h3>
                    Терраса с камином и видом на закаты
                  </h3>
                </div>
                <div class='number_text_block'>
                  <p>
                    Просторная терраса с барбекю-зоной и незабываемыми видами.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-centr">
        <div class="btn_group .panorama-block ">
          <button class="popup-with-zoom-anim btn btn-callback" data-mfp-src="#order_back">Забронировать</button>
        </div>
      </div>
    </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<!-- Слайдер -->
<?php if (get_field('cottage_slider')): ?>
  <div class="contaniner">
    <div class="row">
      <div class="col">
        <section class="main-slider">
          <div class="slider_init">
            <?php while (has_sub_field('cottage_slider')): ?>
              <!-- start slide -->
              <div class="item">
                <?php if (get_sub_field('upload-image')): ?>
                  <img src="<?php the_sub_field('upload-image'); ?>" alt="">
                <?php endif; ?>
                <!-- end slide -->
              </div>
            <?php endwhile; ?>
        </section>
      </div>
    </div>
  </div>
  <hr>
<?php endif; ?>

<?php
// Блок "Полезные ссылки"
?>
<?php if (get_field('link_count')): ?>
  <?php
  $count = get_field('link_count');
  $title = get_field('links_block_title');
  $args = array(
    'post_type' => 'useful_links',
    'showposts' => $count,
  );
  $the_query = new WP_Query($args); ?>
  <section class="useful_link">
    <div class="section_area">
      <div class="container">
        <div class="row">
          <div class="section_title">
            <?php if ($title): ?>
              <h2>
                <?php echo wp_kses_post(get_field('links_block_title')); ?>
              </h2>
            </div>
          <?php else:
              echo "<h2>Полезные ссылки</h2>";
              ?>
          <?php endif; ?>
          <div class="wrapper">
            <?php while ($the_query->have_posts()):
              $the_query->the_post(); ?>
              <!-- start block -->
              <a href="<?php the_field('useful_links_link'); ?>">
                <div class="link">
                  <div class="description">
                    <h3>
                      <?php the_field('useful_links_title'); ?>
                    </h3>
                    <p>
                      <?php the_field('useful_links_description'); ?>
                    </p>
                  </div>
                  <span class="name">
                    <?php the_field('useful_links_name'); ?> →
                  </span>
                  </span>
                </div>
              </a>
              <!-- end block -->
            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="line"></div>
    </div>
    </div>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</section>

<?php
get_footer();