
    <footer class="site-footer">
        <nav class="site-nav">
            <?php wp_nav_menu(['theme_location'=> 'footer']);?>
        </nav>
        <p>
            <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
        </p>
    </footer>

</div><!-- /container -->
<?php wp_footer(); ?>
</body>
</html>
