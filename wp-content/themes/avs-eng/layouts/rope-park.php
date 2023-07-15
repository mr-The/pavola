<?php
/*
Template Name: Веревочный парк
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

<!-- Блок 3 фото -->
<section class="photo-block container">
<div class="tree_photo ">
  <div class="tree_photo-block">
      <div class="tree_photo-image-block">
        <img class="tree-photo-image" src="<?php bloginfo('template_url'); ?>/images/rope_park1.jpg">
      </div>
      <div class="tree_photo-image-block">
        <img class="tree-photo-image" src="<?php bloginfo('template_url'); ?>/images/rope_park2.jpg">
      </div>
      <div class="tree_photo-image-block">
        <img class="tree-photo-image" src="<?php bloginfo('template_url'); ?>/images/rope_park3.jpg">
      </div>
  </div>
</div>
</section>

<!-- Блок 4 колонки текст -->
<section class="four-col-text" >
  <div class="container">
    <div class="four-col-text-block" >
      <div class="four-col-text-box" >
        <div class="four-col-title" >
          <h3>
          710 метров
          </h3>
        </div>
        <div class="four-col-description" >
          <p>
          Протяженность
          </p>
        </div>
      </div>
      <div class="four-col-text-box" >
        <div class="four-col-title" >
          <h3>
          16 метров
          </h3>
        </div>
        <div class="four-col-description" >
          <p>
          Самая высокая точка
          </p>
        </div>
      </div>
      <div class="four-col-text-box" >
        <div class="four-col-title" >
          <h3>
          6 человек
          </h3>
        </div>
        <div class="four-col-description" >
          <p>
          Максимальное количество участников
          </p>
        </div>
      </div>
      <div class="four-col-text-box" >
        <div class="four-col-title" >
          <h3>
          Не менее 1.5 метров
          </h3>
        </div>
        <div class="four-col-description" >
          <p>
          Соблюдение мер социальной дистанции не менее 1.5 м
          </p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Тарифная сетка -->

<section class="tarif container">
  <div class='tarif-box'>
    <div class='tarif-point'>
      <h3>Тарифная сетка (рублей, без НДС)</h3>
     </div>
     <div class='tarif-point'>
      <div class='tarif-point-text-box'>
      <div class='tarif-point-text'>
        <p>
          Тренировочная трасса (будние дни)
        </p>
       </div>	
       <div class='tarif-point-price'>
        <p>
           1 000 р
          </p>
        </div>
       </div>
     </div>

     <div class='tarif-point'>
      <div class='tarif-point-text-box'>
      <div class='tarif-point-text'>
        <p>
        Основная трасса (будние дни)
        </p>
       </div>	
       <div class='tarif-point-price'>
        <p>
           2 000 р
          </p>
        </div>
       </div>
     </div>

     <div class='tarif-point'>
      <div class='tarif-point-text-box'>
      <div class='tarif-point-text'>
        <p>
          Тренировочная трасса (выходные и праздничные дни)
        </p>
       </div>	
       <div class='tarif-point-price'>
        <p>
           1 200 р
          </p>
        </div>
       </div>
     </div>

     <div class='tarif-point'>
      <div class='tarif-point-text-box'>
      <div class='tarif-point-text'>
        <p>
        Основная трасса (выходные и праздничные дни)
        </p>
       </div>	
       <div class='tarif-point-price'>
        <p>
           2 400 р
          </p>
        </div>
       </div>
     </div>

     <div class='inclusive'>
       <p>
       В стоимость включено:<br>

        Аренда экипировки, инструктаж перед маршрутом, сопровождение инструктора.
       </p>
     </div>
  </div>

</section>


<!-- Видео -->
<section class='video container  wp-caption-text' >
<iframe width="960" height="540" src="https://www.youtube.com/embed/UxAK_T2hRTs" title="Видеоинструктаж перед прохождением веревочного парка «Тарулинна»" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
</iframe>
</section>

<!-- Информационный блок ( фото с мини статьями) -->
<div class='infoblock'>
  <div class='infoblock-title'>
    <h2>Уединенный отдых в Карелии с возможностью активного досуга и приключений</h2>
  </div>
  <div class='infoblock-inform-box'>

    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>

    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>

    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>

    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_singl'>
        <div class='infoblock-inform-image'>
          <img class='infoblock-image' src="<?php bloginfo('template_url'); ?>/images/What_we_do.jpg" alt="">
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-predrisanie'>
              <p>
              НА ТЕРРИТОРИИ
              </p>
            </div> 
            <div class='infoblock-inform-title'>
              <h3>
              Музей Густава Винтера
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Проследить за богатым прошлым дачи Винтера 
              сегодня можно в стенах музея Густава Винтера 
              на территории нашего парк-отеля. Бережно отреставрированные 
              предметы интерьера времен Густава Винтера, архивные документы
               и старые фотографии оживают в рассказах наших экскурсоводов.
              </p>
            </div>
        </div>   
    </div>


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