<?php

namespace AppBundle\Entity;

/**
 * Cambiosestadomovi
 */
class Cambiosestadomovi
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $cmovi;

    /**
     * @var string
     */
    private $oldestado;

    /**
     * @var string
     */
    private $newestado;

    /**
     * @var \DateTime
     */
    private $fcambio = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $ccambesta;


    /**
     * Set user
     *
     * @param string $user
     *
     * @return Cambiosestadomovi
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set cmovi
     *
     * @param string $cmovi
     *
     * @return Cambiosestadomovi
     */
    public function setCmovi($cmovi)
    {
        $this->cmovi = $cmovi;

        return $this;
    }

    /**
     * Get cmovi
     *
     * @return string
     */
    public function getCmovi()
    {
        return $this->cmovi;
    }

    /**
     * Set oldestado
     *
     * @param string $oldestado
     *
     * @return Cambiosestadomovi
     */
    public function setOldestado($oldestado)
    {
        $this->oldestado = $oldestado;

        return $this;
    }

    /**
     * Get oldestado
     *
     * @return string
     */
    public function getOldestado()
    {
        return $this->oldestado;
    }

    /**
     * Set newestado
     *
     * @param string $newestado
     *
     * @return Cambiosestadomovi
     */
    public function setNewestado($newestado)
    {
        $this->newestado = $newestado;

        return $this;
    }

    /**
     * Get newestado
     *
     * @return string
     */
    public function getNewestado()
    {
        return $this->newestado;
    }

    /**
     * Set fcambio
     *
     * @param \DateTime $fcambio
     *
     * @return Cambiosestadomovi
     */
    public function setFcambio($fcambio)
    {
        $this->fcambio = $fcambio;

        return $this;
    }

    /**
     * Get fcambio
     *
     * @return \DateTime
     */
    public function getFcambio()
    {
        return $this->fcambio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Cambiosestadomovi
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get ccambesta
     *
     * @return integer
     */
    public function getCcambesta()
    {
        return $this->ccambesta;
    }
}

