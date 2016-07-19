<?php

namespace AppBundle\Entity;

/**
 * Estadomatricula
 */
class Estadomatricula
{
    /**
     * @var string
     */
    private $deta;

    /**
     * @var integer
     */
    private $cestamatri;


    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Estadomatricula
     */
    public function setDeta($deta)
    {
        $this->deta = $deta;

        return $this;
    }

    /**
     * Get deta
     *
     * @return string
     */
    public function getDeta()
    {
        return $this->deta;
    }

    /**
     * Get cestamatri
     *
     * @return integer
     */
    public function getCestamatri()
    {
        return $this->cestamatri;
    }
}

