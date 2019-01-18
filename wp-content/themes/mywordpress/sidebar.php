<nav class="main-nav">
    <ul class="nav-list">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_class' => 'nav-list__link'
        ));
     ?>
        <!-- <li class="nav-list__item item--active"><a href="#" class="nav-list__link">Обо мне</a></li>
        <li class="nav-list__item"><a href="works.html" class="nav-list__link">Мои работы</a></li>
        <li class="nav-list__item"><a href="feedback.html" class="nav-list__link">Связаться со мной</a></li> -->
    </ul>
</nav><!--/end .main-nav -->

<article class="info-block info-block--contacts">
    <h2 class="block__header2 header--contacts">Контакты</h2>
    <ul class="block__wrap">
        <li class="contacts__item item--mail"><a href="mailto:velcom.ale@gmail.com" class="item__text text--dark_white">velcom.ale@gmail.com</a></li>
        <li class="contacts__item item--phone"><a href="tel://29-119-60-37" class="item__text text--dark_white">+375291196037</a></li>
        <li class="contacts__item item--skype"><a href="#" class="item__text text--dark_white">fiksik</a></li>
    </ul>
</article><!--/end .contacts -->
