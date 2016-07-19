<?php

namespace AppBundle\Entity;

/**
 * Bancos
 */
class Bancos
{
    /**
     * @var string
     */
    private $nban;

    /**
     * @var string
     */
    private $activo;

    /**
     * @var string
     */
    private $cban;


    /**
     * Set nban
     *
     * @param string $nban
     *
     * @return Bancos
     */
    public function setNban($nban)
    {
        $this->nban = $nban;

        return $this;
    }

    /**
     * Get nban
     *
     * @return string
     */
    public function getNban()
    {
        return $this->nban;
    }

    /**
     * Set activo
     *
     * @param string $activo
     *
     * @return Bancos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return string
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Get cban
     *
     * @return string
     */
    public function getCban()
    {
        return $this->cban;
    }
}

