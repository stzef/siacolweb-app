<?php

namespace AppBundle\Entity;

/**
 * Grados
 */
class Grados
{
    /**
     * @var string
     */
    private $ngrado;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $orden = '0';

    /**
     * @var string
     */
    private $cgrado;

    /**
     * @var \AppBundle\Entity\Tipedu
     */
    private $ctipedu;


    /**
     * Set ngrado
     *
     * @param string $ngrado
     *
     * @return Grados
     */
    public function setNgrado($ngrado)
    {
        $this->ngrado = $ngrado;

        return $this;
    }

    /**
     * Get ngrado
     *
     * @return string
     */
    public function getNgrado()
    {
        return $this->ngrado;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Grados
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Grados
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Grados
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Get cgrado
     *
     * @return string
     */
    public function getCgrado()
    {
        return $this->cgrado;
    }

    /**
     * Set ctipedu
     *
     * @param \AppBundle\Entity\Tipedu $ctipedu
     *
     * @return Grados
     */
    public function setCtipedu(\AppBundle\Entity\Tipedu $ctipedu = null)
    {
        $this->ctipedu = $ctipedu;

        return $this;
    }

    /**
     * Get ctipedu
     *
     * @return \AppBundle\Entity\Tipedu
     */
    public function getCtipedu()
    {
        return $this->ctipedu;
    }
}

