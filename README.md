###### Package still in development feel free to contribute.

# Dabba Fietskoeriers.nl PHP API

Dabba Fietskoeriers.nl PHP wrapper.

`composer required m-paap/fietskoeriers-api`

## Examples

Set up auth

`$auth = new \FietskoeriersApi\Auth($username, $api_key, $test_mode);`

Get all orders

`(new \FietskoeriersApi\Order($auth))->all()`

Get single order

`(new \FietskoeriersApi\Order($auth))->find($order_id)`

Create order

```
$address = new \FietskoeriersApi\Resources\AddressResource(
    $name,
    $address,
    $nr,
    $postal_code,
    $city,
    $county
);

$order = new \FietskoeriersApi\Resources\OrderResource(
   \FietskoeriersApi\Resources\OrderResource::DELIVERY_TYPE_NEXT_DAY,
   \FietskoeriersApi\Resources\OrderResource::PRODUCT_PAKKET,
   $address,
   $quantity
);

return (new \FietskoeriersApi\Order($auth))->create($order);
```

Confirm Order

`(new \FietskoeriersApi\Order($auth))->confirm($order_id)`

Cancel Order

`(new \FietskoeriersApi\Order($auth))->cancel($order_id)`

Get label PDF

`(new \FietskoeriersApi\Label($auth))->find($order_id)`
