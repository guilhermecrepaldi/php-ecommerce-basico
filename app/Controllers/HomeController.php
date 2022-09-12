<?php
class HomeController {
    public function index(): void {
        $db = Database::getInstance();
        $products = $db->query("SELECT * FROM products WHERE active=1 ORDER BY id DESC LIMIT 12")->fetchAll();
        require __DIR__ . "/../Views/home.php";
    }
}
