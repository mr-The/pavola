<?php
/*
Template Name: Страница Бронирования
*/

get_header();

?>

<!-- Блок "Бронирования" -->
<!-- <div class='container brony'>
  <div class='brony_text'>
     <h2>Онлайн бронирование</h2>
  </div>
<iframe class='myFrame'
src="https://reservationsteps.ru/rooms/index/259a7cf1-59c9-4096-9ce4-3bd48c027545" 
name="myIFrame" scrolling="no" z-index='9999' width="100%" height="100%" style="border: none #000000;"></iframe>
</div> -->


<!-- Блок "Бронирования" -->
<section class="">
<div class="bronirov">
  
 <div class="container bronirovanie_script">
  <div class="brony_text">
  <h2>Онлайн бронирование</h2>
  </div>
      <div class="left" id="_bn_widget_">
      <a href="https://bnovo.ru/" id="_bnovo_link_" target="_blank"></a>
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
            background: "#FFFFFF",
            background_mobile: "#ffffff",
            bg_alpha: "0",
            border_color_mobile: "#C6CAD3",
            padding: "24",
            padding_mobile: "24",
            border_radius: "8",
            font_type: "inter",
            without_title: "on",
            without_title_mobile: "on",
            title_color: "#004123",
            title_color_mobile: "#004123",
            title_size: "32",
            title_size_mobile: "22",
            inp_color: "#004123",
            inp_bordhover: "#004123",
            inp_bordcolor: "#004123",
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