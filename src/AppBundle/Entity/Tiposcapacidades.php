<?php

namespace AppBundle\Entity;

/**
 * Tiposcapacidades
 */
class Tiposcapacidades
{
    /**
     * @var string
     */
    private $deta;

    /**
     * @var integer
     */
    private $idtipcapacidades;


    /**
     * Set deta
     *
     * @param string $deta
     *
     * @return Tiposcapacidades
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
     * Get idtipcapacidades
     *
     * @return integer
     */
    public function getIdtipcapacidades()
    {
        return $this->idtipcapacidades;
    }
}

