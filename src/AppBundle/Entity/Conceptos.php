<?php

namespace AppBundle\Entity;

/**
 * Conceptos
 */
class Conceptos
{
    /**
     * @var string
     */
    private $nconcep;

    /**
     * @var string
     */
    private $vconsta;

    /**
     * @var string
     */
    private $activo;

    /**
     * @var integer
     */
    private $repeti;

    /**
     * @var string
     */
    private $mesinit;

    /**
     * @var string
     */
    private $timovi;

    /**
     * @var string
     */
    private $cconcep;


    /**
     * Set nconcep
     *
     * @param string $nconcep
     *
     * @return Conceptos
     */
    public function setNconcep($nconcep)
    {
        $this->nconcep = $nconcep;

        return $this;
    }

    /**
     * Get nconcep
     *
     * @return string
     */
    public function getNconcep()
    {
        return $this->nconcep;
    }

    /**
     * Set vconsta
     *
     * @param string $vconsta
     *
     * @return Conceptos
     */
    public function setVconsta($vconsta)
    {
        $this->vconsta = $vconsta;

        return $this;
    }

    /**
     * Get vconsta
     *
     * @return string
     */
    public function getVconsta()
    {
        return $this->vconsta;
    }

    /**
     * Set activo
     *
     * @param string $activo
     *
     * @return Conceptos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return string
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set repeti
     *
     * @param integer $repeti
     *
     * @return Conceptos
     */
    public function setRepeti($repeti)
    {
        $this->repeti = $repeti;

        return $this;
    }

    /**
     * Get repeti
     *
     * @return integer
     */
    public function getRepeti()
    {
        return $this->repeti;
    }

    /**
     * Set mesinit
     *
     * @param string $mesinit
     *
     * @return Conceptos
     */
    public function setMesinit($mesinit)
    {
        $this->mesinit = $mesinit;

        return $this;
    }

    /**
     * Get mesinit
     *
     * @return string
     */
    public function getMesinit()
    {
        return $this->mesinit;
    }

    /**
     * Set timovi
     *
     * @param string $timovi
     *
     * @return Conceptos
     */
    public function setTimovi($timovi)
    {
        $this->timovi = $timovi;

        return $this;
    }

    /**
     * Get timovi
     *
     * @return string
     */
    public function getTimovi()
    {
        return $this->timovi;
    }

    /**
     * Get cconcep
     *
     * @return string
     */
    public function getCconcep()
    {
        return $this->cconcep;
    }
}

