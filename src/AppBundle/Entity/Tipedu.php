<?php

namespace AppBundle\Entity;

/**
 * Tipedu
 */
class Tipedu
{
    /**
     * @var string
     */
    private $ntipedu;

    /**
     * @var string
     */
    private $ihsest;

    /**
     * @var string
     */
    private $ctipedu;


    /**
     * Set ntipedu
     *
     * @param string $ntipedu
     *
     * @return Tipedu
     */
    public function setNtipedu($ntipedu)
    {
        $this->ntipedu = $ntipedu;

        return $this;
    }

    /**
     * Get ntipedu
     *
     * @return string
     */
    public function getNtipedu()
    {
        return $this->ntipedu;
    }

    /**
     * Set ihsest
     *
     * @param string $ihsest
     *
     * @return Tipedu
     */
    public function setIhsest($ihsest)
    {
        $this->ihsest = $ihsest;

        return $this;
    }

    /**
     * Get ihsest
     *
     * @return string
     */
    public function getIhsest()
    {
        return $this->ihsest;
    }

    /**
     * Get ctipedu
     *
     * @return string
     */
    public function getCtipedu()
    {
        return $this->ctipedu;
    }
}

