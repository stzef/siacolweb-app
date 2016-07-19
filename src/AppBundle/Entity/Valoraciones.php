<?php

namespace AppBundle\Entity;

/**
 * Valoraciones
 */
class Valoraciones
{
    /**
     * @var string
     */
    private $nvalo;

    /**
     * @var string
     */
    private $nvaloalt;

    /**
     * @var string
     */
    private $sigla;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var string
     */
    private $rini;

    /**
     * @var string
     */
    private $rfin;

    /**
     * @var string
     */
    private $color = '255';

    /**
     * @var string
     */
    private $cvalo;


    /**
     * Set nvalo
     *
     * @param string $nvalo
     *
     * @return Valoraciones
     */
    public function setNvalo($nvalo)
    {
        $this->nvalo = $nvalo;

        return $this;
    }

    /**
     * Get nvalo
     *
     * @return string
     */
    public function getNvalo()
    {
        return $this->nvalo;
    }

    /**
     * Set nvaloalt
     *
     * @param string $nvaloalt
     *
     * @return Valoraciones
     */
    public function setNvaloalt($nvaloalt)
    {
        $this->nvaloalt = $nvaloalt;

        return $this;
    }

    /**
     * Get nvaloalt
     *
     * @return string
     */
    public function getNvaloalt()
    {
        return $this->nvaloalt;
    }

    /**
     * Set sigla
     *
     * @param string $sigla
     *
     * @return Valoraciones
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Valoraciones
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set rini
     *
     * @param string $rini
     *
     * @return Valoraciones
     */
    public function setRini($rini)
    {
        $this->rini = $rini;

        return $this;
    }

    /**
     * Get rini
     *
     * @return string
     */
    public function getRini()
    {
        return $this->rini;
    }

    /**
     * Set rfin
     *
     * @param string $rfin
     *
     * @return Valoraciones
     */
    public function setRfin($rfin)
    {
        $this->rfin = $rfin;

        return $this;
    }

    /**
     * Get rfin
     *
     * @return string
     */
    public function getRfin()
    {
        return $this->rfin;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Valoraciones
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
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
}

