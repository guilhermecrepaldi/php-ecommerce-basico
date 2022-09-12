<?php
class Router {
    private array $routes = [];
    
    public function get(string $path, string $handler, bool $auth = false): void {
        $this->routes[] = compact("path", "handler", "auth") + ["method" => "GET"];
    }
    public function post(string $path, string $handler, bool $auth = false): void {
        $this->routes[] = compact("path", "handler", "auth") + ["method" => "POST"];
    }
    
    public function dispatch(): void {
        $method = $_SERVER["REQUEST_METHOD"];
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $uri = rtrim($uri, "/") ?: "/";
        
        foreach ($this->routes as $route) {
            if ($route["method"] !== $method) continue;
            $pattern = preg_replace("/\{(\w+)\}/", "(?P<$1>[^/]+)", $route["path"]);
            $pattern = "#^" . $pattern . "$#";
            
            if (preg_match($pattern, $uri, $matches)) {
                if ($route["auth"] && !Auth::check()) {
                    header("Location: /login"); exit;
                }
                [$controller, $action] = explode("@", $route["handler"]);
                $ctrl = new $controller();
                $params = array_filter($matches, "is_string", ARRAY_FILTER_USE_KEY);
                $ctrl->$action(...$params);
                return;
            }
        }
        http_response_code(404);
        require __DIR__ . "/../app/Views/404.php";
    }
}
