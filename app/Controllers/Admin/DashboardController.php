<?php namespace Admin;
class DashboardController {
    public function index(): void {
        $db = \Database::getInstance();
        $stats = ["products" => $db->query("SELECT COUNT(*) as c FROM products")->fetch()["c"],
                   "orders" => $db->query("SELECT COUNT(*) as c FROM orders")->fetch()["c"],
                   "revenue" => $db->query("SELECT COALESCE(SUM(total),0) as t FROM orders")->fetch()["t"]];
        require __DIR__ . "/../../Views/Admin/dashboard.php";
    }
}
