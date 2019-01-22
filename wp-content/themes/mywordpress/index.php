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
                        <!-- <img src="<?= get_template_directory_uri()?>/images/avatar/avatar.jpg" alt="Мой аватар" class="avatar__image" /> -->
                        <img src="<?=$redux_demo['opt-media']['url'];?>" alt="Мой аватар" class="avatar__image" />
                    </div>
                    <ul class="block__info">
                        <li class="info__item">
                            <strong class="block__text text--strong">Меня зовут:</strong>
                            <span class="block__text"><?= $redux_demo['name'] ?></span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Мой возраст:</strong>
                            <span class="block__text"><?= $redux_demo['age'] ?></span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Мой город:</strong>
                            <span class="block__text"><?= $redux_demo['city'] ?></span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Моя специализация:</strong>
                            <span class="block__text"><?= $redux_demo['specialization'] ?></span>
                        </li>
                        <li class="info__item">
                            <strong class="block__text text--strong">Ключевые навыки:</strong>
                            <ul class="info__exp-list">
                                <?php foreach ($redux_demo['opt-slides'] as $slides ) : ?>
                                  <li class="exp-list__item"><?=$slides['title']?></li>
                                <?php endforeach;?>

                            </ul><!--/end .block__exp-list -->
                        </li>
                    </ul>
                </div>
            </article><!--/end .info-block -->
            <article class="info-block">
                <h2 class="block__header2">Опыт работы</h2>
                <div class="block__wrap">
                  <?php foreach ($redux_demo['opt-experience'] as $experience ) : ?>
                    <div class="block__info info--ico info--expirience">
                        <p class="block__text"><strong><?=$experience['title']?></strong></p>
                        <p class="block__text text--small"><?=$experience['description']?></p>
                    </div>
                  <?php endforeach;?>
                </div>
            </article><!--/end .info-block -->
            <article class="info-block">
                <h2 class="block__header2">Образование</h2>
                <div class="block__wrap">
                  <?php foreach ($redux_demo['opt-courses'] as $courses ) : ?>
                    <div class="block__info info--ico info--edu">
                        <p class="block__text"><strong><?=$courses['title']?></strong></p>
                        <p class="block__text text--small"><?=$courses['description']?></p>
                        <p class="block__text text--small"><em><?=$courses['url']?></em></p>
                    </div>
                  <?php endforeach;?>



                  <?php foreach ($redux_demo['opt-highereducation'] as $highereducation ) : ?>
                    <div class="block__info info--ico info--courses">
                        <p class="block__text"><strong><?=$highereducation['title']?></strong></p>
                        <p class="block__text text--small"><?=$highereducation['description']?></p>
                        <i class="block__text text--small"><?=$highereducation['url']?></i>
                    </div>
                  <?php endforeach;?>
                </div>
            </article><!--/end .info-block -->

        <?php
            get_footer();
        ?>
