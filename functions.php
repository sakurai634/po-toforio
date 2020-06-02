<?php if(have_posts()): while(have_posts()): the_post(); ?>
 
    // アイキャッチ画像を表示するテンプレートタグ
    <?php the_post_thumbnail('thumbnail'); ?>
 
<?php endwhile; endif; ?>