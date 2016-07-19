<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajes
 *
 * @ORM\Table(name="mensajes")
 * @ORM\Entity
 */
class Mensajes
{
    /**
     * @var string
     *
     * @ORM\Column(name="emisor", type="string", length=20, nullable=false)
     */
    private $emisor;

    /**
     * @var integer
     *
     * @ORM\Column(name="receptor", type="integer", nullable=false)
     */
    private $receptor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=300, nullable=false)
     */
    private $mensaje;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ifvisto", type="boolean", nullable=false)
     */
    private $ifvisto;

    /**
     * @var integer
     *
     * @ORM\Column(name="timensaje", type="integer", nullable=true)
     */
    private $timensaje = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="cmensaje", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmensaje;



    /**
     * Set emisor
     *
     * @param string $emisor
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
     * @return string
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
     * Set timensaje
     *
     * @param integer $timensaje
     *
     * @return Mensajes
     */
    public function setTimensaje($timensaje)
    {
        $this->timensaje = $timensaje;

        return $this;
    }

    /**
     * Get timensaje
     *
     * @return integer
     */
    public function getTimensaje()
    {
        return $this->timensaje;
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
