<?php comment_form() ?>
<?php if ( have_comments() ){ ?>
    <h1 style="margin-top: 5%">Comentários :</h1>
    <ul id="comments">
    <?php
        foreach ( $comments as $comment ) {
            if($comment->comment_approved == 1){
                echo "<li class='comment'>";
                    echo '<div class="commentHeader">';
                        echo '<img src="'.get_avatar_url($comment->comment_author_email).'" class="gravatar_author"> ';
                        echo '<div class="comment_author">'.$comment->comment_author.'</div> - ';
                        echo '<div class="comment_date">'.$comment->comment_date.'</div> ';
                        edit_comment_link('<i class="fa fa-edit"></i>');
                    echo '</div>';
                    echo $comment->comment_content . '<br>';
        echo "</li>";
            }
        }
    ?>
    </ul>
    <?php } ?>
