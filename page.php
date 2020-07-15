
<?php get_header(); ?>

<main class="clearfix">

  <!-- 固定ページの内容 -->
  <div class="article-wrapper">
    <article>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <section <?php post_class(); ?>>  <!-- 記事を区別するクラス名を出力 -->
          <!-- 投稿日時 -->
          <div class="post-time">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><!-- datetime属性は検索エンジン最適化のため。()内は型を表す -->
              最終更新日：<?php echo get_the_date('Y/m/d'); ?>
            </time>
          </div>
          <!-- タイトル -->
          <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <!-- アイキャッチ画像 -->
          <?php if(has_post_thumbnail()): ?>
            <div class="thumbnail">
              <div class="thumbnail-image" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
              </div>
            </div>
          <?php endif; ?>
          <!-- 内容(画像、テキスト) -->
          <div class="article-content">
            <?php the_content(); ?>
          </div>
        </section>
      <?php endwhile; endif; ?>
    </article>
  </div>

  <?php echo get_sidebar(); ?>

</main>

<?php get_footer(); ?>

