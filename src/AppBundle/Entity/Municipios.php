<?php

namespace AppBundle\Entity;

/**
 * Municipios
 */
class Municipios
{
    /**
     * @var string
     */
    private $cdepto;

    /**
     * @var string
     */
    private $deta;

    /**
     * @var string
     */
    private $cmuni;


    /**
     * Set cdepto
     *
     * @param string $cdepto
     *
     * @return Municipios
     */
    public function setCdepto($cdepto)
    {
        $this->cdepto = $cdepto;

        return $this;
    }

    /**
     * Get cdepto
     *
     * @return string
     */
    public function getCdepto()
    {
        return $this->cdepto;
    }

    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Municipios
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
     * Get cmuni
     *
     * @return string
     */
    public function getCmuni()
    {
        return $this->cmuni;
    }
}

