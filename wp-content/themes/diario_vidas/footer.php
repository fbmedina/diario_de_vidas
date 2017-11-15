<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<nav class="footer">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu' ) ); ?>
	</nav>
<?php } ?>

<?php wp_footer() ?>
</body>
</html>