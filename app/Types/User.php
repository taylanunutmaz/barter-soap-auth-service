<?php

namespace App\Types;

class User
{
    /**
     * @var string
     */
    public $username;

    /**
     * User constructor.
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }
}
