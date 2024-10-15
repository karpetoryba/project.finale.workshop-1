<?php

require_once './product/model/entity/Product.php';

class ProductRepository {


    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [];
        }
    }
    public function persist(Product $product): Product {
        $_SESSION['products'][] = $product;
        return $product;
    }

    public function findAll(): ?array {
        return $_SESSION['products'] ?? null;
    }
    
    public function deleteById(int $id): bool
    {
        if (!isset($_SESSION['products'])) {
            return false;
        }

        foreach ($_SESSION['products'] as $index => $product) {
            if ($product->getId() == $id) {
                unset($_SESSION['products'][$index]);
                $_SESSION['products'] = array_values($_SESSION['products']);
                return true;
            }
        }

        return false;
    }

}
