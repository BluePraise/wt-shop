<?php get_template_part('head');?>
<header>
	<nav class="main-nav">
		<ul class="menu-bar">
			<li><a href="/">WT Shop</a></li>
			<li><a href="/">(Random)</a></li>
			<li><a href="/">(List)</a></li>
			<li>
				<a href="/">Cart <span>(<?php echo WC()->cart->get_cart_contents_count(); ?>)</span></a>
				<?php if (WC()->cart->get_cart_contents_count() == 0 ) : ?>
					<div class="mini-cart-column hide">
						<div class="mini-cart-total"><?php woocommerce_mini_cart(); ?></div>
					</div>
				<?php endif; ?>
			</li>
		</ul>
	</nav>
</header>