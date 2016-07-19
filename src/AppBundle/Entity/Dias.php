<?php

namespace AppBundle\Entity;

/**
 * Dias
 */
class Dias
{
    /**
     * @var string
     */
    private $ndia;

    /**
     * @var string
     */
    private $cdia;


    /**
     * Set ndia
     *
     * @param string $ndia
     *
     * @return Dias
     */
    public function setNdia($ndia)
    {
        $this->ndia = $ndia;

        return $this;
    }

    /**
     * Get ndia
     *
     * @return string
     */
    public function getNdia()
    {
        return $this->ndia;
    }

    /**
     * Get cdia
     *
     * @return string
     */
    public function getCdia()
    {
        return $this->cdia;
    }
}

