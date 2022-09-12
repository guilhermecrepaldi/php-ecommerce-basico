<?php
class AuthController {
    public function loginForm(): void { require __DIR__ . "/../Views/login.php"; }
    public function login(): void {
        if (Auth::login($_POST["user"] ?? "", $_POST["pass"] ?? "")) {
            $_SESSION["admin"] = true; header("Location: /admin");
        } else {
            $erro = "Credenciais invalidas";
            require __DIR__ . "/../Views/login.php";
        }
    }
    public function logout(): void { Auth::logout(); header("Location: /login"); }
}
