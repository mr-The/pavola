<?php
/*
Template Name: Номера
*/

get_header();

// Важно
?>
<div class="important container">
  <span>
    ВАЖНО
  </span>
</div>

<div class="line container"></div>
<!-- Блок с иконками-->

<section class="icons-block">
  <div class="icons-grid">
    <ul class="icons-grid container">
      <li class="icons-grid_col">
        <div class="icons-grid_col t-align_left">
          <img class="icons-grid_img" scr="<?php echo get_template_directory() . '/images/store_24.svg' ?>"
            style='width:55px;' alt='icons'/>
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
          <img class="icons-grid_img" scr="../images/Layer_3.svg" style='width:55px;' alt='icons' />
          <div class="icons-grid_title">
            <h3>Предоставляется бесплатный wi-fi
            </h3>
          </div>
          <div class="icons-grid_text">
            <p>На случай, если вы хотите оставаться на связи, находясь в эпицентре карельской природы.
            </p>
          </div>
        </div>
      </li>
      <li class="icons-grid_col">
        <div class="icons-grid_col t-align_left">
          <img class="icons-grid_img" scr="../images/Tilda_Icons_44_travel_bicycle.svg" style='width:55px;' alt='icons'>
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
          <img class="icons-grid_img" scr="../images/re_trees.svg" style='width:55px;' alt='icons'>
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
<section class="number-block">
  <div class='number-box-wraper container'>
    <div class='number_conteiner_image'>
      <img class='number_image' scr="<?php echo get_template_directory() . '/images/IMG_0580_1_1.jpg' ?>" alt="">
    </div>

    <div class='number_conteiner_text'>

      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' scr="../images/Tilda_Icons_41_hotel_couple.svg" style='width:55px;' alt='icon'>
        </div>
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

      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' scr="../images/Tilda_Icons_41_hotel_lux.svg" style='width:55px;' alt='icon'>
        </div>
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
  </div>
  </div>
</section>


<!-- Слайдер -->




<!-- Панорамное изображение -->

<section class="panorama-block">
  <?php $panorama_image = get_field('panorama_image'); ?>
  <?php if ($panorama_image): ?>
    <img src="<?php echo esc_url($panorama_image); ?>" alt="">
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
  <?php endif; ?>
</section>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('text_block_title')); ?>
        </h2>
        <div class="content">
          <?php echo wp_kses_post(get_field('text_block_content')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// Блок "Впечатления"
?>
<section class="impressions-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('impressions_block_title')); ?>
        </h2>
      </div>
    </div>
  </div>
  <?php $impressions = get_field('impressions_images'); ?>
  <?php if ($impressions): ?>
    <div class="grid">
      <?php foreach ($impressions as $impression): ?>
        <div class="grid-item">
          <img src="<?php echo esc_url($impression['image']); ?>" alt="<?php echo esc_attr($impression['title']); ?>">
          <div class="description">
            <?php echo wp_kses_post($impression['description']); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</section>

<?php
// Блок "Варианты"
?>
<section class="options-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('options_block_title')); ?>
        </h2>
      </div>
    </div>
  </div>
  <?php $options = get_field('options_images'); ?>
  <?php if ($options): ?>
    <div class="grid">
      <?php foreach ($options as $option): ?>
        <div class="grid-item" style="background-image: url('<?php echo esc_url($option['image']); ?>');">
          <a href="<?php echo esc_url($option['link']); ?>">
            <!-- <img src="<?php echo esc_url($option['image']); ?>" alt="<?php echo esc_attr($option['title']); ?>"> -->
            <div class="description">
              <?php echo wp_kses_post($option['description']); ?>

              <button class="options_button">Подробнее</button>

            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

</section>

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