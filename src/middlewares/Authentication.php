<?php

declare(strict_types=1);

namespace App\middlewares;

use App\Session;

class Authentication
{

    public function handle(string|null $middleware = null): void
    {
        if (!$middleware) {
            return;
        }

        if ($middleware === 'guest') {
            if ((new Session())->getUser()) {
                redirect('/');
            }
        } elseif ($middleware === 'auth') {
            if (!(new Session())->getUser()) {
                redirect('/login');
            }
        }
    }
}