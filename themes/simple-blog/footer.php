<footer id="footer-container">
    <nav>
        <?php 

        wp_nav_menu(array(
            'theme_location' => 'bottom-navigation'
        ));

        ?>
    </nav>

    <p>Copyright &copy; <?php echo date('Y'); ?><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> </p>
</footer> <!-- #footer-container ends -->

</div> <!-- #inner-wrap ends -->
</div> <!-- #outer-wrap ends -->
<?php wp_footer(); ?>
</body>

</html> 