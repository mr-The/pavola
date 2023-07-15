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

<!-- Нумерация  -->

<div class='num-box'>
  <div class='num'>1</div>
</div>


<!-- Блок с картинкой меняется при наведении -->
<div class='infoblock container'>
  <div class='infoblock-marshrut-box'>
      <div class='infoblock-inform_marshrut'>
        <div class='infoblock-inform-image'>
        <div id="Library"></div>
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-title'>
              <h3>
              СЕКРЕТЫ СОРТАВАЛА И ОКРЕСТНОСТЕЙ
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Тур для тех, кто хочет ближе узнать старинный город Сортавала, а также совершить трекинг к водопадам Белые мосты!<br>
              ПРОДОЛЖИТЕЛЬНОСТЬ: 3-4 часа.
              </p>
            </div>
        </div>   
    </div>

    <div class='infoblock-inform_marshrut'>
        <div class='infoblock-inform-image'>
        <div id="Library"></div>
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-title'>
              <h3>
              СЕКРЕТЫ СОРТАВАЛА И ОКРЕСТНОСТЕЙ
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Тур для тех, кто хочет ближе узнать старинный город Сортавала, а также совершить трекинг к водопадам Белые мосты!<br>
              ПРОДОЛЖИТЕЛЬНОСТЬ: 3-4 часа.
              </p>
            </div>
        </div>   
    </div>


    <div class='infoblock-inform_marshrut'>
        <div class='infoblock-inform-image'>
        <div id="Library"></div>
        </div>
        <div class='infoblock-inform-text'>
            <div class='infoblock-inform-title'>
              <h3>
              СЕКРЕТЫ СОРТАВАЛА И ОКРЕСТНОСТЕЙ
              </h3>
            </div>
            <div class='infoblock-inform-description'>
              <p>
              Тур для тех, кто хочет ближе узнать старинный город Сортавала, а также совершить трекинг к водопадам Белые мосты!<br>
              ПРОДОЛЖИТЕЛЬНОСТЬ: 3-4 часа.
              </p>
            </div>
        </div>   
    </div>
 </div>
</div>



<!-- Блок текст с видео -->
<section class='container'>
  <div class='video-text'>
   <div class='text-content'>
      <p><strong>Продолжительность:</strong> 5 дней/4 ночи и 9 дней/8 ночей.<br>
      <br>
      <strong>Протяженность:</strong> более 1 000 км вокруг Ладожского озера<br>
      <br>
      <strong>Транспорт:</strong> собственный автомобиль / каршеринг / индивидуальный трансфер от «Игора Тур» (+ж/д — альтернатива).</p>
    </div>
     <div class='video-content'>
        <iframe width="560" height="300" src="https://www.youtube.com/watch?v=Yrajz_FFnec&t=1s" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        </iframe>
    </div>
  </div>
</section>

<!-- Блок со списком туров плитка  -->

<section class='container'>
 <div class='list-tur'>
     <div class='list-tur-singl-box'>
        <div class='num-box-tur'>
          <div class='num'>1</div>
        </div>
        <div class='list-tur-text'>
          <div class='list-tur-title'>
            <h3>ФИНСКАЯ ДЕРЕВНЯ</h3>
          </div>
          <div class='list-tur-description'>
            <p>
             <strong>10 км / 30−60 минут</strong>
               <br>
               <br>Проходит по заснеженной лесной дороге до фундамента старого финского поселения
            </p>
          </div>
        </div>
     </div>

    <div class='list-tur-singl-box'>
        <div class='num-box-tur'>
          <div class='num'>2</div>
        </div>
        <div class='list-tur-text'>
          <div class='list-tur-title'>
            <h3>ФИНСКАЯ ДЕРЕВНЯ</h3>
          </div>
          <div class='list-tur-description'>
            <p>
             <strong>10 км / 30−60 минут</strong>
               <br>
               <br>Проходит по заснеженной лесной дороге до фундамента старого финского поселения
            </p>
          </div>
        </div>
    </div>

  
    <div class='list-tur-singl-box'>
        <div class='num-box-tur'>
          <div class='num'>3</div>
        </div>
        <div class='list-tur-text'>
          <div class='list-tur-title'>
            <h3>ФИНСКАЯ ДЕРЕВНЯ</h3>
          </div>
          <div class='list-tur-description'>
            <p>
             <strong>10 км / 30−60 минут</strong>
               <br>
               <br>Проходит по заснеженной лесной дороге до фундамента старого финского поселения
            </p>
          </div>
        </div>
    </div>


    <div class='list-tur-singl-box'>
        <div class='num-box-tur'>
          <div class='num'>4</div>
        </div>
        <div class='list-tur-text'>
          <div class='list-tur-title'>
            <h3>ФИНСКАЯ ДЕРЕВНЯ</h3>
          </div>
          <div class='list-tur-description'>
            <p>
             <strong>10 км / 30−60 минут</strong>
               <br>
               <br>Проходит по заснеженной лесной дороге до фундамента старого финского поселения
            </p>
          </div>
        </div>
    </div>


  </div>
</section>

<!-- Техника -->

<section class="number-block">
  <div class='number-main-title'>
   <h3>SKI DOO TUNDRA 550F</h3>
  </div>
  <div class='number-box-wraper container'>
    <div class='number_conteiner_image'>
      <img class='number_image' src="<?php bloginfo('template_url'); ?>/images/tehnica1.png" alt="">
    </div>

    <div class='number_conteiner_text'>

      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Group1.png"
            style='width:55px;' alt='icon'>
        </div>
        <div class='number_text-box'>
          <div class='number_title_block'>
            <h3>
             КАЧЕСТВО
            </h3>
          </div>
          <div class='number_text_block'>
            <p>
            Ski-Doo Tundra WT 550F — добротная «рабочая лошадка».
            </p>
          </div>
        </div>
      </div>


      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Group2.png"
            style='width:55px;' alt='icon'>
        </div>
        <div class='number_text-box'>
          <div class='number_title_block'>
            <h3>
             ПРОФЕССИОНАЛЬНОЕ ОБСЛУЖИВАНИЕ
            </h3>
          </div>
          <div class='number_text_block'>
            <p>
             Каждый снегоход проходит регулярное техническое обслуживание, а также тщательный осмотр и проверку работы агрегатов после каждого заезда
            </p>
          </div>
        </div>
      </div>


      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Group3.png"
            style='width:55px;' alt='icon'>
        </div>
        <div class='number_text-box'>
          <div class='number_title_block'>
            <h3>
             КАРЕЛЬСКИЙ СТАНДАРТ
            </h3>
          </div>
          <div class='number_text_block'>
            <p>
             Широкая гусеница обладает непревзойденными качествами при движении по глубокому снегу на низкой скорости. Идеально для карельских лесов.
            </p>
          </div>
        </div>
      </div>

    
    </div>
  </div>
  
  <!-- <hr> -->



  <div class='number-main-title'>
   <h3>LYNX 59 YETI 600 ACE</h3>
  </div>
  <div class='number-box-wraper container'>
    <div class='number_conteiner_image'>
      <img class='number_image' src="<?php bloginfo('template_url'); ?>/images/tehnica2.jpg" alt="">
    </div>

    <div class='number_conteiner_text'>

      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Group1.png"
            style='width:55px;' alt='icon'>
        </div>
        <div class='number_text-box'>
          <div class='number_title_block'>
            <h3>
             КАЧЕСТВО
            </h3>
          </div>
          <div class='number_text_block'>
            <p>
            LYNX 59 YETI 600 ACE — один из самых комфортных снегоходов. Четырехтактный двигатель ROTAX 600 ACE объемом 600 куб. см.
            </p>
          </div>
        </div>
      </div>


      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Group2.png"
            style='width:55px;' alt='icon'>
        </div>
        <div class='number_text-box'>
          <div class='number_title_block'>
            <h3>
             ПРОФЕССИОНАЛЬНОЕ ОБСЛУЖИВАНИЕ
            </h3>
          </div>
          <div class='number_text_block'>
            <p>
             Каждый снегоход проходит регулярное техническое обслуживание, а также тщательный осмотр и проверку работы агрегатов после каждого заезда
            </p>
          </div>
        </div>
      </div>


      <div class='number_group_text'>
        <div class='number_icon_block'>
          <img class='number_icon' src="<?php bloginfo('template_url'); ?>/images/Group3.png"
            style='width:55px;' alt='icon'>
        </div>
        <div class='number_text-box'>
          <div class='number_title_block'>
            <h3>
             КАРЕЛЬСКИЙ СТАНДАРТ
            </h3>
          </div>
          <div class='number_text_block'>
            <p>
             Широкая гусеница обладает непревзойденными качествами при движении по глубокому снегу на низкой скорости. Идеально для карельских лесов.
            </p>
          </div>
        </div>
      </div>

    
    </div>
  </div>
  
  <hr>
  
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