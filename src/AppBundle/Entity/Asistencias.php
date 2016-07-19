<?php

namespace AppBundle\Entity;

/**
 * Asistencias
 */
class Asistencias
{
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
    private $mes;

    /**
     * @var string
     */
    private $cmate;

    /**
     * @var string
     */
    private $calum;

    /**
     * @var integer
     */
    private $fallas;

    /**
     * @var integer
     */
    private $casis;


    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return Asistencias
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
     * @return Asistencias
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
     * Set mes
     *
     * @param string $mes
     *
     * @return Asistencias
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set cmate
     *
     * @param string $cmate
     *
     * @return Asistencias
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
     * Set calum
     *
     * @param string $calum
     *
     * @return Asistencias
     */
    public function setCalum($calum)
    {
        $this->calum = $calum;

        return $this;
    }

    /**
     * Get calum
     *
     * @return string
     */
    public function getCalum()
    {
        return $this->calum;
    }

    /**
     * Set fallas
     *
     * @param integer $fallas
     *
     * @return Asistencias
     */
    public function setFallas($fallas)
    {
        $this->fallas = $fallas;

        return $this;
    }

    /**
     * Get fallas
     *
     * @return integer
     */
    public function getFallas()
    {
        return $this->fallas;
    }

    /**
     * Get casis
     *
     * @return integer
     */
    public function getCasis()
    {
        return $this->casis;
    }
}

