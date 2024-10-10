<?php

require_once './product/model/entity/Product.php';
require_once './product/model/repository/ProductRepository.php';

class ProcessCreateProductController {

	public function createProduct() {

		try {

			if (!isset($_POST['title'])) {
				$errorMessage = "Renseignez un titre.";
				
				require_once './product/view/product-error.php';
				return;
			}

			$title = $_POST['title'];
			$price = (float)$_POST['price'];
			$description = $_POST['description'] ?? null;
			$status = $_POST['status'] ?? null;

			$product = new Product($title, $price, $description, $status);

			$productRepository = new ProductRepository();
			$productRepository->persist($product);

			require_once './product/view/product-created.php';

		} catch (Exception $e) {
			$errorMessage = $e->getMessage();
			require_once './product/view/product-error.php';
		}
	}

}