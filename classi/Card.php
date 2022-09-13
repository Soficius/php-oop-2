<?php

class Card
{
  private $number;
  private $CVC;
  private $exDate;
  private $payCircuit;
  private $balance;

  public function __construct($number, $CVC, $exDate, $payCircuit, $balance)
  {
    $this->setNumber($number);
    $this->setCVC($CVC);
    $this->setExDate($exDate);
    $this->setPayCircuit($payCircuit);
    $this->setBalance($balance);
  }

  /**
   * Get the value of number
   */
  public function getNumber()
  {
    return $this->number;
  }

  /**
   * Set the value of number
   */
  public function setNumber($number): self
  {
    $this->number = $number;

    return $this;
  }

  /**
   * Get the value of CVC
   */
  public function getCVC()
  {
    return $this->CVC;
  }

  /**
   * Set the value of CVC
   */
  public function setCVC($CVC): self
  {
    $this->CVC = $CVC;

    return $this;
  }

  /**
   * Get the value of exDate
   */
  public function getExDate()
  {
    return $this->exDate;
  }

  /**
   * Set the value of exDate
   */
  public function setExDate($exDate): self
  {
    $this->exDate = $exDate;

    return $this;
  }

  /**
   * Get the value of payCircuit
   */
  public function getPayCircuit()
  {
    return $this->payCircuit;
  }

  /**
   * Set the value of payCircuit
   */
  public function setPayCircuit($payCircuit): self
  {
    $this->payCircuit = $payCircuit;

    return $this;
  }

  /**
   * Get the value of balance
   */
  public function getBalance()
  {
    return $this->balance;
  }

  /**
   * Set the value of balance
   */
  public function setBalance($balance): self
  {
    $this->balance = $balance;

    return $this;
  }
}
