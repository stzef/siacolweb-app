<?php

namespace AppBundle\Entity;

/**
 * Sedes
 */
class Sedes
{
    /**
     * @var string
     */
    private $nsede;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $coddane;

    /**
     * @var string
     */
    private $coddaneold;

    /**
     * @var string
     */
    private $consesede;

    /**
     * @var string
     */
    private $csede;


    /**
     * Set nsede
     *
     * @param string $nsede
     *
     * @return Sedes
     */
    public function setNsede($nsede)
    {
        $this->nsede = $nsede;

        return $this;
    }

    /**
     * Get nsede
     *
     * @return string
     */
    public function getNsede()
    {
        return $this->nsede;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Sedes
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
     * Set coddane
     *
     * @param string $coddane
     *
     * @return Sedes
     */
    public function setCoddane($coddane)
    {
        $this->coddane = $coddane;

        return $this;
    }

    /**
     * Get coddane
     *
     * @return string
     */
    public function getCoddane()
    {
        return $this->coddane;
    }

    /**
     * Set coddaneold
     *
     * @param string $coddaneold
     *
     * @return Sedes
     */
    public function setCoddaneold($coddaneold)
    {
        $this->coddaneold = $coddaneold;

        return $this;
    }

    /**
     * Get coddaneold
     *
     * @return string
     */
    public function getCoddaneold()
    {
        return $this->coddaneold;
    }

    /**
     * Set consesede
     *
     * @param string $consesede
     *
     * @return Sedes
     */
    public function setConsesede($consesede)
    {
        $this->consesede = $consesede;

        return $this;
    }

    /**
     * Get consesede
     *
     * @return string
     */
    public function getConsesede()
    {
        return $this->consesede;
    }

    /**
     * Get csede
     *
     * @return string
     */
    public function getCsede()
    {
        return $this->csede;
    }
}

