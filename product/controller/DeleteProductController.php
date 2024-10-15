<?php

require_once './product/model/repository/ProductRepository.php';

class DeleteProductController
{
    public function deleteProduct(): void
    {
        // Initialize the ProductRepository
        $productRepository = new ProductRepository();
        

        if (!isset($_POST['productId'])) {
            $errorMessage = "Aucun produit n'a été sélectionné pour la suppression.";
            require_once './product/view/product-error.php';
            return;
        }
        $productId = $_POST['productId'];
        

        $deletedProduct = $productRepository->deleteById($productId);

        if (!$deletedProduct) {
            $errorMessage = "Impossible de supprimer un produit qui n'existe pas.";
            require_once './product/view/product-error.php';
            return;
        }

        // Load the delete confirmation view
        require_once './product/view/delete-product.php';
    }
}

