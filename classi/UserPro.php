<?php
require_once __DIR__ . '/User.php';
class UserPro extends User
{
    private $password;
    private $discount;

    public function __construct($name, $lastname, $address, $email, $phone, $card, $password, $discount)
    {
        parent::__construct($name, $lastname, $address, $email, $phone, $card);
        $this->setPassword($password);
        $this->setDiscount($discount);
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     */
    public function setDiscount($discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
