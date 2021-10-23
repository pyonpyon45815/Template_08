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
<!-- header -->
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
  <!-- headerここまで -->
  <!-- hero -->
     <div class="bg-no-repeat bg-cover bg-center w-full relative" style="height:50vh; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/c-dustin-91AQt9p4Mo8-unsplash.jpg);">
     </div>
  <!-- heroここまで -->
  <div class="bg-white pt-12">
    <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
        <!-- タイトル -->
        <div class="mb-10 md:mb-16">
            <h2 class="text-gray-800 text-3xl lg:text-5xl font-bold text-center mb-4 md:mb-6"><?php wp_title(''); ?></h2>    
        </div>
        <!-- コンテンツ -->
        <div class="grid md:grid-cols-4 md:gap-8">
            <div class="grid col-span-1 md:col-span-3 md:grid-cols-3 gap-x-4 lg:gap-x-8 gap-y-8 lg:gap-y-12 md:h-screen news">
            <!-- ループ -->
            <ul class="grid col-span-3 news-list">
                <?php while (have_posts()): the_post(); ?>
                <li class="w-full">
                    <a href="<?php the_permalink(); ?>">
                      <span class="news-list__block">
                      <?php the_time( "Y/m/d" ); ?>
                      <span class="news-list__border">
                      <?php the_title(); ?>
                      </span></span>
                      <?php the_excerpt(); ?>
                    </a>
                    <p>Posted by<?php the_author(); ?></p>
                </li>
                <?php endwhile; ?>
                <div>
                <?php echo paginate_links(); ?>
                </div>
            </ul>



          
              </div>
              <div>
                  <?php get_sidebar('categories'); ?>
                  <?php get_sidebar('archives'); ?>
        </div>
       
    </div>
  </div>
        <!-- footer -->
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
    <!-- wrap -->
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>