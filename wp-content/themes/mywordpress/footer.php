<?php
  global $redux_demo;  // не видит с header-а, ссылки не работают без повторного объявления.
?>
<article class="info-block info-block--contacts">
    <h2 class="block__header2 header--contacts">Контакты</h2>
    <ul class="block__wrap">
        <li class="contacts__item item--mail"><a href="mailto:velcom.ale@gmail.com" class="item__text text--dark_white">velcom.ale@gmail.com</a></li>
        <li class="contacts__item item--phone"><a href="tel://29-119-60-37" class="item__text text--dark_white">+375291196037</a></li>
        <li class="contacts__item item--skype"><a href="#" class="item__text text--dark_white">fiksik</a></li>
    </ul>
</article><!--/end .contacts -->
<ul class="socials-list">
    <li class="socials-list__item"><a href="<?= $redux_demo['vk'] ?>" class="item__link item__link--vk" target="_blank">Вконтакте</a></li>
    <li class="socials-list__item"><a href="<?= $redux_demo['twitter'] ?>" class="item__link item__link--tw" target="_blank">Twitter</a></li>
    <li class="socials-list__item"><a href="<?= $redux_demo['facebook'] ?>" class="item__link item__link--fb" target="_blank">Facebook</a></li>
    <li class="socials-list__item"><a href="<?= $redux_demo['github'] ?>" class="item__link item__link--gh" target="_blank">Github</a></li>
</ul><!--/end .socials-list -->
</main>
<footer id="footer" class="gradient">
    <div class="footer__wrap">
        <p class="footer__text">&copy;&nbsp;2019. Все права защищены</p>
    </div>
</footer><!--/end #footer -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery.min.js" type="text/javascript"><\/script>')</script>
<script src="<?= get_template_directory_uri()?>/js/scripts.min.js"></script>
</body>
</html>
