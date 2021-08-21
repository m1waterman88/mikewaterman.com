<?php

declare(strict_types=1);

class Router {

    private array $routes;

    /**
     * Define routes.
     *
     * @param array $routes The routes to occupy $this->routes
     */
    public function __construct(array $routes) {
        $this->routes = $routes;
    }

    /**
     * Route to the specified URI's base-route controller.
     *
     * @param string $uri
     * @return string
     */
    public function direct(string $uri): string {
        $baseRoute = explode('/', $uri)[0];

        if (array_key_exists($baseRoute, $this->routes)) {
            return $this->routes[$baseRoute];
        }

        http_response_code(404);
        return 'controllers/404.php';
    }
}
