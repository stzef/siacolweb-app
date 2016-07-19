<?php

namespace AppBundle\Entity;

/**
 * Tilogros
 */
class Tilogros
{
    /**
     * @var string
     */
    private $ntilogro;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var string
     */
    private $valorable;

    /**
     * @var string
     */
    private $ctilogro;


    /**
     * Set ntilogro
     *
     * @param string $ntilogro
     *
     * @return Tilogros
     */
    public function setNtilogro($ntilogro)
    {
        $this->ntilogro = $ntilogro;

        return $this;
    }

    /**
     * Get ntilogro
     *
     * @return string
     */
    public function getNtilogro()
    {
        return $this->ntilogro;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Tilogros
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set valorable
     *
     * @param string $valorable
     *
     * @return Tilogros
     */
    public function setValorable($valorable)
    {
        $this->valorable = $valorable;

        return $this;
    }

    /**
     * Get valorable
     *
     * @return string
     */
    public function getValorable()
    {
        return $this->valorable;
    }

    /**
     * Get ctilogro
     *
     * @return string
     */
    public function getCtilogro()
    {
        return $this->ctilogro;
    }
}

