<?php get_header(); ?>
        <!-- お知らせ -->
        <section class="news">
            <?php the_post(); ?>
            <h2 class="news-title">お知らせ</h2>
            <ul class="news-list">
              
                <li>
                <a href="#"><span class="news-list__block">
                    <?php the_time( "Y/m/d" ); ?>
                <span class="news-list__border">
                    <?php the_title(); ?>
                </span></span>
                    <?php the_content(); ?>
                </a>
                <p>Posted by
                    <?php the_author(); ?>
                </p>
                </li>

                <li><a href="#"><span class="news-list__block">2020.11.10<span class="news-list__border">お知らせ</span></span>【メディア掲載】住宅雑誌 2020年11月号</a></li>
                <li><a href="#"><span class="news-list__block">2020.11.01<span class="news-list__border">お知らせ</span></span>ホームページが完成しました。</a></li>
            </ul>
        </section>

        <!-- 施工事例 -->
        <section class="case">
            <h2 class="case-title">施工事例</h2>
            <div class="flexbox">
                <section class="case-content">
                    <p class="case-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/building1.png" alt="M様邸新築工事"></p>
                    <h3 class="case-content__title">M様邸新築工事</h3>
                    <p class="case-content__text">埼玉県</p>
                    <a href="#" class="case-content__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/more.png" alt="詳細を見る"></a>
                </section>
                <section class="case-content">
                    <p class="case-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/building2.png" alt="スカイビル"></p>
                    <h3 class="case-content__title">スカイビル</h3>
                    <p class="case-content__text">東京都</p>
                    <a href="#" class="case-content__btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/more.png" alt="詳細を見る" class="case-content__img"></a>
                </section>
            </div>
            <p class="case-btn"><a href="#">施工実績一覧</a></p>
        </section>

        <!-- links -->
        <div class="links">
            <a href="#" class="link-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/company.png" alt="企業理念"></a>
            <a href="#" class="link-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit.png" alt="採用情報"></a>
            <a href="#" class="link-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="お問い合わせ"></a>
        </div>
<?php get_footer(); ?>
