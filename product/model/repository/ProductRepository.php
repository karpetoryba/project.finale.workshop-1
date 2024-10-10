<?php

require_once './product/model/entity/Product.php';


class ProductRepository {

	// permet d'initialiser la session (session_start())
	// à chaque fois qu'on instancie la classe ProductRepository
	// sans l'initialisation de la session, on ne peut pas 
	// utiliser correctement la session ($_SESSION)
	public function __construct() {
		session_start();
	}

	public function persist(Product $product): Product {
		$_SESSION['products'][] = $product;
        return $product;
	}

	public function findAll(): ?array {
		if (!isset($_SESSION['products'])) {
			return null;
		}

		return $_SESSION['products'];
	}

}
