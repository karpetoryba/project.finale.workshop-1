<?php
require_once './product/model/entity/Product.php';
require_once './product/model/repository/ProductRepository.php';

class IndexController {

	public function index() {
		// récupère tous les produits
		$productRepository = new ProductRepository;
		$products = $productRepository->findAll();


		require_once('./order/view/home.php');
	}
	
}



