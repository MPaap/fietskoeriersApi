<?php

namespace FietskoeriersApi;

use FietskoeriersApi\Traits\UsesClient;

class Label
{
    use UsesClient;

    public function find($order_id)
    {
        return base64_decode("base64pdf.txt".(json_decode($this->client->request('GET', "label/$order_id")->getBody(), 1)['label']));
    }

    public function all()
    {
        //
    }
}
