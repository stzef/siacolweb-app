<?php

namespace AppBundle\Entity;

/**
 * Notasestado
 */
class Notasestado
{
    /**
     * @var string
     */
    private $cesta;

    /**
     * @var integer
     */
    private $ano;

    /**
     * @var integer
     */
    private $peri;

    /**
     * @var string
     */
    private $codalum;

    /**
     * @var string
     */
    private $grado;


    /**
     * Set cesta
     *
     * @param string $cesta
     *
     * @return Notasestado
     */
    public function setCesta($cesta)
    {
        $this->cesta = $cesta;

        return $this;
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

    /**
     * Set ano
     *
     * @param integer $ano
     *
     * @return Notasestado
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set peri
     *
     * @param integer $peri
     *
     * @return Notasestado
     */
    public function setPeri($peri)
    {
        $this->peri = $peri;

        return $this;
    }

    /**
     * Get peri
     *
     * @return integer
     */
    public function getPeri()
    {
        return $this->peri;
    }

    /**
     * Set codalum
     *
     * @param string $codalum
     *
     * @return Notasestado
     */
    public function setCodalum($codalum)
    {
        $this->codalum = $codalum;

        return $this;
    }

    /**
     * Get codalum
     *
     * @return string
     */
    public function getCodalum()
    {
        return $this->codalum;
    }

    /**
     * Set grado
     *
     * @param string $grado
     *
     * @return Notasestado
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string
     */
    public function getGrado()
    {
        return $this->grado;
    }
}

