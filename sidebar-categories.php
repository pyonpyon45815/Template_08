<aside  style="border: 1px solid indigo;">
    <h2 class="font-bold text-xl">カテゴリー一覧</h2>
    <ul>
        <div>
            <?php 
            $args = array(
                'title_li'=>'',
            );
            wp_list_categories($args);
            ?>
        </div>
    </ul>
</aside>