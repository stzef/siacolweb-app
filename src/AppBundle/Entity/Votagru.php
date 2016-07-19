<?php

namespace AppBundle\Entity;

/**
 * Votagru
 */
class Votagru
{
    /**
     * @var string
     */
    private $cvota;

    /**
     * @var string
     */
    private $cgrupo;

    /**
     * @var integer
     */
    private $cvotagru;


    /**
     * Set cvota
     *
     * @param string $cvota
     *
     * @return Votagru
     */
    public function setCvota($cvota)
    {
        $this->cvota = $cvota;

        return $this;
    }

    /**
     * Get cvota
     *
     * @return string
     */
    public function getCvota()
    {
        return $this->cvota;
    }

    /**
     * Set cgrupo
     *
     * @param string $cgrupo
     *
     * @return Votagru
     */
    public function setCgrupo($cgrupo)
    {
        $this->cgrupo = $cgrupo;

        return $this;
    }

    /**
     * Get cgrupo
     *
     * @return string
     */
    public function getCgrupo()
    {
        return $this->cgrupo;
    }

    /**
     * Get cvotagru
     *
     * @return integer
     */
    public function getCvotagru()
    {
        return $this->cvotagru;
    }
}

