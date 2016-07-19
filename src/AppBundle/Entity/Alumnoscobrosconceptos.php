<?php

namespace AppBundle\Entity;

/**
 * Alumnoscobrosconceptos
 */
class Alumnoscobrosconceptos
{
    /**
     * @var string
     */
    private $calum;

    /**
     * @var string
     */
    private $cconcep;

    /**
     * @var boolean
     */
    private $estado = '1';

    /**
     * @var integer
     */
    private $item;


    /**
     * Set calum
     *
     * @param string $calum
     *
     * @return Alumnoscobrosconceptos
     */
    public function setCalum($calum)
    {
        $this->calum = $calum;

        return $this;
    }

    /**
     * Get calum
     *
     * @return string
     */
    public function getCalum()
    {
        return $this->calum;
    }

    /**
     * Set cconcep
     *
     * @param string $cconcep
     *
     * @return Alumnoscobrosconceptos
     */
    public function setCconcep($cconcep)
    {
        $this->cconcep = $cconcep;

        return $this;
    }

    /**
     * Get cconcep
     *
     * @return string
     */
    public function getCconcep()
    {
        return $this->cconcep;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Alumnoscobrosconceptos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }
}

