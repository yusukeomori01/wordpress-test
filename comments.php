<div class="p-comment">
    <?php if( have_comments() ): ?>
        <h2 id="comments" class="p-comment__ttl">Comment</h2>
        <ul class="p-comment__list">
            <?php wp_list_comments( 'avatar_size=60' ); ?>
        </ul>
    <?php endif; ?>
    <?php
        $args = array(
            'title_reply' => 'Leave a Reply',
            'label_submit' => ' POST COMMENT',
        );
        comment_form( $args );
    ?>
</div>
<a class="prev page-numbers" href="https://192.168.3.21/wordpress//category-name/post-slug/comment-page-4/#comments">« 前へ</a>

<a class="page-numbers" href="https://example.com/category-name/post-slug/comment-page-1/#comments">1</a>
<span class="page-numbers dots">…</span>
<a class="page-numbers" href="https://example.com/category-name/post-slug/comment-page-3/#comments">3</a>
<a class="page-numbers" href="https://example.com/category-name/post-slug/comment-page-4/#comments">4</a>
<span aria-current="page" class="page-numbers current">5</span>
<a class="page-numbers" href="https://example.com/category-name/post-slug/comment-page-6/#comments">6</a>
<a class="page-numbers" href="https://example.com/category-name/post-slug/comment-page-7/#comments">7</a>
<span class="page-numbers dots">…</span>
<a class="page-numbers" href="https://example.com/category-name/post-slug/comment-page-10/#comments">10</a>
<a class="next page-numbers" href="https://example.com/category-name/post-slug/comment-page-6/#comments">次へ »</a>
