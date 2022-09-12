<?php
class CartController {
    public function index(): void { require __DIR__ . "/../Views/cart.php"; }
    public function add(): void {
        Cart::add((int)$_POST["id"], $_POST["name"], (float)$_POST["price"]);
        header("Location: /carrinho");
    }
    public function remove(): void {
        Cart::remove((int)$_POST["id"]);
        header("Location: /carrinho");
    }
}
