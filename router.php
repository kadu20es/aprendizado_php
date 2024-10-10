<?php
    class Router {
        protected $routes = array();

        public function addRoute($uri, $callback) {
            $this->routes[$uri] = $callback;
        }

        public function dispatch($uri){
            if(array_key_exists($uri, $this->routes)){
                call_user_func($this->routes[$uri]);
                return; // Adicionado para interromper a execução após chamar a rota
            }

            echo "404 - Rota não encontrada";
        }
    }