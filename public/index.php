<?php
session_start();
require_once __DIR__ . "/../core/Router.php";
require_once __DIR__ . "/../core/Database.php";
require_once __DIR__ . "/../core/Auth.php";
require_once __DIR__ . "/../core/Cart.php";

$router = new Router();
$router->get("/", "HomeController@index");
$router->get("/produtos/{slug}", "ProductController@show");
$router->get("/carrinho", "CartController@index");
$router->post("/carrinho/adicionar", "CartController@add");
$router->post("/carrinho/remover", "CartController@remove");
$router->get("/checkout", "CheckoutController@index");
$router->post("/checkout/finalizar", "CheckoutController@finalize");
$router->get("/admin", "Admin\\DashboardController@index", true);
$router->get("/admin/produtos", "Admin\\ProductController@index", true);
$router->post("/admin/produtos/salvar", "Admin\\ProductController@save", true);
$router->get("/admin/produtos/deletar/{id}", "Admin\\ProductController@delete", true);
$router->get("/admin/pedidos", "Admin\\OrderController@index", true);
$router->get("/login", "AuthController@loginForm");
$router->post("/login", "AuthController@login");
$router->get("/logout", "AuthController@logout");
$router->dispatch();
