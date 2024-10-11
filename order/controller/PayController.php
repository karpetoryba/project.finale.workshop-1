<?php

require_once './order/model/repository/OrderRepository.php';
require_once './product/model/repository/ProductRepository.php';

class PayController
{
    private $orderRepository;
    private $productRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
        $this->productRepository = new ProductRepository();
    }

    public function pay()
    {
        $order = $this->orderRepository->find();

        if (!$order) {
            $this->renderView('404.php');
            return;
        }

        $this->renderView('pay.php', ['order' => $order]);
    }

    public function index()
    {
        $products = $this->productRepository->findAll();
        $this->renderView('home.php', ['products' => $products]);
    }

    private function renderView($view, $data = [])
    {
        extract($data);
        require_once("./order/view/$view");
    }
}
