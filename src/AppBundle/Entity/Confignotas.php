<?php

namespace AppBundle\Entity;

/**
 * Confignotas
 */
class Confignotas
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $sigla;

    /**
     * @var string
     */
    private $peso;

    /**
     * @var integer
     */
    private $conse;

    /**
     * @var integer
     */
    private $itconfig;

    /**
     * @var integer
     */
    private $grupo;

    /**
     * @var string
     */
    private $general;

    /**
     * @var string
     */
    private $class;

    /**
     * @var integer
     */
    private $itemconfig;

    /**
     * @var integer
     */
    private $item;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Confignotas
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
     * Set sigla
     *
     * @param string $sigla
     *
     * @return Confignotas
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set peso
     *
     * @param string $peso
     *
     * @return Confignotas
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set conse
     *
     * @param integer $conse
     *
     * @return Confignotas
     */
    public function setConse($conse)
    {
        $this->conse = $conse;

        return $this;
    }

    /**
     * Get conse
     *
     * @return integer
     */
    public function getConse()
    {
        return $this->conse;
    }

    /**
     * Set itconfig
     *
     * @param integer $itconfig
     *
     * @return Confignotas
     */
    public function setItconfig($itconfig)
    {
        $this->itconfig = $itconfig;

        return $this;
    }

    /**
     * Get itconfig
     *
     * @return integer
     */
    public function getItconfig()
    {
        return $this->itconfig;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     *
     * @return Confignotas
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set general
     *
     * @param string $general
     *
     * @return Confignotas
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Get general
     *
     * @return string
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Confignotas
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set itemconfig
     *
     * @param integer $itemconfig
     *
     * @return Confignotas
     */
    public function setItemconfig($itemconfig)
    {
        $this->itemconfig = $itemconfig;

        return $this;
    }

    /**
     * Get itemconfig
     *
     * @return integer
     */
    public function getItemconfig()
    {
        return $this->itemconfig;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return Confignotas
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

