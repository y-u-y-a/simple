<?php

  // title要素の表示
  add_theme_support("title-tag");

  // ウィジェット機能を有効化・カスタマイズする
  // register_sidebar();
  function mytheme_widgets_init() { // ウィジェットエリアを呼び出す関数を定義する
    register_sidebar(               // ウィジェット機能をオンにする関数の中身をカスタマイズする
      array(
        'name'          => ('ウィジェットエリア'),                     // ダッシュボードの表示されるタイトル
        'id'            => 'sidebar-1',                             // ウィジェットエリアのID
        'description'   => ('表示したいウィジェットを追加してください。'), // ダッシュボードに表示される説明
        'before_widget' => '<li id="%1$s" class="widget %2$s">',    // ウィジェットの直前に入れる(ここではウィジェットは、ulをさす)
        'after_widget'  => '</li>',                                 // ウィジェットの直後に入れる
        'before_title'  => '<h5 class="widget-title">',             // ウィジェットタイトルの直前に入れる
        'after_title'   => '</h4><hr>'                                  // ウィジェットタイトルの直後に入れる
      )
    );
  }
  add_action( "widgets_init", "mytheme_widgets_init" );


  // メニュー機能(navbar)を有効にする
  register_nav_menu("nav", "ヘッダーナビゲーション");

  // アイキャッチ画像の設定を有効にする
  add_theme_support("post-thumbnails");

?>
