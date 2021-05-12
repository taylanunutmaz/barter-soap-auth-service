<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Types\User as UserType;

class AuthController
{
    /**
     * Auth
     *
     * @param string $username
     * @param string $password
     * @return \App\Types\User
     */
    public function register(string $username, string $password)
    {
        if (User::where('username', $username)->exists()) {
            header("Status: 401");
            throw new \SoapFault('SOAP-ENV:Client', 'Incorrect credentials.');
        }

        $user = new User();
        $user->username = $username;
        $user->password = app('hash')->make($password);
        $user->save();
        return new UserType($username);
    }
}
