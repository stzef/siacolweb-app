<?php

namespace AppBundle\Entity;

/**
 * Modulos
 */
class Modulos
{
    /**
     * @var string
     */
    private $nmodulo;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $icono;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $cmodstring;

    /**
     * @var string
     */
    private $backgroundimg;

    /**
     * @var integer
     */
    private $cmodulo;


    /**
     * Set nmodulo
     *
     * @param string $nmodulo
     *
     * @return Modulos
     */
    public function setNmodulo($nmodulo)
    {
        $this->nmodulo = $nmodulo;

        return $this;
    }

    /**
     * Get nmodulo
     *
     * @return string
     */
    public function getNmodulo()
    {
        return $this->nmodulo;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Modulos
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set icono
     *
     * @param string $icono
     *
     * @return Modulos
     */
    public function setIcono($icono)
    {
        $this->icono = $icono;

        return $this;
    }

    /**
     * Get icono
     *
     * @return string
     */
    public function getIcono()
    {
        return $this->icono;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Modulos
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set cmodstring
     *
     * @param string $cmodstring
     *
     * @return Modulos
     */
    public function setCmodstring($cmodstring)
    {
        $this->cmodstring = $cmodstring;

        return $this;
    }

    /**
     * Get cmodstring
     *
     * @return string
     */
    public function getCmodstring()
    {
        return $this->cmodstring;
    }

    /**
     * Set backgroundimg
     *
     * @param string $backgroundimg
     *
     * @return Modulos
     */
    public function setBackgroundimg($backgroundimg)
    {
        $this->backgroundimg = $backgroundimg;

        return $this;
    }

    /**
     * Get backgroundimg
     *
     * @return string
     */
    public function getBackgroundimg()
    {
        return $this->backgroundimg;
    }

    /**
     * Get cmodulo
     *
     * @return integer
     */
    public function getCmodulo()
    {
        return $this->cmodulo;
    }
}

