<?php namespace Admin;
class ProductController {
    public function index(): void {
        $db = \Database::getInstance();
        $products = $db->query("SELECT * FROM products ORDER BY id DESC")->fetchAll();
        require __DIR__ . "/../../Views/Admin/products.php";
    }
    public function save(): void {
        $db = \Database::getInstance();
        if (!empty($_POST["id"])) {
            $stmt = $db->prepare("UPDATE products SET name=?, price=?, description=?, slug=? WHERE id=?");
            $stmt->execute([$_POST["name"], $_POST["price"], $_POST["description"], $_POST["slug"], $_POST["id"]]);
        } else {
            $stmt = $db->prepare("INSERT INTO products (name, price, description, slug) VALUES (?, ?, ?, ?)");
            $stmt->execute([$_POST["name"], $_POST["price"], $_POST["description"], $_POST["slug"]]);
        }
        header("Location: /admin/produtos");
    }
    public function delete(string $id): void {
        $db = \Database::getInstance();
        $db->prepare("DELETE FROM products WHERE id=?")->execute([$id]);
        header("Location: /admin/produtos");
    }
}
