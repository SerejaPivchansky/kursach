<?php

Class Model_Cart extends Model_Base {
	public static function itemsCount() {
		return 0;
	}

	public static function getProducts() {
		if (isset($_SESSION["products"])) {
			return $_SESSION["products"];
		}

		return false;
	}

	public static function getTotalPrice($products) {
		$productsInCart = self::getProducts();

		$total = 0;

		if ($products) {
			foreach($products as $item) {
				$total += $item["price"] * $productsInCart[$item["id"]];
			}
		}

		return $total;
	}
}