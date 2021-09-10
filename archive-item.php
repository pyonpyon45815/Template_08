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
                        <a href="http://localhost/bluehouseHP/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="蒼乃建設" class="header-logo border-none"></a>
                    </h1>
                    <!-- ヘッダーナビ -->
                    <nav class="header-nav">
                    <ul>
                        <li><a class="text-white" href="http://localhost/bluehouseHP/company_philosophy/">企業理念</a></li>
                        <li><a class="text-white" href="http://localhost/bluehouseHP/construction_case/">施工事例</a></li>
                        <li><a class="text-white" href="http://localhost/bluehouseHP/special/">採用情報</a></li>
                        <li><a class="text-white" href="http://localhost/bluehouseHP/item/">お問い合わせ</a></li>
                    </ul>
                    </nav>
                    <div class="header-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="ハンバーガーメニュー"></div>
                </header>
            </div>
        </div>


<div class="bg-cover bg-center w-full h-96" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/NIS19311032.jpg'); background-color: rgba(255,255,255,0.1); background-blend-mode: lighten;"> 
        </div> 


        <!-- お知らせ -->
        <section class="news">
            <h2 class="news-title">お問い合わせメニュー</h2>
            <ul class="news-list">

            <?php while (have_posts()): the_post(); ?>
                <li>
                <a href="<?php the_permalink(); ?>">
                <span class="news-list__block">
                <p>価格： <?php echo number_format(get_field('価格')); ?>円</p>
               
                   
               </span>
                
                </a>
                <p>Posted by
                    <?php the_author(); ?>
                </p>
                </li>
            <?php endwhile; ?>

            <?php echo paginate_links(); ?>
            </ul>

            
        </section>

 
<?php get_footer(); ?>
