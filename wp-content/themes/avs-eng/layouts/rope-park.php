<?php
/*
Template Name: Чем заняться
*/

get_header();

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
    </div>
  </section>
<?php endif; ?>


<!-- Блок "Бронирования" -->
<section class="">
<div class="bronirovanie ">
  <div class="bronirovanie_script container">
  <div class="left" id="_bn_widget_">
   <a href="https://bnovo.ru/" id="_bnovo_link_" target="_blank">Bnovo</a>
</div>
<script src="//widget.reservationsteps.ru/js/bnovo.js"></script>
<script type="text/javascript">
  (function(){
     Bnovo_Widget.init(function(){
       Bnovo_Widget.open('_bn_widget_', {
        type: "horizontal",
        uid: "259a7cf1-59c9-4096-9ce4-3bd48c027545",
        lang: "ru",
        currency: "RUB",
        width: "100%",
        width_mobile: "300",
        background: "#ffffff",
        background_mobile: "#ffffff",
        bg_alpha: "0",
        bg_alpha_mobile: "100",
        border_color_mobile: "#C6CAD3",
        padding: "24",
        padding_mobile: "24",
        border_radius: "8",
        font_type: "inter",
        title_color: "#ffffff",
        title_color_mobile: "#ffffff",
        title_size: "22",
        title_size_mobile: "22",
        inp_color: "#000000",
        inp_bordhover: "#BBBBBB",
        inp_bordcolor: "#DDDDDD",
        inp_alpha: "100",
        btn_background: "#004123",
        btn_background_over: "#004123",
        btn_textcolor: "#FFFFFF",
        btn_textover: "#FFFFFF",
        btn_bordcolor: "#004123",
        btn_bordhover: "#004123",
        adults_default: "1",
        dates_preset: "on",
        dfrom_today: "on",
        dfrom_value: "2",
        dto_nextday: "on",
        dto_value: "2",
        cancel_color: "#1875F0",
        
        switch_mobiles: "on",
        switch_mobiles_width: "800",
    });
   });
  })();
</script>

  </div>
</div>


<hr>



<?php
// Блок "Текст"
?>
<?php $element = get_field('text_block_content'); ?>
<?php if ($element): ?>
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
<?php endif; ?>

<!-- Информационный блок ( фото с мини статьями) -->
<?php $mini_articles = get_field('mini_articles'); ?>
<?php if ($mini_articles[0]['upload-image']): ?>
  <div class='container infoblock'>
    <div class='infoblock-title'>
      <h2>
        <?php the_field('mini_articles_title'); ?>
      </h2>
    </div>
    <div class='infoblock-inform-box'>
      <?php while (has_sub_field('mini_articles')): ?>
        <div class='infoblock-inform_singl'>
          <div class='infoblock-inform-image'>
            <img class='infoblock-image' src="<?php the_sub_field('upload-image'); ?>" alt="Photo">
          </div>
          <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <?php $labels = get_sub_field('label'); ?>
              <?php foreach ($labels as $label): ?>
                <span class="label uppercase">
                  <?php echo $label; ?>
                </span>
              <?php endforeach; ?>
            </div>
            <div class='infoblock-inform-title'>
              <h3>
                <?php the_sub_field('title'); ?>
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
                <?php the_sub_field('description'); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

<!-- Туры -->
<?php $tours = get_field('tours'); ?>
<?php if ($tours[0]['upload-image']): ?>
  <div class="important container">
    <span>
      <?php the_field('tours_title_important'); ?>
    </span>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="icons-block">
          <?php the_field('preview'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class='infoblock container row'>
    <div class='infoblock-marshrut-box'>
      <?php while (has_sub_field('tours')): ?>
        <div class='infoblock-inform_marshrut'>
          <div class='infoblock-inform-image'>
            <div class="library" style="background-image: url(<?php the_sub_field('upload-image'); ?>);"></div>
          </div>
          <div class='infoblock-inform-text'>
            <div class='infoblock-inform-title'>
              <h3 class="uppercase">
                <?php the_sub_field('title'); ?>
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
                <?php the_sub_field('description'); ?>
              </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <hr>
  </div>
<?php endif; ?>

<!-- Видео -->
<?php $iframe = get_field('iframe_panorama'); ?>
<?php if ($iframe): ?>
  <section class='video container  wp-caption-text'>
    <?php the_field('iframe_panorama'); ?>
  </section>
<?php endif; ?>

<?php
// Режим работы
?>
<?php $working_mode_content = get_field('working_mode_content'); ?>
<?php if ($working_mode_content): ?>
  <div class="important container">
    <span>
      <?php echo wp_kses_post(get_field('working_mode_title')); ?>
    </span>
  </div>
  <div class="container">
    <div class="col">
      <div class="wp-caption-text important-content">
        <?php echo wp_kses_post($working_mode_content); ?>
      </div>
    </div>
  </div>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<?php $element = get_field('text_block_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_title_2')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_content_2')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Блок 3 фото места -->
<?php $photo_place = get_field('photo_place'); ?>
<?php if ($photo_place[0]['upload-image']): ?>
  <section class="container photo-block">
    <div class="row">
      <div class="tree_photo">
        <div class="tree_photo-block">
          <?php while (has_sub_field('photo_place')): ?>
            <div class="tree_photo-image-block">
              <?php if (get_sub_field('upload-image')): ?>
                <img class="tree-photo-image" src="<?php the_sub_field('upload-image'); ?>" alt="Photo">
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<?php
// Местонахождение
?>
<?php $whereabouts_content = get_field('whereabouts_content'); ?>
<?php if ($whereabouts_content): ?>
  <div class="important container">
    <span>
      <?php echo wp_kses_post(get_field('whereabouts_title')); ?>
    </span>
  </div>
  <div class="container">
    <div class="col">
      <div class="wp-caption-text important-content">
        <?php echo wp_kses_post($whereabouts_content); ?>
      </div>
    </div>
  </div>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<?php $element = get_field('text_block_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_title_3')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_content_3')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Блок еще 3 фото места -->
<?php $photo_place_second = get_field('photo_place_second'); ?>
<?php if ($photo_place_second[0]['upload-image']): ?>
  <section class="container photo-block">
    <div class="row">
      <div class="tree_photo">
        <div class="tree_photo-block">
          <?php while (has_sub_field('photo_place_second')): ?>
            <div class="tree_photo-image-block">
              <?php if (get_sub_field('upload-image')): ?>
                <img class="tree-photo-image" src="<?php the_sub_field('upload-image'); ?>" alt="Photo">
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<!-- Блок 4 колонки текст -->
<?php $features = get_field('features'); ?>
<?php if ($features[0]['title']): ?>
  <section class="four-col-text">
    <div class="container">
      <div class="row">
        <div class="four-col-text-block">
          <?php while (has_sub_field('features')): ?>
            <div class="four-col-text-box">
              <?php if (get_sub_field('title')): ?>
                <div class="four-col-title">
                  <h3>
                    <?php the_sub_field('title'); ?>
                  </h3>
                </div>
              <?php endif; ?>
              <?php if (get_sub_field('description')): ?>
                <div class="four-col-description">
                  <p>
                    <?php the_sub_field('description'); ?>
                  </p>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
  </section>
  </div>
  </div>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<?php $element = get_field('text_block_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_title_4')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_content_4')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Блок еще 3 фото места -->
<?php $photo_place_three = get_field('photo_place_three'); ?>
<?php if ($photo_place_three[0]['upload-image']): ?>
  <section class="container photo-block">
    <div class="row">
      <div class="tree_photo">
        <div class="tree_photo-block">
          <?php while (has_sub_field('photo_place_three')): ?>
            <div class="tree_photo-image-block">
              <?php if (get_sub_field('upload-image')): ?>
                <img class="tree-photo-image" src="<?php the_sub_field('upload-image'); ?>" alt="Photo">
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<!-- Блок "Авторские туры"  -->
<?php $author_tours = get_field('author_tours'); ?>
<?php if ($author_tours[0]['title']): ?>
  <?php $count = 1 ?>
  <section class='container'>
    <div class="row">
      <div class="col">
        <div class="wp-caption-text">
          <h2>
            <?php the_field('author_tours_main_title'); ?>
          </h2>
        </div>
        <div class='list-tur'>
          <?php while (has_sub_field('author_tours')): ?>
            <div class='list-tur-singl-box'>
              <div class='num-box-tur'>
                <div class='num'>
                  <?= $count ?>
                </div>
              </div>
              <div class='list-tur-text'>
                <div class='list-tur-title'>
                  <h3>
                    <?php the_sub_field('title'); ?>
                  </h3>
                </div>
                <div class='list-tur-description'>
                  <p>
                    <strong>
                      <?php the_sub_field('time'); ?>
                    </strong>
                    <br><br>
                    <?php the_sub_field('description'); ?>
                  </p>
                </div>
              </div>
            </div>
            <?php $count++ ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
// Аккордеон "Программа тура"
?>
<?php $tours_program = get_field('tours_program'); ?>
<?php if ($tours_program): ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="wp-caption-text">
            <h3 class="uppercase">
              <?php the_field('tours_program_main_title'); ?>
            </h3>
          </div>
          <div class="accordion">
            <?php foreach ($tours_program as $elem): ?>
              <!-- start block -->
              <div class="accordion-item">
                <div class="accordion-heading">
                  <?php echo wp_kses_post($elem['tours_program_title']); ?>
                  <span class="plus-minus"></span>
                </div>
                <div class="accordion-content">
                  <?php echo wp_kses_post($elem['tours_program_description']); ?>
                </div>
              </div>
              <!-- end block -->
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Ключевые точки тура -->
<?php $tours_feature = get_field('tours_feature'); ?>
<?php if ($tours_feature[0]['upload-image']): ?>
  <div>
    <div class="important container">
      <span>
        <?php the_field('tours_feature_important'); ?>
      </span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="icons-block">
            <?php the_field('preview'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class='infoblock container row'>
      <div class='infoblock-marshrut-box'>
        <?php while (has_sub_field('tours_feature')): ?>
          <div class='infoblock-inform_marshrut'>
            <div class='infoblock-inform-image'>
              <div class="library" style="background-image: url(<?php the_sub_field('upload-image'); ?>);"></div>
            </div>
            <div class='infoblock-inform-text'>
              <div class='infoblock-inform-title'>
                <h3 class="uppercase">
                  <?php the_sub_field('title'); ?>
                </h3>
              </div>
              <div class='infoblock-inform-description'>
                <p>
                  <?php the_sub_field('description'); ?>
                </p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <hr>
    </div>
  </div>
<?php endif; ?>

<?php
// Трассы
?>
<?php $track_content = get_field('track_content'); ?>
<?php if ($track_content): ?>
  <div class="important container">
    <span>
      <?php echo wp_kses_post(get_field('track_title')); ?>
    </span>
  </div>
  <div class="container">
    <div class="col">
      <div class="important-content">
        <?php echo wp_kses_post($track_content); ?>
      </div>
    </div>
  </div>
  <hr>
<?php endif; ?>

<!-- Тарифная сетка -->
<?php $tariff = get_field('tariff'); ?>
<?php if ($tariff): ?>
  <section class="tarif container">
    <div class="row">
      <div class='col'>
        <div class='tarif-point'>
          <h3>
            <?php echo wp_kses_post(get_field('tariff_title')); ?>
          </h3>
        </div>
        <?php while (has_sub_field('tariff')): ?>
          <div class='tarif-point'>
            <div class='tarif-point-text-box'>
              <div class='tarif-point-text'>
                <?php if (get_sub_field('name')): ?>
                  <p>
                    <?php the_sub_field('name'); ?>
                  </p>
                <?php endif; ?>
              </div>
              <div class='tarif-point-price'>
                <?php if (get_sub_field('price')): ?>
                  <p>
                    <?php the_sub_field('price'); ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <div class='inclusive'>
          <p>
            <?php echo wp_kses_post(get_field('inclusive')); ?>
          </p>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<?php
// Блок "Текст внизу страницы(ограничения)"
?>
<?php if (get_field('restrictions')): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="content">
            <?php echo wp_kses_post(get_field('restrictions')); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

<?php
// Яндекс Карта
?>
<?php $contacts_map = get_field('contacts_map'); ?>
<?php if ($contacts_map): ?>
  <div class="map_full">
    <?php echo $contacts_map; ?>
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
            <?php else:
              echo "<h2>Полезные ссылки</h2>";
              ?>
            </div>
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