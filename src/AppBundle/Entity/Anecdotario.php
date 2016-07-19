<?php

namespace AppBundle\Entity;

/**
 * Anecdotario
 */
class Anecdotario
{
    /**
     * @var string
     */
    private $peri;

    /**
     * @var \DateTime
     */
    private $fcaso;

    /**
     * @var string
     */
    private $cargo;

    /**
     * @var string
     */
    private $descargo;

    /**
     * @var string
     */
    private $final;

    /**
     * @var string
     */
    private $gravedad;

    /**
     * @var integer
     */
    private $ccaso;

    /**
     * @var \AppBundle\Entity\Profes
     */
    private $cprofe;

    /**
     * @var \AppBundle\Entity\Alumnos
     */
    private $calum;


    /**
     * Set peri
     *
     * @param string $peri
     *
     * @return Anecdotario
     */
    public function setPeri($peri)
    {
        $this->peri = $peri;

        return $this;
    }

    /**
     * Get peri
     *
     * @return string
     */
    public function getPeri()
    {
        return $this->peri;
    }

    /**
     * Set fcaso
     *
     * @param \DateTime $fcaso
     *
     * @return Anecdotario
     */
    public function setFcaso($fcaso)
    {
        $this->fcaso = $fcaso;

        return $this;
    }

    /**
     * Get fcaso
     *
     * @return \DateTime
     */
    public function getFcaso()
    {
        return $this->fcaso;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return Anecdotario
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set descargo
     *
     * @param string $descargo
     *
     * @return Anecdotario
     */
    public function setDescargo($descargo)
    {
        $this->descargo = $descargo;

        return $this;
    }

    /**
     * Get descargo
     *
     * @return string
     */
    public function getDescargo()
    {
        return $this->descargo;
    }

    /**
     * Set final
     *
     * @param string $final
     *
     * @return Anecdotario
     */
    public function setFinal($final)
    {
        $this->final = $final;

        return $this;
    }

    /**
     * Get final
     *
     * @return string
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * Set gravedad
     *
     * @param string $gravedad
     *
     * @return Anecdotario
     */
    public function setGravedad($gravedad)
    {
        $this->gravedad = $gravedad;

        return $this;
    }

    /**
     * Get gravedad
     *
     * @return string
     */
    public function getGravedad()
    {
        return $this->gravedad;
    }

    /**
     * Get ccaso
     *
     * @return integer
     */
    public function getCcaso()
    {
        return $this->ccaso;
    }

    /**
     * Set cprofe
     *
     * @param \AppBundle\Entity\Profes $cprofe
     *
     * @return Anecdotario
     */
    public function setCprofe(\AppBundle\Entity\Profes $cprofe = null)
    {
        $this->cprofe = $cprofe;

        return $this;
    }

    /**
     * Get cprofe
     *
     * @return \AppBundle\Entity\Profes
     */
    public function getCprofe()
    {
        return $this->cprofe;
    }

    /**
     * Set calum
     *
     * @param \AppBundle\Entity\Alumnos $calum
     *
     * @return Anecdotario
     */
    public function setCalum(\AppBundle\Entity\Alumnos $calum = null)
    {
        $this->calum = $calum;

        return $this;
    }

    /**
     * Get calum
     *
     * @return \AppBundle\Entity\Alumnos
     */
    public function getCalum()
    {
        return $this->calum;
    }
}

