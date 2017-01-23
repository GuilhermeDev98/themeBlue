<div id="profile">
    <img src="<?php echo get_avatar_url('1'); ?>" class="img-profile">
    <?php echo '<div id="blog-author">';
    /* trocar id do author( se preciso ) */
    the_author_meta('nickname', '1');
    echo '</div>'; ?>
    <?php echo '<div id="description-author">';
    /* trocar id do author( se preciso ) */
    the_author_meta('description', '1');
    echo '</div>' ?>
</div>