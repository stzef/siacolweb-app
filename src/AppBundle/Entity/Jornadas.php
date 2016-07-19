<?php

namespace AppBundle\Entity;

/**
 * Jornadas
 */
class Jornadas
{
    /**
     * @var string
     */
    private $njorna;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $cjorna;


    /**
     * Set njorna
     *
     * @param string $njorna
     *
     * @return Jornadas
     */
    public function setNjorna($njorna)
    {
        $this->njorna = $njorna;

        return $this;
    }

    /**
     * Get njorna
     *
     * @return string
     */
    public function getNjorna()
    {
        return $this->njorna;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Jornadas
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
     * Get cjorna
     *
     * @return string
     */
    public function getCjorna()
    {
        return $this->cjorna;
    }
}

