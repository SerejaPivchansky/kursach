<?php

Class Controller_Cart extends Controller_Base {
	public function index() {
		// Получаем данные из корзины
		$productsInCart = Model_Cart::getProducts();

		if ($productsInCart) {
			// Получаем информацию о товаре
			$productsId = array_keys($productsInCart);

			$products = Model_Product::getProductsById($productsId);

			// Получаем общую стоимость
			$totalPrice = Model_Cart::getTotalPrice($products);
		}

		require_once(SITE_PATH . "/views/cart/index.php");

		return true;
	}

	
}