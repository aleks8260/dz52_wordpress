<?php
    get_header();
?>
        <main id="wrap">

          <?php
              get_sidebar();
          ?>
            <article class="info-block">
                <h2 class="block__header2">Основная информация</h2>
                <div class="block__wrap">
                    <div class="block__avatar">
                        <div class="avatar__mask"></div>
                        <img src="<?= get_template_directory_uri()?>/images/avatar/avatar.jpg" alt="Мой аватар" class="avatar__image" />
                    </div>
                    <ul class="block__info">
                        <li class="info__item">
                            <strong class="block__text text--strong">Меня зовут:</strong>
                            <span class="block__text">Алексей</span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Мой возраст:</strong>
                            <span class="block__text">24 года</span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Мой город:</strong>
                            <span class="block__text">Гомель</span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Моя специализация:</strong>
                            <span class="block__text">HTML-верстальщик</span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Ключевые навыки:</strong>
                            <ul class="info__exp-list">
                                <li class="exp-list__item">html</li>
                                <li class="exp-list__item">CSS</li>
                                <li class="exp-list__item">javascript</li>
                                <li class="exp-list__item">jquery</li>
                                <li class="exp-list__item">git</li>
                                <li class="exp-list__item">Photoshop</li>
                                <li class="exp-list__item">PHP</li>
                            </ul><!--/end .block__exp-list -->
                        </li>
                    </ul>
                </div>
            </article><!--/end .info-block -->
            <article class="info-block">
                <h2 class="block__header2">Опыт работы</h2>
                <div class="block__wrap">
                    <div class="block__info info--ico info--expirience">
                        <p class="block__text"><strong>Velcom &nbsp;&mdash; инженер технической поддержки</strong></p>
                        <p class="block__text text--small">Март 2017&nbsp;&mdash; настоящее время</p>
                    </div>
                </div>
            </article><!--/end .info-block -->
            <article class="info-block">
                <h2 class="block__header2">Образование</h2>
                <div class="block__wrap">
                    <div class="block__info info--ico info--edu">
                        <p class="block__text"><strong>Компьютерная академия ШАГ</strong></p>
                        <p class="block__text text--small">Апрель 2017&nbsp;&mdash; настоящее время</p>
                    </div>
                    <div class="block__info info--ico info--courses">
                        <p class="block__text"><strong>Инженер-электрик</strong></p>
                        <p class="block__text text--small">БелГУТ (бывш. БелИИЖТ), 2016</p>
                    </div>
                </div>
            </article><!--/end .info-block -->

            <ul class="socials-list">
                <li class="socials-list__item"><a href="#" class="item__link item__link--vk" target="_blank">Вконтакте</a></li>
                <li class="socials-list__item"><a href="#" class="item__link item__link--tw" target="_blank">Twitter</a></li>
                <li class="socials-list__item"><a href="#" class="item__link item__link--fb" target="_blank">Facebook</a></li>
                <li class="socials-list__item"><a href="http://github.com/aleks8260" class="item__link item__link--gh" target="_blank">Github</a></li>
            </ul><!--/end .socials-list -->
        </main>
<?php
    get_footer();
?>
