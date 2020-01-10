<?php

namespace FietskoeriersApi;

use FietskoeriersApi\Traits\UsesClient;

class Postalcodes
{
    use UsesClient;

    public function all()
    {
        return json_decode($this->client->request('GET', 'postalcodes')->getBody(), 1)['postalCodes'];
    }
}
