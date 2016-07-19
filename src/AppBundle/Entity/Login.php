<?php

namespace AppBundle\Entity;

/**
 * Login
 */
class Login
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
    private $descripcion;

    /**
     * @var string
     */
    private $mostrar = 'T';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set idusu
     *
     * @param integer $idusu
     *
     * @return Login
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
     * @return Login
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
     * @return Login
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
     * @return Login
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
     * @return Login
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Login
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
     * Set mostrar
     *
     * @param string $mostrar
     *
     * @return Login
     */
    public function setMostrar($mostrar)
    {
        $this->mostrar = $mostrar;

        return $this;
    }

    /**
     * Get mostrar
     *
     * @return string
     */
    public function getMostrar()
    {
        return $this->mostrar;
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

