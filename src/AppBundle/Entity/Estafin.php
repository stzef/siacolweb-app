<?php

namespace AppBundle\Entity;

/**
 * Estafin
 */
class Estafin
{
    /**
     * @var string
     */
    private $nestafin;

    /**
     * @var string
     */
    private $riniap;

    /**
     * @var string
     */
    private $rfniap;

    /**
     * @var string
     */
    private $estado = 'R';

    /**
     * @var string
     */
    private $cestafin;


    /**
     * Set nestafin
     *
     * @param string $nestafin
     *
     * @return Estafin
     */
    public function setNestafin($nestafin)
    {
        $this->nestafin = $nestafin;

        return $this;
    }

    /**
     * Get nestafin
     *
     * @return string
     */
    public function getNestafin()
    {
        return $this->nestafin;
    }

    /**
     * Set riniap
     *
     * @param string $riniap
     *
     * @return Estafin
     */
    public function setRiniap($riniap)
    {
        $this->riniap = $riniap;

        return $this;
    }

    /**
     * Get riniap
     *
     * @return string
     */
    public function getRiniap()
    {
        return $this->riniap;
    }

    /**
     * Set rfniap
     *
     * @param string $rfniap
     *
     * @return Estafin
     */
    public function setRfniap($rfniap)
    {
        $this->rfniap = $rfniap;

        return $this;
    }

    /**
     * Get rfniap
     *
     * @return string
     */
    public function getRfniap()
    {
        return $this->rfniap;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Estafin
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get cestafin
     *
     * @return string
     */
    public function getCestafin()
    {
        return $this->cestafin;
    }
}

