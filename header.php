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
                        <ul>
                            <li><a href="#">企業理念</a></li>
                            <li><a href="#">施工事例</a></li>
                            <li><a href="#">採用情報</a></li>
                            <li><a href="http://localhost/bluehouseHP/item/">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="header-icon"><img class="border-none" src="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.svg" alt="ハンバーガーメニュー"></div>
                </header>
                <!-- ファーストビューの文章 -->
                <p class="header-main__text">街を作る。未来を作る。</p>
            </div>
        </div>