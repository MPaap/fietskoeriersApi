<?php

namespace FietskoeriersApi\Traits;

use FietskoeriersApi\Auth;
use FietskoeriersApi\Client;

trait UsesClient
{
    private $client;

    public function __construct(Auth $auth)
    {
        $this->client = new Client($auth);
    }
}
