<?php

namespace AppBundle\Entity;

/**
 * Tivalo
 */
class Tivalo
{
    /**
     * @var string
     */
    private $nvalo;

    /**
     * @var string
     */
    private $ctivalo;


    /**
     * Set nvalo
     *
     * @param string $nvalo
     *
     * @return Tivalo
     */
    public function setNvalo($nvalo)
    {
        $this->nvalo = $nvalo;

        return $this;
    }

    /**
     * Get nvalo
     *
     * @return string
     */
    public function getNvalo()
    {
        return $this->nvalo;
    }

    /**
     * Get ctivalo
     *
     * @return string
     */
    public function getCtivalo()
    {
        return $this->ctivalo;
    }
}

