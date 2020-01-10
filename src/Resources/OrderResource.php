<?php namespace FietskoeriersApi\Resources;

class OrderResource
{
    const TYPE_BEZORGOPDRACHT = 1;
    const TYPE_RETOUROPDRACHT = 2;

    const DELIVERY_TYPE_SAME_DAY = 1;
    const DELIVERY_TYPE_NEXT_DAY = 2;

    const PRODUCT_PAKKET = 1;
    const PRODUCT_PAKKET_XL = 2;
    const PRODUCT_BRIEVENBUSPAKKET = 3;
    const PRODUCT_AANGETEKENDE_BRIEF = 4;
    const PRODUCT_AANGETEKEND_PAKKET = 5;
    const PRODUCT_VERSPAKKET = 6;

    const OPTION_HANDTEKENING = 'Handtekening';
    const OPTION_NIET_BIJ_BUREN = 'Niet bij buren';
    const OPTION_EXTRA_ZEKER = 'Extra Zeker';

    public $type = self::TYPE_BEZORGOPDRACHT;
    public $deliveryType;
    public $product;
    public $options = [];
    public $address;
    public $quantity;
    public $trackTrace = null;
    public $reference = null;
    public $comment = null;
    public $retourLinkEmail = null;
    public $retourPeriod = null;
    public $customerAddress;
    public $labelAddress;

    public function __construct(int $deliveryType, int $product, AddressResource $address, int $quantity)
    {
        $this->setDeliveryType($deliveryType)
            ->setProduct($product)
            ->setAddress($address)
            ->setQuantity($quantity);
    }

    /**
     * @param int $type
     * @return OrderResource
     */
    public function setType(int $type): OrderResource
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param int $deliveryType
     * @return OrderResource
     */
    public function setDeliveryType(int $deliveryType): OrderResource
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @param int $product
     * @return OrderResource
     */
    public function setProduct(int $product): OrderResource
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @param array $options
     * @return OrderResource
     */
    public function setOptions(array $options): OrderResource
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param AddressResource $address
     * @return OrderResource
     */
    public function setAddress(AddressResource $address): OrderResource
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param int $quantity
     * @return OrderResource
     */
    public function setQuantity(int $quantity): OrderResource
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param null $trackTrace
     * @return OrderResource
     */
    public function setTrackTrace($trackTrace)
    {
        $this->trackTrace = $trackTrace;
        return $this;
    }

    /**
     * @param null $reference
     * @return OrderResource
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param null $comment
     * @return OrderResource
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @param null $retourLinkEmail
     * @return OrderResource
     */
    public function setRetourLinkEmail($retourLinkEmail)
    {
        $this->retourLinkEmail = $retourLinkEmail;
        return $this;
    }

    /**
     * @param null $retourPeriod
     * @return OrderResource
     */
    public function setRetourPeriod($retourPeriod)
    {
        $this->retourPeriod = $retourPeriod;
        return $this;
    }

    /**
     * @param array $customerAddress
     * @return OrderResource
     */
    public function setCustomerAddress(array $customerAddress): OrderResource
    {
        $this->customerAddress = $customerAddress;
        return $this;
    }

    /**
     * @param array $labelAddress
     * @return OrderResource
     */
    public function setLabelAddress(array $labelAddress): OrderResource
    {
        $this->labelAddress = $labelAddress;
        return $this;
    }

    public function toArray()
    {
        $array = get_object_vars($this);
        $array['address'] = $this->address->toArray();

        foreach ($array as $key => $item) {
            if (is_null($item)) {
                unset($array[$key]);
            }
        }

        return $array;
    }
}

//{
//    "order": {
//    "deliveryType": 1,
//    "product": 1,
//    "address": {
//        "name": "Mark Paap",
//        "street": "Straat",
//        "nr": "1",
//        "postalCode": "1111 AA",
//        "city": "Amsterdam",
//        "country": "NL",
//        "phone": "0612345678",
//        "email": "johndoe@email.nl"
//    },
//    "quantity": 1
//    }
//}
