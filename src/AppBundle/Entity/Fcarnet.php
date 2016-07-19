<?php

namespace AppBundle\Entity;

/**
 * Fcarnet
 */
class Fcarnet
{
    /**
     * @var string
     */
    private $ncampo;

    /**
     * @var string
     */
    private $consult;

    /**
     * @var string
     */
    private $controlador;

    /**
     * @var string
     */
    private $posx;

    /**
     * @var string
     */
    private $posy;

    /**
     * @var string
     */
    private $fondo;

    /**
     * @var integer
     */
    private $tfont;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $negrita;

    /**
     * @var string
     */
    private $tamw;

    /**
     * @var string
     */
    private $tamh;

    /**
     * @var integer
     */
    private $ccarnet;

    /**
     * @var integer
     */
    private $item;


    /**
     * Set ncampo
     *
     * @param string $ncampo
     *
     * @return Fcarnet
     */
    public function setNcampo($ncampo)
    {
        $this->ncampo = $ncampo;

        return $this;
    }

    /**
     * Get ncampo
     *
     * @return string
     */
    public function getNcampo()
    {
        return $this->ncampo;
    }

    /**
     * Set consult
     *
     * @param string $consult
     *
     * @return Fcarnet
     */
    public function setConsult($consult)
    {
        $this->consult = $consult;

        return $this;
    }

    /**
     * Get consult
     *
     * @return string
     */
    public function getConsult()
    {
        return $this->consult;
    }

    /**
     * Set controlador
     *
     * @param string $controlador
     *
     * @return Fcarnet
     */
    public function setControlador($controlador)
    {
        $this->controlador = $controlador;

        return $this;
    }

    /**
     * Get controlador
     *
     * @return string
     */
    public function getControlador()
    {
        return $this->controlador;
    }

    /**
     * Set posx
     *
     * @param string $posx
     *
     * @return Fcarnet
     */
    public function setPosx($posx)
    {
        $this->posx = $posx;

        return $this;
    }

    /**
     * Get posx
     *
     * @return string
     */
    public function getPosx()
    {
        return $this->posx;
    }

    /**
     * Set posy
     *
     * @param string $posy
     *
     * @return Fcarnet
     */
    public function setPosy($posy)
    {
        $this->posy = $posy;

        return $this;
    }

    /**
     * Get posy
     *
     * @return string
     */
    public function getPosy()
    {
        return $this->posy;
    }

    /**
     * Set fondo
     *
     * @param string $fondo
     *
     * @return Fcarnet
     */
    public function setFondo($fondo)
    {
        $this->fondo = $fondo;

        return $this;
    }

    /**
     * Get fondo
     *
     * @return string
     */
    public function getFondo()
    {
        return $this->fondo;
    }

    /**
     * Set tfont
     *
     * @param integer $tfont
     *
     * @return Fcarnet
     */
    public function setTfont($tfont)
    {
        $this->tfont = $tfont;

        return $this;
    }

    /**
     * Get tfont
     *
     * @return integer
     */
    public function getTfont()
    {
        return $this->tfont;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Fcarnet
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set negrita
     *
     * @param string $negrita
     *
     * @return Fcarnet
     */
    public function setNegrita($negrita)
    {
        $this->negrita = $negrita;

        return $this;
    }

    /**
     * Get negrita
     *
     * @return string
     */
    public function getNegrita()
    {
        return $this->negrita;
    }

    /**
     * Set tamw
     *
     * @param string $tamw
     *
     * @return Fcarnet
     */
    public function setTamw($tamw)
    {
        $this->tamw = $tamw;

        return $this;
    }

    /**
     * Get tamw
     *
     * @return string
     */
    public function getTamw()
    {
        return $this->tamw;
    }

    /**
     * Set tamh
     *
     * @param string $tamh
     *
     * @return Fcarnet
     */
    public function setTamh($tamh)
    {
        $this->tamh = $tamh;

        return $this;
    }

    /**
     * Get tamh
     *
     * @return string
     */
    public function getTamh()
    {
        return $this->tamh;
    }

    /**
     * Set ccarnet
     *
     * @param integer $ccarnet
     *
     * @return Fcarnet
     */
    public function setCcarnet($ccarnet)
    {
        $this->ccarnet = $ccarnet;

        return $this;
    }

    /**
     * Get ccarnet
     *
     * @return integer
     */
    public function getCcarnet()
    {
        return $this->ccarnet;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return Fcarnet
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
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

