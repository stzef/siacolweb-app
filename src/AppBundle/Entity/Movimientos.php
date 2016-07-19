<?php

namespace AppBundle\Entity;

/**
 * Movimientos
 */
class Movimientos
{
    /**
     * @var string
     */
    private $calum;

    /**
     * @var string
     */
    private $citerce;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ctimovi;

    /**
     * @var \DateTime
     */
    private $fmovi;

    /**
     * @var string
     */
    private $descrimovi;

    /**
     * @var string
     */
    private $vttotal;

    /**
     * @var string
     */
    private $activo;

    /**
     * @var string
     */
    private $vefe;

    /**
     * @var string
     */
    private $vtar;

    /**
     * @var string
     */
    private $doctar;

    /**
     * @var string
     */
    private $bantar;

    /**
     * @var string
     */
    private $vch;

    /**
     * @var string
     */
    private $docch;

    /**
     * @var string
     */
    private $banch;

    /**
     * @var string
     */
    private $ventre;

    /**
     * @var string
     */
    private $vcambio;

    /**
     * @var \DateTime
     */
    private $fvencimiento1;

    /**
     * @var \DateTime
     */
    private $fvencimiento2;

    /**
     * @var string
     */
    private $descuento = '0.00';

    /**
     * @var string
     */
    private $cmovi;


    /**
     * Set calum
     *
     * @param string $calum
     *
     * @return Movimientos
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
     * Set citerce
     *
     * @param string $citerce
     *
     * @return Movimientos
     */
    public function setCiterce($citerce)
    {
        $this->citerce = $citerce;

        return $this;
    }

    /**
     * Get citerce
     *
     * @return string
     */
    public function getCiterce()
    {
        return $this->citerce;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Movimientos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ctimovi
     *
     * @param string $ctimovi
     *
     * @return Movimientos
     */
    public function setCtimovi($ctimovi)
    {
        $this->ctimovi = $ctimovi;

        return $this;
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

    /**
     * Set fmovi
     *
     * @param \DateTime $fmovi
     *
     * @return Movimientos
     */
    public function setFmovi($fmovi)
    {
        $this->fmovi = $fmovi;

        return $this;
    }

    /**
     * Get fmovi
     *
     * @return \DateTime
     */
    public function getFmovi()
    {
        return $this->fmovi;
    }

    /**
     * Set descrimovi
     *
     * @param string $descrimovi
     *
     * @return Movimientos
     */
    public function setDescrimovi($descrimovi)
    {
        $this->descrimovi = $descrimovi;

        return $this;
    }

    /**
     * Get descrimovi
     *
     * @return string
     */
    public function getDescrimovi()
    {
        return $this->descrimovi;
    }

    /**
     * Set vttotal
     *
     * @param string $vttotal
     *
     * @return Movimientos
     */
    public function setVttotal($vttotal)
    {
        $this->vttotal = $vttotal;

        return $this;
    }

    /**
     * Get vttotal
     *
     * @return string
     */
    public function getVttotal()
    {
        return $this->vttotal;
    }

    /**
     * Set activo
     *
     * @param string $activo
     *
     * @return Movimientos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return string
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set vefe
     *
     * @param string $vefe
     *
     * @return Movimientos
     */
    public function setVefe($vefe)
    {
        $this->vefe = $vefe;

        return $this;
    }

    /**
     * Get vefe
     *
     * @return string
     */
    public function getVefe()
    {
        return $this->vefe;
    }

    /**
     * Set vtar
     *
     * @param string $vtar
     *
     * @return Movimientos
     */
    public function setVtar($vtar)
    {
        $this->vtar = $vtar;

        return $this;
    }

    /**
     * Get vtar
     *
     * @return string
     */
    public function getVtar()
    {
        return $this->vtar;
    }

    /**
     * Set doctar
     *
     * @param string $doctar
     *
     * @return Movimientos
     */
    public function setDoctar($doctar)
    {
        $this->doctar = $doctar;

        return $this;
    }

    /**
     * Get doctar
     *
     * @return string
     */
    public function getDoctar()
    {
        return $this->doctar;
    }

    /**
     * Set bantar
     *
     * @param string $bantar
     *
     * @return Movimientos
     */
    public function setBantar($bantar)
    {
        $this->bantar = $bantar;

        return $this;
    }

    /**
     * Get bantar
     *
     * @return string
     */
    public function getBantar()
    {
        return $this->bantar;
    }

    /**
     * Set vch
     *
     * @param string $vch
     *
     * @return Movimientos
     */
    public function setVch($vch)
    {
        $this->vch = $vch;

        return $this;
    }

    /**
     * Get vch
     *
     * @return string
     */
    public function getVch()
    {
        return $this->vch;
    }

    /**
     * Set docch
     *
     * @param string $docch
     *
     * @return Movimientos
     */
    public function setDocch($docch)
    {
        $this->docch = $docch;

        return $this;
    }

    /**
     * Get docch
     *
     * @return string
     */
    public function getDocch()
    {
        return $this->docch;
    }

    /**
     * Set banch
     *
     * @param string $banch
     *
     * @return Movimientos
     */
    public function setBanch($banch)
    {
        $this->banch = $banch;

        return $this;
    }

    /**
     * Get banch
     *
     * @return string
     */
    public function getBanch()
    {
        return $this->banch;
    }

    /**
     * Set ventre
     *
     * @param string $ventre
     *
     * @return Movimientos
     */
    public function setVentre($ventre)
    {
        $this->ventre = $ventre;

        return $this;
    }

    /**
     * Get ventre
     *
     * @return string
     */
    public function getVentre()
    {
        return $this->ventre;
    }

    /**
     * Set vcambio
     *
     * @param string $vcambio
     *
     * @return Movimientos
     */
    public function setVcambio($vcambio)
    {
        $this->vcambio = $vcambio;

        return $this;
    }

    /**
     * Get vcambio
     *
     * @return string
     */
    public function getVcambio()
    {
        return $this->vcambio;
    }

    /**
     * Set fvencimiento1
     *
     * @param \DateTime $fvencimiento1
     *
     * @return Movimientos
     */
    public function setFvencimiento1($fvencimiento1)
    {
        $this->fvencimiento1 = $fvencimiento1;

        return $this;
    }

    /**
     * Get fvencimiento1
     *
     * @return \DateTime
     */
    public function getFvencimiento1()
    {
        return $this->fvencimiento1;
    }

    /**
     * Set fvencimiento2
     *
     * @param \DateTime $fvencimiento2
     *
     * @return Movimientos
     */
    public function setFvencimiento2($fvencimiento2)
    {
        $this->fvencimiento2 = $fvencimiento2;

        return $this;
    }

    /**
     * Get fvencimiento2
     *
     * @return \DateTime
     */
    public function getFvencimiento2()
    {
        return $this->fvencimiento2;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     *
     * @return Movimientos
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string
     */
    public function getDescuento()
    {
        return $this->descuento;
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

