
<!-- ヘッダー ======================== -->
<?php get_header(); ?>
<!-- メイン ========================= -->
<main class="clearfix">
  <!-- 記事ページの内容を挿入 -->
  <?php get_template_part("article"); ?>
  <!-- サイドバー -->
  <?php get_sidebar(); ?>
</main>
<!-- フッター ======================= -->
<?php get_footer(); ?>
