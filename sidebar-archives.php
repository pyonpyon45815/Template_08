<aside>
  <h2>月間アーカイブ</h2>
  <ul>
    <?php
    $args = array(
      'type'=>'monthly',
    );
    wp_get_archives($args);
    ?>
  </ul>
</aside>