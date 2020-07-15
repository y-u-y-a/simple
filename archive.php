
<!-- ヘッダー ======================== -->
<?php get_header(); ?>
<!-- メイン ========================= -->
<main class="clearfix">
<!-- 一覧ページの場合のタイトル -->
  <?php if(is_category()): ?>  <!-- (カテゴリーページならば) -->
    <p class="archive-title">ー <?php single_cat_title(); ?>に関する記事一覧 ー</p>
  <?php elseif(is_month()): ?><!-- (月別ページならば) -->
    <p class="archive-title"> ー<?php echo get_the_date("Y年n月") ?>の記事一覧 ー</p>
  <?php endif; ?>
  <!-- 記事ページの内容を挿入 -->
  <?php get_template_part("article"); ?>
  <!-- サイドバー -->
  <?php get_sidebar(); ?>
</main>
<!-- フッター ======================= -->
<?php get_footer(); ?>
