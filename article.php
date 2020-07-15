
<!-- 記事ページの中身 -->

<div class="article-wrapper">
  <article>
    <?php if(have_posts()):
      while(have_posts()):
        the_post();
    ?>
      <section <?php post_class(); ?>>  <!-- 記事を区別するクラス名を出力 -->
        <!-- 投稿日時 -->
        <div class="post-time">
          <time datetime="<?php the_modified_date('Y-m-d'); ?>"><!-- datetime属性はSEOのため。()内は型を表す -->
            最終更新日：<?php the_modified_date('Y/m/d'); ?>
          </time>
        </div>
        <!-- タイトル -->
        <h1 class="article-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <!-- カテゴリ -->
        <div class="post-cat">
          <?php the_category(); ?>
        </div>
        <!-- アイキャッチ画像 -->
        <?php if(has_post_thumbnail()): ?>
          <div class="thumbnail">
            <div class="thumbnail-image" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">
            </div>
          </div>
        <?php endif; ?>
        <!-- 内容(画像、テキスト) -->
        <div class="article-content">
          <?php if(is_single()): ?>
            <?php the_content(); ?>
            <!-- コメントフォーム -->
            <?php comments_template(); ?>
          <?php else: ?>
            <?php the_excerpt(); ?>
          <?php endif; ?>
        </div>
        <!-- read moreボタン -->
        <?php if(!is_single()): ?>
          <div class="readmore">
            <a href="<?php the_permalink(); ?>">READ MORE</a>
          </div>
        <?php endif; ?>
      </section>
    <?php endwhile; endif; ?>
  </article>
  <!-- 詳細ページの場合(前後の記事リンク生成) -->
  <?php if(is_single()): ?>
    <div class="page-nav single-page-nav clearfix">
      <span class="pre">
        <?php previous_post_link("%link", "<i class='fa fa-angle-double-left'></i> 【%title】"); ?>
      </span>
      <span class="next">
        <?php next_post_link("%link", "【%title】 <i class='fa fa-angle-double-right'></i>"); ?>
      </span>
    </div>
  <?php endif; ?>
<!-- トップページで前後ページのリンク -->
  <?php if($wp_query->max_num_pages > 1): ?>
    <div class="page-nav top-page-nav clearfix">
      <span class="pre"><?php previous_posts_link("<i class='fa fa-angle-double-left'></i> 前のページへ"); ?></span>
      <span class="next"><?php next_posts_link("次のページへ <i class='fa fa-angle-double-right'></i>"); ?></span>
    </div>
  <?php endif; ?>
</div>
