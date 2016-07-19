<?php

namespace AppBundle\Entity;

/**
 * Tiposdiscapacidades
 */
class Tiposdiscapacidades
{
    /**
     * @var string
     */
    private $deta;

    /**
     * @var integer
     */
    private $idtipdisca;


    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Tiposdiscapacidades
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
     * Get idtipdisca
     *
     * @return integer
     */
    public function getIdtipdisca()
    {
        return $this->idtipdisca;
    }
}

