
<?php get_header(); ?>

<main class="clearfix">
<!-- アーカイブページ -->
  <?php if (is_category() ): ?><!-- (カテゴリ一覧) -->
    <p class="archive-title">ー <?php single_cat_title(); ?>に関する記事一覧 ー</p>
  <?php elseif (is_month() ): ?><!-- (月別一覧) -->
    <p class="archive-title"> ー<?php echo get_the_date("Y年n月") ?>の記事一覧 ー</p>
  <?php endif; ?>
  <!-- article.php -->
  <?php get_template_part("article"); ?>
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
