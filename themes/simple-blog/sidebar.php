<aside id=”sidebar-container”>

    <ul id=”sidebar”>

        <?php

        // Jeśli pasek boczny jest pusty, wyświetlana jest statyczna treść

        if (!dynamic_sidebar('right-column')) : ?>

        <li>Umieść jakieś widżety w obszarze widżetów w <em>prawej kolumnie</em>!</li>

        <?php endif; ?>

    </ul>

</aside> <!-- #sidebar-container - koniec --> 