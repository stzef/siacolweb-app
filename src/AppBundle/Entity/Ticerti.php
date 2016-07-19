<?php

namespace AppBundle\Entity;

/**
 * Ticerti
 */
class Ticerti
{
    /**
     * @var string
     */
    private $nticerti;

    /**
     * @var integer
     */
    private $cticerti;


    /**
     * Set nticerti
     *
     * @param string $nticerti
     *
     * @return Ticerti
     */
    public function setNticerti($nticerti)
    {
        $this->nticerti = $nticerti;

        return $this;
    }

    /**
     * Get nticerti
     *
     * @return string
     */
    public function getNticerti()
    {
        return $this->nticerti;
    }

    /**
     * Get cticerti
     *
     * @return integer
     */
    public function getCticerti()
    {
        return $this->cticerti;
    }
}

