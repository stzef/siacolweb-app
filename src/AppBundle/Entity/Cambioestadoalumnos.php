<?php

namespace AppBundle\Entity;

/**
 * Cambioestadoalumnos
 */
class Cambioestadoalumnos
{
    /**
     * @var string
     */
    private $calum;

    /**
     * @var \DateTime
     */
    private $fregistro;

    /**
     * @var \DateTime
     */
    private $fhaccion = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $ctipoestado;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $idcambioestado;


    /**
     * Set calum
     *
     * @param string $calum
     *
     * @return Cambioestadoalumnos
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
     * Set fregistro
     *
     * @param \DateTime $fregistro
     *
     * @return Cambioestadoalumnos
     */
    public function setFregistro($fregistro)
    {
        $this->fregistro = $fregistro;

        return $this;
    }

    /**
     * Get fregistro
     *
     * @return \DateTime
     */
    public function getFregistro()
    {
        return $this->fregistro;
    }

    /**
     * Set fhaccion
     *
     * @param \DateTime $fhaccion
     *
     * @return Cambioestadoalumnos
     */
    public function setFhaccion($fhaccion)
    {
        $this->fhaccion = $fhaccion;

        return $this;
    }

    /**
     * Get fhaccion
     *
     * @return \DateTime
     */
    public function getFhaccion()
    {
        return $this->fhaccion;
    }

    /**
     * Set ctipoestado
     *
     * @param integer $ctipoestado
     *
     * @return Cambioestadoalumnos
     */
    public function setCtipoestado($ctipoestado)
    {
        $this->ctipoestado = $ctipoestado;

        return $this;
    }

    /**
     * Get ctipoestado
     *
     * @return integer
     */
    public function getCtipoestado()
    {
        return $this->ctipoestado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Cambioestadoalumnos
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
     * Get idcambioestado
     *
     * @return string
     */
    public function getIdcambioestado()
    {
        return $this->idcambioestado;
    }
}

