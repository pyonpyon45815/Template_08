<aside style="border: 1px solid gray;">
    <h2 class="text-2xl text-white bg-indigo-500">カテゴリー一覧</h2>
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