<?php

namespace AppBundle\Entity;

/**
 * Meses
 */
class Meses
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $finicial;

    /**
     * @var \DateTime
     */
    private $ffinal;

    /**
     * @var string
     */
    private $nombrecorto;

    /**
     * @var integer
     */
    private $idMes;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Meses
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set finicial
     *
     * @param \DateTime $finicial
     *
     * @return Meses
     */
    public function setFinicial($finicial)
    {
        $this->finicial = $finicial;

        return $this;
    }

    /**
     * Get finicial
     *
     * @return \DateTime
     */
    public function getFinicial()
    {
        return $this->finicial;
    }

    /**
     * Set ffinal
     *
     * @param \DateTime $ffinal
     *
     * @return Meses
     */
    public function setFfinal($ffinal)
    {
        $this->ffinal = $ffinal;

        return $this;
    }

    /**
     * Get ffinal
     *
     * @return \DateTime
     */
    public function getFfinal()
    {
        return $this->ffinal;
    }

    /**
     * Set nombrecorto
     *
     * @param string $nombrecorto
     *
     * @return Meses
     */
    public function setNombrecorto($nombrecorto)
    {
        $this->nombrecorto = $nombrecorto;

        return $this;
    }

    /**
     * Get nombrecorto
     *
     * @return string
     */
    public function getNombrecorto()
    {
        return $this->nombrecorto;
    }

    /**
     * Get idMes
     *
     * @return integer
     */
    public function getIdMes()
    {
        return $this->idMes;
    }
}

