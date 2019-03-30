<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h2>
        <p class="entry-meta">
            Opublikowano dnia <time datetime="<?php echo get_the_date(); ?>">
                <?php the_time(); ?>,</time>
            autor: <?php the_author_link(); ?>
            <?php 
            // Czy komentarze są otwarte?
            if (comments_open()) : ?>
            &bull; <?php comments_popup_link('Brak komentarzy', '1 komentarz', 'komentarzy: %'); ?>
            <?php endif; ?>
        </p>
    </header>
    <?php
        // Treść
    the_content();

    // Jeśli strona pojedynczego wpisu i komentarze są otwarte
    if (is_singular() && comments_open())
        comments_template('', true);
    ?>
</article> 