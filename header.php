<!DOCTYPE html>
<html>
<head>
  <title>y-u-y-a-blog</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php get_template_part("analytics"); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>  <!-- ページを区別するクラス名を出力 -->
<!-- ====================================================================== -->


<header class="header">
  <div class="header-title">
    <a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a><span>written by yuya.</span>
  </div>
  <nav class="header-nav">
    <!-- テンプレートタグのカスタマイズ -->
    <?php
    $args = array(
      "theme_location"=>"nav", // register_nav_menusで定義した場所
      "container" => "", // コンテナの要素を指定する(今回は無し)
      "link_after"      => "" //リンクテキストの後に挿入
    );
    wp_nav_menu($args);
    ?>
  </nav>
</header>
