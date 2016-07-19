<?php

namespace AppBundle\Entity;

/**
 * Auditoria
 */
class Auditoria
{
    /**
     * @var integer
     */
    private $idusu;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $mac;

    /**
     * @var \DateTime
     */
    private $fechahora;

    /**
     * @var string
     */
    private $tabla;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $accion;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idusu
     *
     * @param integer $idusu
     *
     * @return Auditoria
     */
    public function setIdusu($idusu)
    {
        $this->idusu = $idusu;

        return $this;
    }

    /**
     * Get idusu
     *
     * @return integer
     */
    public function getIdusu()
    {
        return $this->idusu;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Auditoria
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Auditoria
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set mac
     *
     * @param string $mac
     *
     * @return Auditoria
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set fechahora
     *
     * @param \DateTime $fechahora
     *
     * @return Auditoria
     */
    public function setFechahora($fechahora)
    {
        $this->fechahora = $fechahora;

        return $this;
    }

    /**
     * Get fechahora
     *
     * @return \DateTime
     */
    public function getFechahora()
    {
        return $this->fechahora;
    }

    /**
     * Set tabla
     *
     * @param string $tabla
     *
     * @return Auditoria
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get tabla
     *
     * @return string
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Auditoria
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
     * Set accion
     *
     * @param string $accion
     *
     * @return Auditoria
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

