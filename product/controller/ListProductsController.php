<?php


require_once './product/model/repository/ProductRepository.php';

class ListProductsController {

	public function listProducts() {

        $productRepository = new ProductRepository();
        $products = $productRepository->findAll();

        require_once './product/view/list-products.php';
	}

}