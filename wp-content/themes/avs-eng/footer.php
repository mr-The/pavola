<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avs-eng
 */
$options = get_option('true_options');
?>
<footer>
    <div class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="footer_content">
                    <div class="logo_block">
                        <!-- <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png" alt="">
                        </a> -->
                        <?php // if ($options['copyrite']) { ?>
                            <div class="site_desc">
                                <?// echo $options['copyrite']; ?>
                                <p>© 2023</p>
                                <p>Гостевые дома "Павола"</p>
                            </div>
                        <?php //} ?>
                    </div>
                    <!-- <div class="site_contacts">
                        <ul>
                            <?php // if ($options['adress']) { ?>
                                <li><i class="icon icon-pin"></i>
                                    <?// echo $options['adress']; ?>
                                </li>
                            <?php // } ?>
                            <?php // if ($options['phone']) { ?>
                                <li><i class="icon icon-tel"></i><a href="tel:<? // echo $options['phone']; ?>"><? echo $options['phone']; ?></a></li>
                            <?php // } ?>
                            <?php // if ($options['email']) { ?>
                                <li><i class="icon icon-mail"></i><a href="mailto:<? // echo $options['email']; ?>"><? // echo $options['email']; ?></a></li>
                            <?php // } ?>
                        </ul>
                    </div> -->
                    <!-- <div class="footer_nav">

                        <?php 
                        // wp_nav_menu(
                        //     array(
                        //         'menu_class' => 'menu',
                        //         'theme_location' => 'footer-nav',
                        //     ));
                        ?>

                    </div> -->

                    <!-- <div class="footer-social">
                        <ul>
                            <?php // if ($options['vk']) { ?>
                                <li><a href="<? // echo $options['vk']; ?>"><img
                                            src="<?php // bloginfo('template_url'); ?>/images/vk-icon.png" alt=""></a></li>
                            <?php // } ?>
                            <?php // if ($options['fb']) { ?>
                                <li><a href="<? // echo $options['fb']; ?>"><img
                                            src="<?php // bloginfo('template_url'); ?>/images/fb-icon.png" alt=""></a></li>
                            <?php // } ?>
                            <?php // if ($options['ok']) { ?>
                                <li><a href="<? // echo $options['ok']; ?>"><img
                                            src="<?php // bloginfo('template_url'); ?>/images/odnoklasniki-icon.png"
                                            alt=""></a></li>
                            <?php // } ?>
                        </ul>
                    </div> -->


                </div>
            </div>
        </div>
    </div>
</footer>
<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
<div id="order_back" class="form-content zoom-anim-dialog mfp-hide">
    <form method="post" id="order_back_form">
        <!-- Hidden Required Fields -->
        <input type="hidden" name="project_name" value="Новая заявка с сайта <?php echo ($_SERVER['HTTP_HOST']); ?>">
        <input type="hidden" name="admin_email" value="<?php echo bloginfo('admin_email'); ?>">
        <input type="hidden" name="form_subject" value="Поступила заявка с сайта <?php echo ($_SERVER['HTTP_HOST']); ?>">
        <!-- END Hidden Required Fields -->
        <div class="form_wrap">
            <div class="form_title">
                <h3>Оставьте заявку</h3>
                <span>Оставьте ваши контактные данные и сообщение,
                    мы свяжемся с вами в ближайшее время</span>
            </div>
            <div class="success">
                <div class="sc_content">
                    <h3>Отправлено!</h3>
                    <span>Мы скоро с вами свяжемся</span>

                </div>

            </div>
            <div class="form_box">
                <div class="input-group">
                    <input type="text" class="text-field" placeholder="Введите ваше имя" name="Имя"
                        required="Введите Ваше имя">
                </div>
                <div class="input-group">
                    <input type="text" class="text-field phone" placeholder="+7(___)___-__-__" name="Телефон"
                        required="Введите Ваш телефон">
                </div>
                <div class="text_group">
                    <textarea class="text-area" placeholder="Введите ваше сообщение" name="Сообщение"></textarea>
                </div>
                <div class="box">
                    <input type="file" name="attachmentFile[]" id="attachmentFile" class="inputfile inputfile-3"
                        accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                        data-multiple-caption="{count} files selected" multiple />
                    <label for="attachmentFile"><i class="icon icon-attach"></i> <span>Прикрепить файлы</span></label>
                </div>
                <input class="formInfo" type="hidden" value="" required />
                <div class="g-recaptcha" data-sitekey="6Lf0gVQUAAAAAAtVjlYdWLrOBSwhvOLGXVOY_iz0" data-theme="light">
                </div>
                <div class="btn_group">
                    <button class="btn form-send">отправить</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
<div id="call_back" class="form-content zoom-anim-dialog mfp-hide">
    <form method="post">
        <!-- Hidden Required Fields -->
        <input type="hidden" name="project_name"
            value="Заказ обратного звонка с сайта <?php echo ($_SERVER['HTTP_HOST']); ?>">
        <input type="hidden" name="admin_email" value="<?php echo bloginfo('admin_email'); ?>">
        <input type="hidden" name="form_subject"
            value="Заказ обратного звонка с сайта <?php echo ($_SERVER['HTTP_HOST']); ?>">
        <!-- END Hidden Required Fields -->
        <div class="form_wrap">
            <div class="form_title">
                <h3>Оставьте заявку</h3>
                <span>Оставьте ваши контактные данные и сообщение,
                    мы свяжемся с вами в ближайшее время</span>
            </div>
            <div class="success">
                <div class="sc_content">
                    <h3>Отправлено!</h3>
                    <span>Мы скоро с вами свяжемся</span>

                </div>

            </div>
            <div class="form_box">
                <div class="input-group">
                    <input type="text" class="text-field" placeholder="Введите ваше имя" name="Имя"
                        required="Введите Ваше имя">
                </div>
                <div class="input-group">
                    <input type="text" class="text-field phone" placeholder="+7(___)___-__-__" name="Телефон"
                        required="Введите Ваш телефон">
                </div>
                <input class="formInfo" type="hidden" value="" required />
                <div class="g-recaptcha" data-sitekey="6Lf0gVQUAAAAAAtVjlYdWLrOBSwhvOLGXVOY_iz0" data-theme="light">
                </div>
                <div class="btn_group">
                    <button class="btn form-send">отправить</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php wp_footer(); ?>
</body>

</html>