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