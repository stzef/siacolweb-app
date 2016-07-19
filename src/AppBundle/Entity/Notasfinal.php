<?php

namespace AppBundle\Entity;

/**
 * Notasfinal
 */
class Notasfinal
{
    /**
     * @var string
     */
    private $cestafin;

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
    private $calum;


    /**
     * Set cestafin
     *
     * @param string $cestafin
     *
     * @return Notasfinal
     */
    public function setCestafin($cestafin)
    {
        $this->cestafin = $cestafin;

        return $this;
    }

    /**
     * Get cestafin
     *
     * @return string
     */
    public function getCestafin()
    {
        return $this->cestafin;
    }

    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return Notasfinal
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
     * @return Notasfinal
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
     * Set calum
     *
     * @param string $calum
     *
     * @return Notasfinal
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
}

