<?php


require_once './product/model/repository/StoreReviewRepository.php';

class ListStoreRewiewController {

	public function ListStoreRewiew() {
//Créer un objet ListStoreRewiewRepository et récupérer tous les produits (findAll):
               $listStoreRewiewRepository = new StoreRewiewRepository();
               $StoreRewiew = $StoreRewiewRepository->findAll();

        require_once './product/view/list-products.php';
	}

}