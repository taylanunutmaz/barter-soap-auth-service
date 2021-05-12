<?php

namespace App\Http\Controllers;

class AuthController
{
    /**
     * Auth
     *
     * @param string $username
     * @param string $password
     * @return string
     */
    public function login(string $username, string $password): string
    {
        return 'selam';
    }
}
