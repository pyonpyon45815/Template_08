<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrap"> 
        <div class="bg-black">
            <div class="header-container bg-black block">
                <header class="header">
                    <!-- ヘッダロゴ -->
                    <h1>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="蒼乃建設" class="header-logo border-none"></a>
                    </h1>
                    <!-- ヘッダーナビ -->
                    <nav class="header-nav">
                        <ul>
                            <li><a class="text-white" href="#">開業理念</a></li>
                            <li><a class="text-white" href="#">施工事例</a></li>
                            <li><a class="text-white" href="#">採用情報</a></li>
                            <li><a class="text-white" href="#">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="header-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="ハンバーガーメニュー"></div>
                </header>
            </div>
        </div>
        
        <!-- hero -->
        <div class="bg-no-repeat bg-cover bg-center relative h-96" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/danist-soh-dqXiw7nCb9Q-unsplash.jpg);background-color: rgba(255,255,255,0.5);background-blend-mode: lighten;">
        </div>

        <!-- ループ -->
    <?php while (have_posts()): the_post(); ?>
    <section class="mt-7 mb-7">
            <h2 class="news-title text-3xl sm:text-4xl"><?php the_title(); ?></h2>

            <div class="w-1/2 text-left mt-0 mb-0 mr-auto ml-auto">
                <p class="mt-3md:text-xl md:mt-0"><?php the_content(); ?></p>
            </div>

            <p class="mt-7 text-xs"><?php the_time( "Y/m/d" ); ?>
            <span class="ml-3 text-xs">Posted by<?php the_author(); ?>
            </span>
            </p>
    </section>
    <?php endwhile; ?> 

<?php get_footer(); ?>