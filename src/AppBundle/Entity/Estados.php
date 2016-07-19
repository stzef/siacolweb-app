<?php

namespace AppBundle\Entity;

/**
 * Estados
 */
class Estados
{
    /**
     * @var string
     */
    private $nesta;

    /**
     * @var string
     */
    private $cesta;


    /**
     * Set nesta
     *
     * @param string $nesta
     *
     * @return Estados
     */
    public function setNesta($nesta)
    {
        $this->nesta = $nesta;

        return $this;
    }

    /**
     * Get nesta
     *
     * @return string
     */
    public function getNesta()
    {
        return $this->nesta;
    }

    /**
     * Get cesta
     *
     * @return string
     */
    public function getCesta()
    {
        return $this->cesta;
    }
}

