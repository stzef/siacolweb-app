<?php

namespace AppBundle\Entity;

/**
 * Logros
 */
class Logros
{
    /**
     * @var string
     */
    private $ctilogro;

    /**
     * @var string
     */
    private $cgrado;

    /**
     * @var string
     */
    private $cmate;

    /**
     * @var string
     */
    private $ano;

    /**
     * @var string
     */
    private $peri;

    /**
     * @var string
     */
    private $deta;

    /**
     * @var string
     */
    private $detaalt;

    /**
     * @var string
     */
    private $cvalo;

    /**
     * @var boolean
     */
    private $general;

    /**
     * @var integer
     */
    private $peso;

    /**
     * @var string
     */
    private $clogro;


    /**
     * Set ctilogro
     *
     * @param string $ctilogro
     *
     * @return Logros
     */
    public function setCtilogro($ctilogro)
    {
        $this->ctilogro = $ctilogro;

        return $this;
    }

    /**
     * Get ctilogro
     *
     * @return string
     */
    public function getCtilogro()
    {
        return $this->ctilogro;
    }

    /**
     * Set cgrado
     *
     * @param string $cgrado
     *
     * @return Logros
     */
    public function setCgrado($cgrado)
    {
        $this->cgrado = $cgrado;

        return $this;
    }

    /**
     * Get cgrado
     *
     * @return string
     */
    public function getCgrado()
    {
        return $this->cgrado;
    }

    /**
     * Set cmate
     *
     * @param string $cmate
     *
     * @return Logros
     */
    public function setCmate($cmate)
    {
        $this->cmate = $cmate;

        return $this;
    }

    /**
     * Get cmate
     *
     * @return string
     */
    public function getCmate()
    {
        return $this->cmate;
    }

    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return Logros
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return string
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set peri
     *
     * @param string $peri
     *
     * @return Logros
     */
    public function setPeri($peri)
    {
        $this->peri = $peri;

        return $this;
    }

    /**
     * Get peri
     *
     * @return string
     */
    public function getPeri()
    {
        return $this->peri;
    }

    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Logros
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
     * Set detaalt
     *
     * @param string $detaalt
     *
     * @return Logros
     */
    public function setDetaalt($detaalt)
    {
        $this->detaalt = $detaalt;

        return $this;
    }

    /**
     * Get detaalt
     *
     * @return string
     */
    public function getDetaalt()
    {
        return $this->detaalt;
    }

    /**
     * Set cvalo
     *
     * @param string $cvalo
     *
     * @return Logros
     */
    public function setCvalo($cvalo)
    {
        $this->cvalo = $cvalo;

        return $this;
    }

    /**
     * Get cvalo
     *
     * @return string
     */
    public function getCvalo()
    {
        return $this->cvalo;
    }

    /**
     * Set general
     *
     * @param boolean $general
     *
     * @return Logros
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Get general
     *
     * @return boolean
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     *
     * @return Logros
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Get clogro
     *
     * @return string
     */
    public function getClogro()
    {
        return $this->clogro;
    }
}

