<?php
/*
Template Name: Главная страница Павола
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
      <div class="btn_group .panorama-block ">
                            <button class="popup-with-zoom-anim btn btn-callback"
                                data-mfp-src="#order_back">Забронировать</button>
                        </div>
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
        <div class="grid-item" style="background-image: url('<?php echo esc_url($impression['image']); ?>')">
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
    </div>
    </div>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</section>

<?php
get_footer();