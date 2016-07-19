<?php

namespace AppBundle\Entity;

/**
 * Propu
 */
class Propu
{
    /**
     * @var string
     */
    private $cvota;

    /**
     * @var string
     */
    private $npropu;

    /**
     * @var string
     */
    private $fotopropu;

    /**
     * @var string
     */
    private $nupropu;

    /**
     * @var string
     */
    private $nusufra;

    /**
     * @var string
     */
    private $nuelimi;

    /**
     * @var string
     */
    private $eslogan;

    /**
     * @var string
     */
    private $cpropu;


    /**
     * Set cvota
     *
     * @param string $cvota
     *
     * @return Propu
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
     * Set npropu
     *
     * @param string $npropu
     *
     * @return Propu
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
     * Set fotopropu
     *
     * @param string $fotopropu
     *
     * @return Propu
     */
    public function setFotopropu($fotopropu)
    {
        $this->fotopropu = $fotopropu;

        return $this;
    }

    /**
     * Get fotopropu
     *
     * @return string
     */
    public function getFotopropu()
    {
        return $this->fotopropu;
    }

    /**
     * Set nupropu
     *
     * @param string $nupropu
     *
     * @return Propu
     */
    public function setNupropu($nupropu)
    {
        $this->nupropu = $nupropu;

        return $this;
    }

    /**
     * Get nupropu
     *
     * @return string
     */
    public function getNupropu()
    {
        return $this->nupropu;
    }

    /**
     * Set nusufra
     *
     * @param string $nusufra
     *
     * @return Propu
     */
    public function setNusufra($nusufra)
    {
        $this->nusufra = $nusufra;

        return $this;
    }

    /**
     * Get nusufra
     *
     * @return string
     */
    public function getNusufra()
    {
        return $this->nusufra;
    }

    /**
     * Set nuelimi
     *
     * @param string $nuelimi
     *
     * @return Propu
     */
    public function setNuelimi($nuelimi)
    {
        $this->nuelimi = $nuelimi;

        return $this;
    }

    /**
     * Get nuelimi
     *
     * @return string
     */
    public function getNuelimi()
    {
        return $this->nuelimi;
    }

    /**
     * Set eslogan
     *
     * @param string $eslogan
     *
     * @return Propu
     */
    public function setEslogan($eslogan)
    {
        $this->eslogan = $eslogan;

        return $this;
    }

    /**
     * Get eslogan
     *
     * @return string
     */
    public function getEslogan()
    {
        return $this->eslogan;
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
}

