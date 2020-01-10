<?php

namespace FietskoeriersApi\Resources;

class AddressResource
{
    public $name;
    public $street;
    public $nr;
    public $postalCode;
    public $city;
    public $country;
    public $phone = null;
    public $email = null;

    public function __construct($name, $street, $nr, $postalCode, $city, $country)
    {
        $this->setName($name)
            ->setStreet($street)
            ->setNr($nr)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setCountry($country);
    }

    /**
     * @param mixed $name
     * @return AddressResource
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $street
     * @return AddressResource
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param mixed $nr
     * @return AddressResource
     */
    public function setNr($nr)
    {
        $this->nr = $nr;
        return $this;
    }

    /**
     * @param mixed $postalCode
     * @return AddressResource
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @param mixed $city
     * @return AddressResource
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param mixed $country
     * @return AddressResource
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param null $phone
     * @return AddressResource
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param null $email
     * @return AddressResource
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function toArray()
    {
        $array = get_object_vars($this);

        foreach ($array as $key => $item) {
            if (is_null($item)) {
                unset($array[$key]);
            }
        }

        return $array;
    }
}
