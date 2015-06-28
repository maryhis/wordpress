<?php
get_header();

if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
<article class="page">

    <?php if (has_children($post) || $post->parent > 0):?>

    <nav class="site-nav children-links clearfix no-text-decoration">
        <span class="parent-link">
            <a href="<?php echo get_the_permalink(getMostAncestorID($post)) ?>">
            <?php echo get_the_title(getMostAncestorID($post)) ?>
            </a>
        </span>
        <ul>
            <?php wp_list_pages(['child_of' => getMostAncestorID($post),'title_li'=>'']) ?>
        </ul>

    </nav>

<?php endif; ?>

    <h2>
        <?php the_title() ?> </a>
    </h2>

    <?php the_content() ?>

</article>

<?php
  endwhile;

else :
  echo "<p> Nenhum conteudo encontrado! </p>";
endif;

get_footer();


 ?>
