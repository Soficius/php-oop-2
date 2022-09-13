<?php
class Product
{
    protected $name;
    protected $prezzo;
    protected $marca;
    protected $descrizione;

    public function __construct($name, $prezzo, $marca, $descrizione)
    {
        $this->setName($name);
        $this->setPrezzo($prezzo);
        $this->setMarca($marca);
        $this->setDescrizione($descrizione);
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
     * Get the value of prezzo
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     */
    public function setPrezzo($prezzo): self
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of descrizione
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set the value of descrizione
     */
    public function setDescrizione($descrizione): self
    {
        $this->descrizione = $descrizione;

        return $this;
    }
}
