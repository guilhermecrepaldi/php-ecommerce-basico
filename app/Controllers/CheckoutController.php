<?php
class CheckoutController {
    public function index(): void { require __DIR__ . "/../Views/checkout.php"; }
    public function finalize(): void {
        $cart = Cart::get();
        if (empty($cart)) { header("Location: /carrinho"); exit; }
        $db = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO orders (total, status, items) VALUES (?, ?, ?)");
        $stmt->execute([Cart::total(), "pago", json_encode($cart, JSON_UNESCAPED_UNICODE)]);
        $orderId = $db->lastInsertId();
        Cart::clear();
        require __DIR__ . "/../Views/order_success.php";
    }
}
