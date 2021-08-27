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
        <!-- ヘッダー -->
        <div class="bg-no-repeat bg-cover bg-center h-96 relative opacity-80" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/danist-soh-dqXiw7nCb9Q-unsplash.jpg)">
            <div class="header-container">
                <header class="header">
                    <!-- ヘッダロゴ -->
                    <h1>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.png" alt="蒼乃建設" class="header-logo"></a>
                    </h1>
                    <!-- ヘッダーナビ -->
                    <nav class="header-nav">
                        <ul>
                            <li><a href="#">企業理念</a></li>
                            <li><a href="#">施工事例</a></li>
                            <li><a href="#">採用情報</a></li>
                            <li><a href="#">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="header-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="ハンバーガーメニュー"></div>
                </header>
                
            </div>
        </div>


    
    <h2 class="text-3xl bg-green-300 mt-7 text-center">こんにちは</h2>
    <h3 class="text-center mt-4 text-7xl text-blue-900 bg-yellow-500 ">HELLO World!!</h3>
    <h4 class="font-bold text-7xl mt-4 text-right text-red-200 bg-green-300">おはこんにちは</h4>
    <button class="button-action text-right mt-5 text-red-600 text-6xl hover:bg-yellow-500">ここ押してみて</button>
    <h5 class="text-red-600 bg-green-300 text-5xl mt-5 text-right">これでどうでしょう？</h5>


<?php get_footer(); ?>