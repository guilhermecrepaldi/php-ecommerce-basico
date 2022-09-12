<?php namespace Admin;
class OrderController {
    public function index(): void {
        $db = \Database::getInstance();
        $orders = $db->query("SELECT * FROM orders ORDER BY id DESC")->fetchAll();
        require __DIR__ . "/../../Views/Admin/orders.php";
    }
}
