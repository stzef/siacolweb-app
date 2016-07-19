<?php

namespace AppBundle\Entity;

/**
 * Asistenciasdeta
 */
class Asistenciasdeta
{
    /**
     * @var integer
     */
    private $estado;

    /**
     * @var string
     */
    private $dia;

    /**
     * @var \AppBundle\Entity\Asistencias
     */
    private $casis;


    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Asistenciasdeta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set dia
     *
     * @param string $dia
     *
     * @return Asistenciasdeta
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return string
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set casis
     *
     * @param \AppBundle\Entity\Asistencias $casis
     *
     * @return Asistenciasdeta
     */
    public function setCasis(\AppBundle\Entity\Asistencias $casis)
    {
        $this->casis = $casis;

        return $this;
    }

    /**
     * Get casis
     *
     * @return \AppBundle\Entity\Asistencias
     */
    public function getCasis()
    {
        return $this->casis;
    }
}

