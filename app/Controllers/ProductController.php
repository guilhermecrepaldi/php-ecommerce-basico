<?php
class ProductController {
    public function show(string $slug): void {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM products WHERE slug = ? AND active = 1");
        $stmt->execute([$slug]);
        $product = $stmt->fetch();
        if (!$product) { http_response_code(404); require __DIR__ . "/../Views/404.php"; return; }
        require __DIR__ . "/../Views/product.php";
    }
}
