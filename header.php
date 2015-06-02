<?php
if(($_SERVER['PHP_SELF']=="/P62_TP/cart.php")&&(isset($_GET['url']))&&(!isset($_SESSION)))  {
	session_start();
}
var_dump(isset($_SESSION));
$nb_item = isset($_SESSION['CART']) ? count($_SESSION['CART']) : 0;
?>

<header>
	<nav id="navibarre">
		<ul>
			<li id="logo"><img class="logo" src="assets/img/logo.png"/></li>
			<li><a href="index.php">Acceuil</a></li>
			<li><a href="games.php">Jeux</a></li>
			<li id="cart"><a href="cart.php">Mon panier</a>
				<span id="cart_icon">
					<i class="fa fa-shopping-cart fa-2x"></i>
					<span id="cart_items"><?php echo $nb_item ?></span>
				</span>
			</li>
			<li><a href="inscription.php">Inscrivez-vous</a></li>
			<li id="login_li"><?php

				include('_formulairelogin.php') ?></li>
		</ul>
	</nav>
</header>