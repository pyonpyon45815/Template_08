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
        <!-- ヘッダー -->
        <div class="header-wrap">
            <div class="header-container">
                <header class="header">
                    <!-- ヘッダロゴ -->
                    <h1>
                        <a href="http://localhost/bluehouseHP/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.png" alt="蒼乃建設" class="header-logo border-none"></a>
                    </h1>
                    <!-- ヘッダーナビ -->
                    <nav class="header-nav">
                    <?php get_template_part('includes/nav'); ?>
                    </nav>
                    <div class="header-icon"><img class="border-none" src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="ハンバーガーメニュー"></div>
                </header>
                <!-- ファーストビューの文章 -->
                <p class="header-main__text">街を作る。未来を作る。</p>
            </div>
        </div>






        <!-- お知らせ -->
        <section class="news">
            <h2 class="news-title">お知らせ</h2>
            <ul class="news-list">

            <?php while (have_posts()): the_post(); ?>
                <li>
                <a href="<?php the_permalink(); ?>">
                <span class="news-list__block">
                    <?php the_time( "Y/m/d" ); ?>
                <span class="news-list__border">
                    <?php the_title(); ?>
                </span></span>
                    <?php the_excerpt(); ?>
                </a>
                <p>Posted by
                    <?php the_author(); ?>
                </p>
                </li>
            <?php endwhile; ?>

            <?php echo paginate_links(); ?>
            </ul>
        </section>

        <div class="text-3xl bg-blue-500">テストです。どんなかんじ</div>
    
        <!-- 施工事例 -->
        <section class="case">
            <h2 class="case-title">施工事例</h2>
            <div class="flexbox">
                <section class="case-content">
                    <p class="case-content__img"><img class="border-none" src="<?php echo get_template_directory_uri(); ?>/assets/img/building1.png" alt="M様邸新築工事"></p>
                    <h3 class="case-content__title">M様邸新築工事</h3>
                    <p class="case-content__text">埼玉県</p>
                    <a href="#" class="case-content__btn"><img class="border-none case-content__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/more.png" alt="詳細を見る"></a>
                </section>


               
                
                <section class="case-content">
                    <p class="case-content__img"><img class="border-none text" src="<?php echo get_template_directory_uri(); ?>/assets/img/building2.png" alt="スカイビル"></p>
                    <h3 class="case-content__title">スカイビル</h3>
                    <p class="case-content__text">東京都</p>
                    <a href="#" class="case-content__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/more.png" alt="詳細を見る" class="case-content__img border-none"></a>
                </section>
            </div>
            <p class="case-btn"><a href="#">施工実績一覧</a></p>
        </section>

        <!-- links -->
        <div class="links">
            <a href="http://localhost/bluehouseHP/company_philosophy/" class="link-img"><img class="border-none" src="<?php echo get_template_directory_uri(); ?>/assets/img/company.png" alt="企業理念"></a>
            <a href="http://localhost/bluehouseHP/special/" class="link-img"><img class="border-none" src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit.png" alt="採用情報"></a>
            <a href="http://localhost/bluehouseHP/item/" class="link-img"><img class="border-none" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="お問い合わせ"></a>
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
