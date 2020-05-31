<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- <title>Design Is  Corporate Value</title> -->
    <?php wp_title('|', true, 'right'); bloginfo('name'); ?>
</head>
<body>
    <div id="home" class="big-bg">
      <?php get_header();?>
      <div class="home-content home-wrapper">
        <h2>Design <br>is Corporate Value</h2>
      </div>
    </div>

    <section id="news" class="news-wrapper">
      <div class="title">
        <h2>News</h2>
        <p class="news-title kasane">News</p>
      </div>

      <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <div class="news-contents">
        <?php query_posts('posts_per_page=3'); ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="content news-content">
            <?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <?php endif; ?>

    </section>


    <section id="blog" class="blog-wrapper">
      <div class="title">
        <h2>Blog</h2>
        <p class="blog-title kasane">Blog</p>
      </div>

      <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <div class="blog-contents">
      <?php query_posts('cat=2&posts_per_page=3'); ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="content blog-content">
          <?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      </div>
      <?php endif; ?>

    </section>



    <section id="our-service" class="service-wrapper">
      <div class="title">
        <h2>Our Service</h2>
        <p class="service-title kasane">Our Service</p>
      </div>
      

      <div class="service-contents">
        <div class="content">
          <img src="content.jpg" alt="#">
          <h3>小タイトル</h3>
          <p>文章が入ります文章が入ります文章が入ります</p>
        </div>

        <div class="content">
          <img src="content.jpg" alt="#">
          <h3>小タイトル</h3>
          <p>文章が入ります文章が入ります文章が入ります</p>
        </div>

        <div class="content">
          <img src="content.jpg" alt="#">
          <h3>小タイトル</h3>
          <p>文章が入ります文章が入ります文章が入ります</p>
        </div>
      </div>
    </section>

    <div id="contact">
      <div class="contact-title">
        <h2>CONTACT</h2>
      </div>

      <div class="contact-desc">
        <p>お仕事のご相談、ご連絡は<br>
            こちらから承っております。まずはお気軽にご相談ください。
        </p>
      </div>

      <div class="contact-button">
        <p><a href="#">お問い合わせ</a></p>
      </div>
    </div>

    <?php get_sidebar();?>
    
    <script src="main.js"></script>
</body>
</html>