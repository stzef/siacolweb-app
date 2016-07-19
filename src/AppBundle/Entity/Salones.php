<?php

namespace AppBundle\Entity;

/**
 * Salones
 */
class Salones
{
    /**
     * @var string
     */
    private $nsalon;

    /**
     * @var integer
     */
    private $nestu;

    /**
     * @var string
     */
    private $csede;

    /**
     * @var string
     */
    private $csalon;


    /**
     * Set nsalon
     *
     * @param string $nsalon
     *
     * @return Salones
     */
    public function setNsalon($nsalon)
    {
        $this->nsalon = $nsalon;

        return $this;
    }

    /**
     * Get nsalon
     *
     * @return string
     */
    public function getNsalon()
    {
        return $this->nsalon;
    }

    /**
     * Set nestu
     *
     * @param integer $nestu
     *
     * @return Salones
     */
    public function setNestu($nestu)
    {
        $this->nestu = $nestu;

        return $this;
    }

    /**
     * Get nestu
     *
     * @return integer
     */
    public function getNestu()
    {
        return $this->nestu;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Salones
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

    /**
     * Set csalon
     *
     * @param string $csalon
     *
     * @return Salones
     */
    public function setCsalon($csalon)
    {
        $this->csalon = $csalon;

        return $this;
    }

    /**
     * Get csalon
     *
     * @return string
     */
    public function getCsalon()
    {
        return $this->csalon;
    }
}

