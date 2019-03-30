<div id="comments">
    <?php 
    // Czy wpis jest chroniony hasłem?
    if (post_password_required()) : ?>
    <p class="nopassword">
        Ten wpis jest chroniony hasłem. Wpisz hasło.
    </p>
</div>
<?php
        // Powrót
return;
endif;

// Sprawdzenie, czy są komentarze
if (have_comments()) : ?>
<h2 id="comments-title">
    Ten wpis <?php comments_number('nie ma komentarzy', 'ma jeden komentarz', 'ma % komentarzy'); ?>
</h2>

<?php 
// Nawigacja komentarzy
if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
<nav id="comment-nav-above">
    <div class="nav-previous">
        <?php previous_comments_link('&larr; Starsze komentarze'); ?>
    </div>
    <div class="nav-next">
        <?php next_comments_link('Nowsze komentarze &rarr;'); ?>
    </div>
</nav>
<?php endif; ?>

<ol class="commentlist">
    <?php 
    // Wyświetlanie listy komentarzy
    wp_list_comments();
    ?>
</ol>

<?php 
// Nawigacja komentarzy
if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
<nav id="comment-nav-above">
    <div class="nav-previous">
        <?php previous_comments_link('&larr; Starsze komentarze'); ?>
    </div>
    <div class="nav-next">
        <?php next_comments_link('Nowsze komentarze &rarr;'); ?>
    </div>
</nav>
<?php endif;

// Koniec
endif; ?>

<?php 
// Formularz dodawania komentarzy
comment_form();
?>

</div> 