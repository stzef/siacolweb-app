<?php

namespace AppBundle\Entity;

/**
 * Sufragios
 */
class Sufragios
{
    /**
     * @var string
     */
    private $cvota;

    /**
     * @var string
     */
    private $cpropu;

    /**
     * @var string
     */
    private $npropu;

    /**
     * @var \DateTime
     */
    private $fhsufra;

    /**
     * @var integer
     */
    private $cusu;

    /**
     * @var boolean
     */
    private $ifacti;

    /**
     * @var string
     */
    private $csufra;


    /**
     * Set cvota
     *
     * @param string $cvota
     *
     * @return Sufragios
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
     * Set cpropu
     *
     * @param string $cpropu
     *
     * @return Sufragios
     */
    public function setCpropu($cpropu)
    {
        $this->cpropu = $cpropu;

        return $this;
    }

    /**
     * Get cpropu
     *
     * @return string
     */
    public function getCpropu()
    {
        return $this->cpropu;
    }

    /**
     * Set npropu
     *
     * @param string $npropu
     *
     * @return Sufragios
     */
    public function setNpropu($npropu)
    {
        $this->npropu = $npropu;

        return $this;
    }

    /**
     * Get npropu
     *
     * @return string
     */
    public function getNpropu()
    {
        return $this->npropu;
    }

    /**
     * Set fhsufra
     *
     * @param \DateTime $fhsufra
     *
     * @return Sufragios
     */
    public function setFhsufra($fhsufra)
    {
        $this->fhsufra = $fhsufra;

        return $this;
    }

    /**
     * Get fhsufra
     *
     * @return \DateTime
     */
    public function getFhsufra()
    {
        return $this->fhsufra;
    }

    /**
     * Set cusu
     *
     * @param integer $cusu
     *
     * @return Sufragios
     */
    public function setCusu($cusu)
    {
        $this->cusu = $cusu;

        return $this;
    }

    /**
     * Get cusu
     *
     * @return integer
     */
    public function getCusu()
    {
        return $this->cusu;
    }

    /**
     * Set ifacti
     *
     * @param boolean $ifacti
     *
     * @return Sufragios
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
     * Get csufra
     *
     * @return string
     */
    public function getCsufra()
    {
        return $this->csufra;
    }
}

