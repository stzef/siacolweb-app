<?php

namespace AppBundle\Entity;

/**
 * Menu
 */
class Menu
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $menuItem;

    /**
     * @var string
     */
    private $controlador;

    /**
     * @var string
     */
    private $info;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var string
     */
    private $target;

    /**
     * @var integer
     */
    private $modulo;

    /**
     * @var boolean
     */
    private $general = '0';

    /**
     * @var integer
     */
    private $item;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Menu
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set menuItem
     *
     * @param integer $menuItem
     *
     * @return Menu
     */
    public function setMenuItem($menuItem)
    {
        $this->menuItem = $menuItem;

        return $this;
    }

    /**
     * Get menuItem
     *
     * @return integer
     */
    public function getMenuItem()
    {
        return $this->menuItem;
    }

    /**
     * Set controlador
     *
     * @param string $controlador
     *
     * @return Menu
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
     * Set info
     *
     * @param string $info
     *
     * @return Menu
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Menu
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return Menu
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set modulo
     *
     * @param integer $modulo
     *
     * @return Menu
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Get modulo
     *
     * @return integer
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set general
     *
     * @param boolean $general
     *
     * @return Menu
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Get general
     *
     * @return boolean
     */
    public function getGeneral()
    {
        return $this->general;
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

