<?php

class Shop
{
    protected $name;
    protected $pIva;
    protected $products;
    protected $users;
    protected $orders;

    public function __construct($name, $pIva, $products, $users, $orders)
    {
        $this->setName($name);
        $this->setName($pIva);
        $this->setName($products);
        $this->setName($users);
        $this->setName($orders);
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
     * Get the value of pIva
     */
    public function getPIva()
    {
        return $this->pIva;
    }

    /**
     * Set the value of pIva
     */
    public function setPIva($pIva): self
    {
        $this->pIva = $pIva;

        return $this;
    }

    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     */
    public function setProducts($products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set the value of users
     */
    public function setUsers($users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get the value of orders
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set the value of orders
     */
    public function setOrders($orders): self
    {
        $this->orders = $orders;

        return $this;
    }
}
