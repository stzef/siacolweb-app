<?php

namespace AppBundle\Entity;

/**
 * Departamentos
 */
class Departamentos
{
    /**
     * @var string
     */
    private $deta;

    /**
     * @var string
     */
    private $cdepto;


    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Departamentos
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
     * Get cdepto
     *
     * @return string
     */
    public function getCdepto()
    {
        return $this->cdepto;
    }
}

