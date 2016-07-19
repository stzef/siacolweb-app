<?php

namespace AppBundle\Entity;

/**
 * Retiros
 */
class Retiros
{
    /**
     * @var string
     */
    private $nretiro;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $cretiro;


    /**
     * Set nretiro
     *
     * @param string $nretiro
     *
     * @return Retiros
     */
    public function setNretiro($nretiro)
    {
        $this->nretiro = $nretiro;

        return $this;
    }

    /**
     * Get nretiro
     *
     * @return string
     */
    public function getNretiro()
    {
        return $this->nretiro;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Retiros
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Get cretiro
     *
     * @return integer
     */
    public function getCretiro()
    {
        return $this->cretiro;
    }
}

