<?php

namespace FietskoeriersApi;

class Auth
{
    private $username;
    private $password;
    private $test_mode;

    public function __construct($username, $password, $test_mode = false)
    {
        $this->username = $username;
        $this->password = $password;
        $this->test_mode = $test_mode;
    }

    public function testMode()
    {
        return $this->test_mode;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
