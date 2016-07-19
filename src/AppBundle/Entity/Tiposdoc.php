<?php

namespace AppBundle\Entity;

/**
 * Tiposdoc
 */
class Tiposdoc
{
    /**
     * @var string
     */
    private $detalle;

    /**
     * @var integer
     */
    private $ctipo;


    /**
     * Set detalle
     *
     * @param string $detalle
     *
     * @return Tiposdoc
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Get ctipo
     *
     * @return integer
     */
    public function getCtipo()
    {
        return $this->ctipo;
    }
}

