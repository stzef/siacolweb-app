<?php

namespace AppBundle\Entity;

/**
 * Parentescos
 */
class Parentescos
{
    /**
     * @var string
     */
    private $nparen;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $cparen;


    /**
     * Set nparen
     *
     * @param string $nparen
     *
     * @return Parentescos
     */
    public function setNparen($nparen)
    {
        $this->nparen = $nparen;

        return $this;
    }

    /**
     * Get nparen
     *
     * @return string
     */
    public function getNparen()
    {
        return $this->nparen;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Parentescos
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
     * Get cparen
     *
     * @return integer
     */
    public function getCparen()
    {
        return $this->cparen;
    }
}

