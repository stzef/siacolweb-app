<?php

namespace AppBundle\Entity;

/**
 * Docreq
 */
class Docreq
{
    /**
     * @var string
     */
    private $deta;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $bloquear;

    /**
     * @var boolean
     */
    private $codreq;

    /**
     * @var \AppBundle\Entity\Grados
     */
    private $cgrado;


    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Docreq
     */
    public function setDeta($deta)
    {
        $this->deta = $deta;

        return $this;
    }

    /**
     * Get deta
     *
     * @return string
     */
    public function getDeta()
    {
        return $this->deta;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Docreq
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
     * Set bloquear
     *
     * @param string $bloquear
     *
     * @return Docreq
     */
    public function setBloquear($bloquear)
    {
        $this->bloquear = $bloquear;

        return $this;
    }

    /**
     * Get bloquear
     *
     * @return string
     */
    public function getBloquear()
    {
        return $this->bloquear;
    }

    /**
     * Get codreq
     *
     * @return boolean
     */
    public function getCodreq()
    {
        return $this->codreq;
    }

    /**
     * Set cgrado
     *
     * @param \AppBundle\Entity\Grados $cgrado
     *
     * @return Docreq
     */
    public function setCgrado(\AppBundle\Entity\Grados $cgrado = null)
    {
        $this->cgrado = $cgrado;

        return $this;
    }

    /**
     * Get cgrado
     *
     * @return \AppBundle\Entity\Grados
     */
    public function getCgrado()
    {
        return $this->cgrado;
    }
}

