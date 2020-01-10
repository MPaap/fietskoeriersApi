<?php

namespace FietskoeriersApi;

class Client
{
    private $client;

    const BASE_URI = "https://dabba.fietskoeriers.nl/api/";
    const BASE_TEST_URI = "https://test.fietskoeriers.nl/api/";

    public function __construct(Auth $auth)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $auth->testMode() ? self::BASE_TEST_URI : self::BASE_URI,
            'auth' => [$auth->getUsername(), $auth->getPassword()]
        ]);
    }

    public function request($method, $uri, $options = [])
    {
        return $this->client->request($method, $uri, $options);
    }
}
