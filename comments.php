<div class="comments-wrapper">
  <?php if(post_password_required()){
    return;
  }?>
  <!-- 表示方法をカスタマイズ -->
  <?php
    comment_form(array(
      "title_reply"        => "コメントはこちらに↓",
      "label_submit"       => "送信する",
      "title_reply_before" => "<h2 id='reply-title' class='comment-reply-title'>",
      "title_reply_after"  => "</h2>",
      "format"             => "html5"
    ));
  ?>
  <?php if(have_comments()): ?>
    <h3>コメント履歴</h3>
    <!-- 書き込まれたコメントを表示する -->
    <?php
      wp_list_comments(array(
        "avatar_size" => 0,
        "max_depth"   => 1,
        "format"      => "html5"
      ));
    ?>
  <?php endif; ?>
</div>
