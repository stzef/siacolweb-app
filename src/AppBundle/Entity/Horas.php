<?php

namespace AppBundle\Entity;

/**
 * Horas
 */
class Horas
{
    /**
     * @var string
     */
    private $nhora;

    /**
     * @var \DateTime
     */
    private $hini;

    /**
     * @var \DateTime
     */
    private $hfin;

    /**
     * @var string
     */
    private $chora;


    /**
     * Set nhora
     *
     * @param string $nhora
     *
     * @return Horas
     */
    public function setNhora($nhora)
    {
        $this->nhora = $nhora;

        return $this;
    }

    /**
     * Get nhora
     *
     * @return string
     */
    public function getNhora()
    {
        return $this->nhora;
    }

    /**
     * Set hini
     *
     * @param \DateTime $hini
     *
     * @return Horas
     */
    public function setHini($hini)
    {
        $this->hini = $hini;

        return $this;
    }

    /**
     * Get hini
     *
     * @return \DateTime
     */
    public function getHini()
    {
        return $this->hini;
    }

    /**
     * Set hfin
     *
     * @param \DateTime $hfin
     *
     * @return Horas
     */
    public function setHfin($hfin)
    {
        $this->hfin = $hfin;

        return $this;
    }

    /**
     * Get hfin
     *
     * @return \DateTime
     */
    public function getHfin()
    {
        return $this->hfin;
    }

    /**
     * Get chora
     *
     * @return string
     */
    public function getChora()
    {
        return $this->chora;
    }
}

