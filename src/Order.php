<?php

namespace FietskoeriersApi;

use FietskoeriersApi\Resources\OrderResource;
use FietskoeriersApi\Traits\UsesClient;

class Order
{
    use UsesClient;

    public function find($order_id)
    {
        return json_decode($this->client->request('GET', "order/$order_id")->getBody(), 1)['order'];
    }

    public function all()
    {
        return json_decode($this->client->request('GET', 'order')->getBody(), 1)['orders'];
    }

    public function create(OrderResource $order)
    {
        return json_decode($this->client->request(
            'POST',
            'order',
            [
                'json' => [
                    "order" => $order->toArray()
                ]
            ]
        )->getBody(), 1);
    }

    public function confirm($order_id)
    {
        return json_decode($this->client->request('POST', "order/confirm/$order_id")->getBody(), 1);
    }

    public function cancel($order_id)
    {
        return json_decode($this->client->request('POST', "order/cancel/$order_id")->getBody(), 1);
    }
}
