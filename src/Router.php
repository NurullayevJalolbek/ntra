<?php

declare(strict_types=1);

namespace App;

use App\middlewares\Authentication;

class Router
{
    public mixed $updates;

    public function __construct()
    {
        $this->updates = json_decode(file_get_contents('php://input'));
    }

//    public function isApiCall(): false|int|string
//    {
//        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//        $path = explode('/', $uri);
//        return array_search('routes', $path);
//    }

    public function getResourceId(): false|int|string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = explode('/', $uri);
        $resursID = $path [count($path) - 1];
        return is_numeric($resursID) ? (int)$resursID : false;
    }


//    public function getResourName(): false|int|string
//    {
//        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//        $path = explode('/', $uri);
//        $resousNAme = $path [count($path) - 2];
//        return $resousNAme;
//    }
//
//
//    public function sendResponse($message): void
//    {
//        header('Content-Type: application/json; charset=utf-8');
//        echo json_encode($message);
//    }
//
//    public function getUpdates()
//    {
//        return $this->updates;
//    }

    public static function get($path, $callback, string|null $middleware = null): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ((new self())->getResourceId()) {

                $path = str_replace('{id}', (string)(new self())->getResourceId(), $path);

                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback((new self())->getResourceId());
                    exit();
                }
            }
            if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                (new Authentication())->handle($middleware);
                $callback();
                exit();
            }
        }
    }


    public static function post($path, $callback): void
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $path) {
            $callback();
        }
    }


    public static function patch($path, $callback, string|null $middleware = null): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['_method'] === 'patch') {
                if ((new self())->getResourceId()) {

                    $path = str_replace('{id}', (string)(new self())->getResourceId(), $path);

                    if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                        $callback((new self())->getResourceId());
                        exit();
                    }
                }
            }
            if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                (new Authentication())->handle($middleware);
                $callback();
                exit();
            }
        }
    }

    public static function delete($path, $callback, string|null $middleware = null): void
    {
        if(($_REQUEST['_method']) !== 'delete') {
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ((new self())->getResourceId()) {
                $path = str_replace('{id}', (string) (new self())->getResourceId(), $path);
                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback((new self())->getResourceId());
                    exit();
                }
            }
            $callback();
            exit();
        }

    }


    public static function ErrorResponse($code)
    {

        http_response_code($code);
        if ($code === 404) {

            LoadView("404");
        }
        exit();

    }


    public function logout(): void
    {
        session_destroy();

        header('Location: /login');
        exit();
    }

}