<?php

namespace AppBundle\Entity;

/**
 * Movimientosdeta
 */
class Movimientosdeta
{
    /**
     * @var string
     */
    private $docuref;

    /**
     * @var string
     */
    private $cconcep;

    /**
     * @var string
     */
    private $nconcep;

    /**
     * @var integer
     */
    private $canti;

    /**
     * @var string
     */
    private $vunita;

    /**
     * @var string
     */
    private $vtotal;

    /**
     * @var string
     */
    private $itmovi;

    /**
     * @var string
     */
    private $cmovi;


    /**
     * Set docuref
     *
     * @param string $docuref
     *
     * @return Movimientosdeta
     */
    public function setDocuref($docuref)
    {
        $this->docuref = $docuref;

        return $this;
    }

    /**
     * Get docuref
     *
     * @return string
     */
    public function getDocuref()
    {
        return $this->docuref;
    }

    /**
     * Set cconcep
     *
     * @param string $cconcep
     *
     * @return Movimientosdeta
     */
    public function setCconcep($cconcep)
    {
        $this->cconcep = $cconcep;

        return $this;
    }

    /**
     * Get cconcep
     *
     * @return string
     */
    public function getCconcep()
    {
        return $this->cconcep;
    }

    /**
     * Set nconcep
     *
     * @param string $nconcep
     *
     * @return Movimientosdeta
     */
    public function setNconcep($nconcep)
    {
        $this->nconcep = $nconcep;

        return $this;
    }

    /**
     * Get nconcep
     *
     * @return string
     */
    public function getNconcep()
    {
        return $this->nconcep;
    }

    /**
     * Set canti
     *
     * @param integer $canti
     *
     * @return Movimientosdeta
     */
    public function setCanti($canti)
    {
        $this->canti = $canti;

        return $this;
    }

    /**
     * Get canti
     *
     * @return integer
     */
    public function getCanti()
    {
        return $this->canti;
    }

    /**
     * Set vunita
     *
     * @param string $vunita
     *
     * @return Movimientosdeta
     */
    public function setVunita($vunita)
    {
        $this->vunita = $vunita;

        return $this;
    }

    /**
     * Get vunita
     *
     * @return string
     */
    public function getVunita()
    {
        return $this->vunita;
    }

    /**
     * Set vtotal
     *
     * @param string $vtotal
     *
     * @return Movimientosdeta
     */
    public function setVtotal($vtotal)
    {
        $this->vtotal = $vtotal;

        return $this;
    }

    /**
     * Get vtotal
     *
     * @return string
     */
    public function getVtotal()
    {
        return $this->vtotal;
    }

    /**
     * Set itmovi
     *
     * @param string $itmovi
     *
     * @return Movimientosdeta
     */
    public function setItmovi($itmovi)
    {
        $this->itmovi = $itmovi;

        return $this;
    }

    /**
     * Get itmovi
     *
     * @return string
     */
    public function getItmovi()
    {
        return $this->itmovi;
    }

    /**
     * Set cmovi
     *
     * @param string $cmovi
     *
     * @return Movimientosdeta
     */
    public function setCmovi($cmovi)
    {
        $this->cmovi = $cmovi;

        return $this;
    }

    /**
     * Get cmovi
     *
     * @return string
     */
    public function getCmovi()
    {
        return $this->cmovi;
    }
}

