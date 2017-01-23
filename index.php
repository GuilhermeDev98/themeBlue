<?php get_header() ?>
    <main>
        <section id="listPosts">
            <?php
                if(have_posts()){
                    echo "<ul>";
                    while ( have_posts() ): the_post();
                        $gravatar = get_avatar_url($post->post_author);
                        echo '<li>';
                        echo '<div class="postTitle"><a href="'.get_the_permalink().'">'.$post->post_title.'</a></div>';
                        echo '<div class="postInfo"> <img src="'.$gravatar.'" style=" width: 30px; height: 30px; border-radius: 50%; vertical-align: middle;"> ';
                            the_author(); echo ' . '; the_date('F j, Y');
                        echo '</div>';
                        echo '<div class="postContent">'.get_the_content('mais ...').'</div>';
                        $count = $post->comment_count;
                        if (!$count == "0"){
                            if ($count === "1"){
                                echo '<i class="fa fa-comments"></i> 1 Comentário';
                            }else{
                                echo '<i class="fa fa-comments"></i>'.$count.' Comentários';
                            }
                        }
                        echo '</li>';
                    endwhile;
                    echo "</ul>";
                    echo '<div class="pagination">'.paginate_links().'</div>';
                }else{
                    echo "nenhum post encontrado";
                }
            ?>
        </section>
        <div id="aside">
            <?php get_sidebar('profile') ?>
        </div>
    </main>
<?php get_footer() ?>
