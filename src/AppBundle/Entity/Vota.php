<?php

namespace AppBundle\Entity;

/**
 * Vota
 */
class Vota
{
    /**
     * @var string
     */
    private $nvota;

    /**
     * @var boolean
     */
    private $ifacti;

    /**
     * @var \DateTime
     */
    private $fini;

    /**
     * @var \DateTime
     */
    private $ffin;

    /**
     * @var string
     */
    private $tiprosu;

    /**
     * @var integer
     */
    private $cvota;


    /**
     * Set nvota
     *
     * @param string $nvota
     *
     * @return Vota
     */
    public function setNvota($nvota)
    {
        $this->nvota = $nvota;

        return $this;
    }

    /**
     * Get nvota
     *
     * @return string
     */
    public function getNvota()
    {
        return $this->nvota;
    }

    /**
     * Set ifacti
     *
     * @param boolean $ifacti
     *
     * @return Vota
     */
    public function setIfacti($ifacti)
    {
        $this->ifacti = $ifacti;

        return $this;
    }

    /**
     * Get ifacti
     *
     * @return boolean
     */
    public function getIfacti()
    {
        return $this->ifacti;
    }

    /**
     * Set fini
     *
     * @param \DateTime $fini
     *
     * @return Vota
     */
    public function setFini($fini)
    {
        $this->fini = $fini;

        return $this;
    }

    /**
     * Get fini
     *
     * @return \DateTime
     */
    public function getFini()
    {
        return $this->fini;
    }

    /**
     * Set ffin
     *
     * @param \DateTime $ffin
     *
     * @return Vota
     */
    public function setFfin($ffin)
    {
        $this->ffin = $ffin;

        return $this;
    }

    /**
     * Get ffin
     *
     * @return \DateTime
     */
    public function getFfin()
    {
        return $this->ffin;
    }

    /**
     * Set tiprosu
     *
     * @param string $tiprosu
     *
     * @return Vota
     */
    public function setTiprosu($tiprosu)
    {
        $this->tiprosu = $tiprosu;

        return $this;
    }

    /**
     * Get tiprosu
     *
     * @return string
     */
    public function getTiprosu()
    {
        return $this->tiprosu;
    }

    /**
     * Get cvota
     *
     * @return integer
     */
    public function getCvota()
    {
        return $this->cvota;
    }
}

