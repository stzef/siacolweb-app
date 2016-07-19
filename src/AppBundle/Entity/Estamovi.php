<?php

namespace AppBundle\Entity;

/**
 * Estamovi
 */
class Estamovi
{
    /**
     * @var string
     */
    private $nestamovi;

    /**
     * @var string
     */
    private $cestamovi;


    /**
     * Set nestamovi
     *
     * @param string $nestamovi
     *
     * @return Estamovi
     */
    public function setNestamovi($nestamovi)
    {
        $this->nestamovi = $nestamovi;

        return $this;
    }

    /**
     * Get nestamovi
     *
     * @return string
     */
    public function getNestamovi()
    {
        return $this->nestamovi;
    }

    /**
     * Get cestamovi
     *
     * @return string
     */
    public function getCestamovi()
    {
        return $this->cestamovi;
    }
}

