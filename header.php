<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= bloginfo('name'); ?> <?=wp_title(); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="telephone=no" name="format-detection">
    <!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
    <meta name="HandheldFriendly" content="true">
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="twitter:description" content="" />
    <link rel="image_src" href="" />

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <?php wp_head(); ?>
</head>

<body class="page">


<section class="page__wrapper">
    <div class="header">
        <div class="header-wrapper">
            <nav class="navigation">
                <div class="menu-toggle">
                    <button class="toggle-menu-btn">
                        <svg class="toggle-btn-icon" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"
                                    />
                                </svg>
                    </button>
                </div>
                <?php if(!dynamic_sidebar('menu_header')): ?>
                    <span style="color: coral">В данной области будет располагаться меню</span>
                <?php endif; ?>
            </nav>
        </div>
    </div>