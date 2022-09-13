<?php

class Card
{
  private $number;
  private $CVC;
  private $ex_sate;
  private $pay_circuit;
  private $balance;

  public function __construct($number, $CVC, $ex_sate, $pay_circuit, $balance)
  {
    $this->setNumber($number);
    $this->setNumber($CVC);
    $this->setNumber($ex_sate);
    $this->setNumber($pay_circuit);
    $this->setNumber($$balance);
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
   * Get the value of ex_sate
   */
  public function getExSate()
  {
    return $this->ex_sate;
  }

  /**
   * Set the value of ex_sate
   */
  public function setExSate($ex_sate): self
  {
    $this->ex_sate = $ex_sate;

    return $this;
  }

  /**
   * Get the value of pay_circuit
   */
  public function getPayCircuit()
  {
    return $this->pay_circuit;
  }

  /**
   * Set the value of pay_circuit
   */
  public function setPayCircuit($pay_circuit): self
  {
    $this->pay_circuit = $pay_circuit;

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
