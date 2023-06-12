<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#1167b1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic%7CInter:100,200,300,regular,500,600,700,800,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header">
    <div id="header-top">
        <div class="container">
            <div class="row">
             <?php get_template_part('templates-parts/header/header', 'brand'); ?>
             <?php get_template_part('templates-parts/header/header', 'inf'); ?>
            </div>
        </div>
    </div>
    <div id="header-bottom" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="row">
                <div class="navbar">
                    
                    <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                    <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                    <?php get_template_part('templates-parts/header/header', 'contact'); ?>
                </div>
            </div>
        </div>
    </div>
</header>
    <main id="main">
        <div class="container">
            <div class="row">
