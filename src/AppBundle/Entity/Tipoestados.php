<?php

namespace AppBundle\Entity;

/**
 * Tipoestados
 */
class Tipoestados
{
    /**
     * @var string
     */
    private $ntipoestado;

    /**
     * @var string
     */
    private $cesta;

    /**
     * @var integer
     */
    private $ctipoestado;


    /**
     * Set ntipoestado
     *
     * @param string $ntipoestado
     *
     * @return Tipoestados
     */
    public function setNtipoestado($ntipoestado)
    {
        $this->ntipoestado = $ntipoestado;

        return $this;
    }

    /**
     * Get ntipoestado
     *
     * @return string
     */
    public function getNtipoestado()
    {
        return $this->ntipoestado;
    }

    /**
     * Set cesta
     *
     * @param string $cesta
     *
     * @return Tipoestados
     */
    public function setCesta($cesta)
    {
        $this->cesta = $cesta;

        return $this;
    }

    /**
     * Get cesta
     *
     * @return string
     */
    public function getCesta()
    {
        return $this->cesta;
    }

    /**
     * Get ctipoestado
     *
     * @return integer
     */
    public function getCtipoestado()
    {
        return $this->ctipoestado;
    }
}

