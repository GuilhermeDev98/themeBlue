<?php get_header('single') ?>
<main>
    <section id="listPosts">
        <?php
        if(have_posts()){
            echo "<ul>";
            while ( have_posts() ): the_post();
                echo '<li>';
                echo '<div class="postInfo">';
                    the_date('F j, Y');
                echo '</div>';
                echo '<div class="postContent" style="font-size: 1em">'.get_the_content('mais ...').'</div>';
                echo '</li>';
            endwhile;
            echo "</ul>";
        }else{
            echo "nenhum post encontrado";
        }
        ?>
        <?php comments_template() ?>
    </section>
    <div id="aside">
        <?php get_sidebar('profile') ?>
    </div>
</main>
<?php get_footer() ?>
