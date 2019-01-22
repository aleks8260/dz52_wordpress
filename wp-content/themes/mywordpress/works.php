<?php
/*
Template Name: Works
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
                <h2 class="block__header2">Мои работы</h2>
                <div class="block__wrap">
                    <?php foreach ($redux_demo['opt-portfolio'] as $portfolio ) : ?>
                    <div class="block__info info--portfolio">
                        <div class="portfolio__preview">
                            <h3 class="portfolio__item-name"><a href="<?=$portfolio['url']?>" class="item-name__text"><?=$portfolio['title']?></a></h3>
                            <img src="<?=$portfolio['image']?>" alt="<?=$portfolio['description']?>" class="preview__img">
                        </div>
                        <p class="block__text"><?=$portfolio['description']?></p>
                    </div>
                    <?php endforeach;?>

                </div>
            </article><!--/end .info-block -->

          <?php
              get_footer();
          ?>
