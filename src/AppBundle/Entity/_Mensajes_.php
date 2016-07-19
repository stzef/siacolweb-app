<?php

namespace AppBundle\Entity;

/**
 * Mensajes
 * @ORM\Entity
 */
class Mensajes
{
    /** 
    * @var integer
    * @ORM\Column(name="emisor", type="string", length=20, nullable=true)
    */
    private $emisor;

    /**
     * @var integer
     * @ORM\Column(name="receptor", type="integer", length=12, nullable=true)
     */
    private $receptor;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     * @ORM\Column(name="mensaje", type="string", length=300, nullable=true)
     */
    private $mensaje;

    /**
     * @var boolean
     */
    private $ifvisto;

    /**
     * @var integer
     * @ORM\Column(name="cmensaje", type="integer", length=10, nullable=true)
     */
    private $cmensaje;


    /**
     * Set emisor
     *
     * @param integer $emisor
     *
     * @return Mensajes
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;

        return $this;
    }

    /**
     * Get emisor
     *
     * @return integer
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set receptor
     *
     * @param integer $receptor
     *
     * @return Mensajes
     */
    public function setReceptor($receptor)
    {
        $this->receptor = $receptor;

        return $this;
    }

    /**
     * Get receptor
     *
     * @return integer
     */
    public function getReceptor()
    {
        return $this->receptor;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Mensajes
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Mensajes
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set ifvisto
     *
     * @param boolean $ifvisto
     *
     * @return Mensajes
     */
    public function setIfvisto($ifvisto)
    {
        $this->ifvisto = $ifvisto;

        return $this;
    }

    /**
     * Get ifvisto
     *
     * @return boolean
     */
    public function getIfvisto()
    {
        return $this->ifvisto;
    }

    /**
     * Get cmensaje
     *
     * @return integer
     */
    public function getCmensaje()
    {
        return $this->cmensaje;
    }
}
