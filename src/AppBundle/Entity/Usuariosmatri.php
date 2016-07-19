<?php

namespace AppBundle\Entity;

/**
 * Usuariosmatri
 */
class Usuariosmatri
{
    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $clave;

    /**
     * @var string
     */
    private $perfilid;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Usuariosmatri
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuariosmatri
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set perfilid
     *
     * @param string $perfilid
     *
     * @return Usuariosmatri
     */
    public function setPerfilid($perfilid)
    {
        $this->perfilid = $perfilid;

        return $this;
    }

    /**
     * Get perfilid
     *
     * @return string
     */
    public function getPerfilid()
    {
        return $this->perfilid;
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

