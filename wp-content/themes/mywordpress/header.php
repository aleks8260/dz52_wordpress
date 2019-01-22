<?php
  global $redux_demo;  // This is your opt_name.
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Обо мне</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, minimal-ui, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1" />

        <link rel="stylesheet" href="<?= get_template_directory_uri()?>/styles/styles.css">
        <script src="<?= get_template_directory_uri()?>/js/libs/modernizr.min.js"></script>
    </head>
    <body>
        <header id="header" class="gradient">
            <div class="header__wrap">
                <div class="header__logo">
                    <h1 class="logo__header1"></h1>
                </div><!--/end .header__logo -->
                <ul class="socials-list">
                    <li class="socials-list__item"><a href="<?= $redux_demo['vk'] ?>" class="item__link item__link--vk" target="_blank">Вконтакте</a></li>
                    <li class="socials-list__item"><a href="<?= $redux_demo['twitter'] ?>" class="item__link item__link--tw" target="_blank">Twitter</a></li>
                    <li class="socials-list__item"><a href="<?= $redux_demo['facebook'] ?>" class="item__link item__link--fb" target="_blank">Facebook</a></li>
                    <li class="socials-list__item"><a href="<?= $redux_demo['github'] ?>" class="item__link item__link--gh" target="_blank">Github</a></li>
                </ul><!--/end .socials-list -->
                <button class="header__show-menu-btn">Меню</button>
            </div>
        </header><!--/end #header -->
