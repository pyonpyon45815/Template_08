<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
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
                        <a href="<?php echo home_url(); ?> "><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="蒼乃建設" class="header-logo border-none"></a>
                    </h1>
    <!-- ヘッダーナビ -->
                    <nav class="header-nav">
                        <ul>
                            <li><a class="text-white" href="http://localhost/bluehouseHP/company_philosophy/">企業理念</a></li>
                            <li><a class="text-white" href="http://localhost/bluehouseHP/construction_case/">施工事例</a></li>
                            <li><a class="text-white" href="http://localhost/bluehouseHP/special/">採用情報</a></li>
                            <li><a class="text-white" href="http://localhost/bluehouseHP/form/">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="header-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="ハンバーガーメニュー"></div>
                </header>
            </div>
        </div>
    <!-- アイキャッチ -->
        <?php
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'small');
        ?>
    <!-- hero -->
    <!-- 上記のアイキャッチ画像が入る -->
        <div class="bg-cover bg-center w-full h-96" style="background-image: url('<?php echo $img[0]; ?>'); background-color: rgba(255,255,255,0.1); background-blend-mode: lighten;"> 
    <!-- no-image -->
        <?php if(has_post_thumbnail()): ?>
        <?php else: ?>
        <img class="border-none h-full w-96 container mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/20200502_noimage.png" alt="のーいめーじ" />
        <?php endif; ?>
        </div> 
    <!-- ループ -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
            <!-- タイトル -->
            <h2 class="news-title text-3xl sm:text-4xl">
                <?php the_title(); ?>
            </h2>
            <?php while (have_posts()): the_post(); ?>
            <section  class="grid grid-cols-1 md:grid-cols-4">
                <div class="grid grid-cols-1 col-span-1 md:col-span-3 md:h-screen news-list">
                    <!-- コンテンツ -->
                    <div class="md:col-span-3 text-lg tracking-wider">
                        <p class="mt-3 md:mt-0"><?php the_content(); ?></p>
                    </div>
                    <p class="mt-7 text-xs md:col-span-3 text-center">
                        <?php the_time( "Y/m/d" ); ?>
                        <span class="ml-3 text-xs">Posted by<?php the_author(); ?></span>
                    </p> 
                </div>
                <!-- アーカイブ -->
                <div>
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
                </div>
            </section>
            <?php endwhile; ?> 
        </div>  
        <!-- アーカイブ -->
       
    </div>
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-nav">
                    <!-- フッターロゴ -->
                    <p>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="蒼乃建設" class="footer-logo "></a>
                    </p>
                    <!-- フッターナビ -->
                    <nav class="footer-nav__list">
                        <ul>
                            <li><a  href="http://localhost/bluehouseHP/company_philosophy/">企業理念</a></li>
                            <li><a href="http://localhost/bluehouseHP/construction_case/">施工事例</a></li>
                            <li><a href="http://localhost/bluehouseHP/special/">採用情報</a></li>
                            <li><a href="http://localhost/bluehouseHP/item/">お問い合わせ</a></li>
                        </ul>
                    </nav>
                </div>
                <p class="copyright">Copyright © 2020 Aono Corporation.</p>
            </div>
            
        </footer>
        
    </div>
    <!-- wrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>