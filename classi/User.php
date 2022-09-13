<?php
class User
{
    protected $name;
    protected $lastname;
    protected $address;
    protected $email;
    protected $phone;
    protected $card;
    protected $cart;

    public function __construct($name, $lastname, $address, $email, $phone, $card)
    {
        $this->setName($name);
        $this->setLastname($lastname);
        $this->setAddress($address);
        $this->setEmail($email);
        $this->setPhone($phone);
        $this->setCard($card);
        $this->setCart([]);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     */
    public function setCart($cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     */
    public function setCard($card): self
    {
        $this->card = $card;

        return $this;
    }
}
