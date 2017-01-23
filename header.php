<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/style700.css'; ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div id="bannerHeader">
            <div id="logo">
                <?php /* Trocar logo e descrição */ ?>
                <a href="<?php echo home_url() ?>" style="color: #fff"><img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png' ?>" alt="logo" id="logoHeader">
                    <?php echo get_bloginfo('name'); ?></a>
            </div>
            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos
        </div>
    </header>
