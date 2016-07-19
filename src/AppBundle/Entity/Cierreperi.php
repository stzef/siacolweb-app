<?php

namespace AppBundle\Entity;

/**
 * Cierreperi
 */
class Cierreperi
{
    /**
     * @var \DateTime
     */
    private $fhcienodo0;

    /**
     * @var \DateTime
     */
    private $fhcienodo1;

    /**
     * @var \DateTime
     */
    private $fhvernoalu0;

    /**
     * @var \DateTime
     */
    private $fhvernoalu1;

    /**
     * @var \DateTime
     */
    private $fhcienoredo0;

    /**
     * @var \DateTime
     */
    private $fhcienoredo1;

    /**
     * @var \DateTime
     */
    private $fhvernorealu0;

    /**
     * @var \DateTime
     */
    private $fhvernorealu1;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $cperi;

    /**
     * @var string
     */
    private $csede;


    /**
     * Set fhcienodo0
     *
     * @param \DateTime $fhcienodo0
     *
     * @return Cierreperi
     */
    public function setFhcienodo0($fhcienodo0)
    {
        $this->fhcienodo0 = $fhcienodo0;

        return $this;
    }

    /**
     * Get fhcienodo0
     *
     * @return \DateTime
     */
    public function getFhcienodo0()
    {
        return $this->fhcienodo0;
    }

    /**
     * Set fhcienodo1
     *
     * @param \DateTime $fhcienodo1
     *
     * @return Cierreperi
     */
    public function setFhcienodo1($fhcienodo1)
    {
        $this->fhcienodo1 = $fhcienodo1;

        return $this;
    }

    /**
     * Get fhcienodo1
     *
     * @return \DateTime
     */
    public function getFhcienodo1()
    {
        return $this->fhcienodo1;
    }

    /**
     * Set fhvernoalu0
     *
     * @param \DateTime $fhvernoalu0
     *
     * @return Cierreperi
     */
    public function setFhvernoalu0($fhvernoalu0)
    {
        $this->fhvernoalu0 = $fhvernoalu0;

        return $this;
    }

    /**
     * Get fhvernoalu0
     *
     * @return \DateTime
     */
    public function getFhvernoalu0()
    {
        return $this->fhvernoalu0;
    }

    /**
     * Set fhvernoalu1
     *
     * @param \DateTime $fhvernoalu1
     *
     * @return Cierreperi
     */
    public function setFhvernoalu1($fhvernoalu1)
    {
        $this->fhvernoalu1 = $fhvernoalu1;

        return $this;
    }

    /**
     * Get fhvernoalu1
     *
     * @return \DateTime
     */
    public function getFhvernoalu1()
    {
        return $this->fhvernoalu1;
    }

    /**
     * Set fhcienoredo0
     *
     * @param \DateTime $fhcienoredo0
     *
     * @return Cierreperi
     */
    public function setFhcienoredo0($fhcienoredo0)
    {
        $this->fhcienoredo0 = $fhcienoredo0;

        return $this;
    }

    /**
     * Get fhcienoredo0
     *
     * @return \DateTime
     */
    public function getFhcienoredo0()
    {
        return $this->fhcienoredo0;
    }

    /**
     * Set fhcienoredo1
     *
     * @param \DateTime $fhcienoredo1
     *
     * @return Cierreperi
     */
    public function setFhcienoredo1($fhcienoredo1)
    {
        $this->fhcienoredo1 = $fhcienoredo1;

        return $this;
    }

    /**
     * Get fhcienoredo1
     *
     * @return \DateTime
     */
    public function getFhcienoredo1()
    {
        return $this->fhcienoredo1;
    }

    /**
     * Set fhvernorealu0
     *
     * @param \DateTime $fhvernorealu0
     *
     * @return Cierreperi
     */
    public function setFhvernorealu0($fhvernorealu0)
    {
        $this->fhvernorealu0 = $fhvernorealu0;

        return $this;
    }

    /**
     * Get fhvernorealu0
     *
     * @return \DateTime
     */
    public function getFhvernorealu0()
    {
        return $this->fhvernorealu0;
    }

    /**
     * Set fhvernorealu1
     *
     * @param \DateTime $fhvernorealu1
     *
     * @return Cierreperi
     */
    public function setFhvernorealu1($fhvernorealu1)
    {
        $this->fhvernorealu1 = $fhvernorealu1;

        return $this;
    }

    /**
     * Get fhvernorealu1
     *
     * @return \DateTime
     */
    public function getFhvernorealu1()
    {
        return $this->fhvernorealu1;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Cierreperi
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
     * Set cperi
     *
     * @param string $cperi
     *
     * @return Cierreperi
     */
    public function setCperi($cperi)
    {
        $this->cperi = $cperi;

        return $this;
    }

    /**
     * Get cperi
     *
     * @return string
     */
    public function getCperi()
    {
        return $this->cperi;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Cierreperi
     */
    public function setCsede($csede)
    {
        $this->csede = $csede;

        return $this;
    }

    /**
     * Get csede
     *
     * @return string
     */
    public function getCsede()
    {
        return $this->csede;
    }
}

