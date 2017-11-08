<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<nav class="footer">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu' ) ); ?>
		<p class="centered big"><i class="fa fa-bars" aria-hidden="true"></i></p>
	</nav>
<?php } ?>

<?php wp_footer() ?>
</body>
</html>