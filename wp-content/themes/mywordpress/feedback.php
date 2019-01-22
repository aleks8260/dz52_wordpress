<?php
/*
Template Name: Feedback
*/
?>
<?php
    get_header();
?>
        <main id="wrap">
          <?php
               get_sidebar();
           ?>
            <br>
            <article class="info-block">
                <h2 class="block__header2 header--bg"><span class="header__text">У вас есть интересный проект? <!--[if lt IE 9]><br /><![endif]-->Напишите мне.</span></h2>
                <div class="block__wrap">
                    <div class="block__info info--form">
                        <form action="#" class="form-block" method="post">
                            <fieldset class="form-block__item item--personal-info">
                                <div class="item__wrap">
                                    <label for="cli-name" class="form-block__label">Имя</label>
                                    <div class="wrap__field">
                                        <input type="text" id="cli-name" name="cli-name" class="form-block__field" placeholder="Как к Вам обращаться" tabindex="1" data-val="Имя" autofocus required />
                                    </div>
                                </div>
                                <div class="item__wrap">
                                    <label for="cli-email" class="form-block__label">Email</label>
                                    <div class="wrap__field">
                                        <input type="email" id="cli-email" name="cli-email" placeholder="Куда мне писать" class="form-block__field" tabindex="2" data-val="Email" required />
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="form-block__item item--message">
                                <label class="form-block__label" for="cli-message">Сообщение</label>
                                <div class="wrap__field">
                                    <textarea name="cli-message" id="cli-message" class="form-block__field field--textarea" placeholder="Кратко, в чем суть" data-val="Сообщение" tabindex="3" required></textarea>
                                </div>
                            </fieldset>
                            <div class="form-block__item item--buttons">
                                <button type="submit" class="form-block__btn btn--blue">Отправить</button>
                                <button type="reset" class="form-block__btn btn--gray">Очистить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </article><!--/end .info-block -->
        <?php
            get_footer();
        ?>
