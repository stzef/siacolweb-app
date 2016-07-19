<?php

namespace AppBundle\Entity;

/**
 * Docreqalum
 */
class Docreqalum
{
    /**
     * @var string
     */
    private $calum;

    /**
     * @var string
     */
    private $codcreq;

    /**
     * @var string
     */
    private $entregado;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set calum
     *
     * @param string $calum
     *
     * @return Docreqalum
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
     * Set codcreq
     *
     * @param string $codcreq
     *
     * @return Docreqalum
     */
    public function setCodcreq($codcreq)
    {
        $this->codcreq = $codcreq;

        return $this;
    }

    /**
     * Get codcreq
     *
     * @return string
     */
    public function getCodcreq()
    {
        return $this->codcreq;
    }

    /**
     * Set entregado
     *
     * @param string $entregado
     *
     * @return Docreqalum
     */
    public function setEntregado($entregado)
    {
        $this->entregado = $entregado;

        return $this;
    }

    /**
     * Get entregado
     *
     * @return string
     */
    public function getEntregado()
    {
        return $this->entregado;
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

