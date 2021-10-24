<aside style="border: 1px solid gray;">
    <h2 class="text-2xl text-white bg-indigo-500">月間アーカイブ</h2>
  <ul>
    <?php
    $args = array(
      'type'=>'monthly',
    );
    wp_get_archives($args);
    ?>
  </ul>
</aside>