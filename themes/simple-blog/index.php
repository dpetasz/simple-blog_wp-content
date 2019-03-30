<?php get_header(); ?>


<div id="main-container">
    <section id="content-container">
        <!-- To jest sekcja content -->
        <?php if (have_posts()) : while (have_posts()) : the_post();

				// Pobranie odpowiedniego typu treści
				get_template_part('content', get_post_format());

			// Koniec pętli
			endwhile;
		// W pętli nie ma nic do wyświetlenia?
		else :
			?>

        <article id="post-0" class="post no-results not-found">
            <header>
                <h2 class="entry-title">Nic nie znaleziono</h2>
            </header>
            <p>Przepraszamy, ale nic dla Ciebie nie znaleźliśmy. Spróbuj znaleźć to, czego szukałeś korzystając z wyszukiwarki.</p>
            <?php get_search_form(); ?>
        </article>

        <?php 
	// Koniec
	endif;
	?>

    </section>
    <!-- #main-container - koniec -->

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?> 