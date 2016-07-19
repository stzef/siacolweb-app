<?php

namespace AppBundle\Entity;

/**
 * Permisos
 */
class Permisos
{
    /**
     * @var integer
     */
    private $codperfil;

    /**
     * @var integer
     */
    private $opcion;

    /**
     * @var integer
     */
    private $item;


    /**
     * Set codperfil
     *
     * @param integer $codperfil
     *
     * @return Permisos
     */
    public function setCodperfil($codperfil)
    {
        $this->codperfil = $codperfil;

        return $this;
    }

    /**
     * Get codperfil
     *
     * @return integer
     */
    public function getCodperfil()
    {
        return $this->codperfil;
    }

    /**
     * Set opcion
     *
     * @param integer $opcion
     *
     * @return Permisos
     */
    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;

        return $this;
    }

    /**
     * Get opcion
     *
     * @return integer
     */
    public function getOpcion()
    {
        return $this->opcion;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }
}

