<?php
class Auth {
    public static function check(): bool { return isset($_SESSION["admin"]); }
    public static function login(string $user, string $pass): bool {
        return $user === "admin" && $pass === "admin123";
    }
    public static function logout(): void { unset($_SESSION["admin"]); }
}
