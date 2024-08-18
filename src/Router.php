<?php

declare(strict_types=1);

namespace App;
class Router
{
    public mixed $updates;

    public function __construct()
    {
        $this->updates = json_decode(file_get_contents('php://input'));
    }

    public function isApiCall(): false|int|string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = explode('/', $uri);
        return array_search('routes', $path);
    }

    public function getResourceId(): false|int|string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = explode('/', $uri);
        $resursID = $path [count($path) - 1];
        return is_numeric($resursID) ? (int)$resursID : false;
    }


    public function getResourName(): false|int|string
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = explode('/', $uri);
        $resousNAme = $path [count($path) - 2];
        return $resousNAme;
    }


    public function sendResponse($message): void
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($message);
    }

    public function getUpdates()
    {
        return $this->updates;
    }

    public static function get($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            if ((new  self())->getResourceId()) {
                $path = str_replace("{id}", (string)(new  self())->getResourceId(), $path);
                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback((new  self())->getResourceId());
                    exit();
                }
            }
            if ( $path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ){
                $callback();
                exit();

            }

        }
    }


    static function post($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $path) {
            $callback();
        }


    }
}