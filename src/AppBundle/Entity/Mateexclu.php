<?php

namespace AppBundle\Entity;

/**
 * Mateexclu
 */
class Mateexclu
{
    /**
     * @var string
     */
    private $ano;

    /**
     * @var string
     */
    private $calum;

    /**
     * @var string
     */
    private $cmate;

    /**
     * @var string
     */
    private $cperi;


    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return Mateexclu
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
     * Set calum
     *
     * @param string $calum
     *
     * @return Mateexclu
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
     * Set cmate
     *
     * @param string $cmate
     *
     * @return Mateexclu
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
     * Set cperi
     *
     * @param string $cperi
     *
     * @return Mateexclu
     */
    public function setCperi($cperi)
    {
        $this->cperi = $cperi;

        return $this;
    }

    /**
     * Get cperi
     *
     * @return string
     */
    public function getCperi()
    {
        return $this->cperi;
    }
}

