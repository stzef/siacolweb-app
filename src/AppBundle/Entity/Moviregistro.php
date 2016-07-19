<?php

namespace AppBundle\Entity;

/**
 * Moviregistro
 */
class Moviregistro
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $calumId;

    /**
     * @var string
     */
    private $typeReg;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Moviregistro
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Moviregistro
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set calumId
     *
     * @param string $calumId
     *
     * @return Moviregistro
     */
    public function setCalumId($calumId)
    {
        $this->calumId = $calumId;

        return $this;
    }

    /**
     * Get calumId
     *
     * @return string
     */
    public function getCalumId()
    {
        return $this->calumId;
    }

    /**
     * Set typeReg
     *
     * @param string $typeReg
     *
     * @return Moviregistro
     */
    public function setTypeReg($typeReg)
    {
        $this->typeReg = $typeReg;

        return $this;
    }

    /**
     * Get typeReg
     *
     * @return string
     */
    public function getTypeReg()
    {
        return $this->typeReg;
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

