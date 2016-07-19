<?php

namespace AppBundle\Entity;

/**
 * Timovi
 */
class Timovi
{
    /**
     * @var string
     */
    private $ntimovi;

    /**
     * @var string
     */
    private $prefijo;

    /**
     * @var string
     */
    private $reporte;

    /**
     * @var string
     */
    private $ctimovi;


    /**
     * Set ntimovi
     *
     * @param string $ntimovi
     *
     * @return Timovi
     */
    public function setNtimovi($ntimovi)
    {
        $this->ntimovi = $ntimovi;

        return $this;
    }

    /**
     * Get ntimovi
     *
     * @return string
     */
    public function getNtimovi()
    {
        return $this->ntimovi;
    }

    /**
     * Set prefijo
     *
     * @param string $prefijo
     *
     * @return Timovi
     */
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    /**
     * Get prefijo
     *
     * @return string
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }

    /**
     * Set reporte
     *
     * @param string $reporte
     *
     * @return Timovi
     */
    public function setReporte($reporte)
    {
        $this->reporte = $reporte;

        return $this;
    }

    /**
     * Get reporte
     *
     * @return string
     */
    public function getReporte()
    {
        return $this->reporte;
    }

    /**
     * Get ctimovi
     *
     * @return string
     */
    public function getCtimovi()
    {
        return $this->ctimovi;
    }
}

