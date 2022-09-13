<?php
class Order
{
    protected $user;
    protected $product;
    protected $shipmentDate;
    protected $tracking;

    public function __construct($user, $product, $shipmentDate, $tracking)
    {
        $this->setUser($user);
        $this->setProduct($product);
        $this->setShipmentDate($shipmentDate);
        $this->setTracking($tracking);
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     */
    public function setProduct($product): self
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of shipmentDate
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Set the value of shipmentDate
     */
    public function setShipmentDate($shipmentDate): self
    {
        $this->shipmentDate = $shipmentDate;

        return $this;
    }

    /**
     * Get the value of tracking
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set the value of tracking
     */
    public function setTracking($tracking): self
    {
        $this->tracking = $tracking;

        return $this;
    }
}
