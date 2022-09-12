<?php
class Cart {
    public static function get(): array { return $_SESSION["cart"] ?? []; }
    public static function add(int $productId, string $name, float $price): void {
        $_SESSION["cart"][$productId] = ["id" => $productId, "name" => $name, "price" => $price, "qty" => ($_SESSION["cart"][$productId]["qty"] ?? 0) + 1];
    }
    public static function remove(int $productId): void { unset($_SESSION["cart"][$productId]); }
    public static function total(): float {
        return array_sum(array_map(fn($i) => $i["price"] * $i["qty"], self::get()));
    }
    public static function clear(): void { $_SESSION["cart"] = []; }
    public static function count(): int { return array_sum(array_column(self::get(), "qty")); }
}
