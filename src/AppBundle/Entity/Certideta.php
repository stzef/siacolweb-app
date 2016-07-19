<?php

namespace AppBundle\Entity;

/**
 * Certideta
 */
class Certideta
{
    /**
     * @var string
     */
    private $cmate;

    /**
     * @var string
     */
    private $nmate;

    /**
     * @var integer
     */
    private $ihs;

    /**
     * @var string
     */
    private $valnum;

    /**
     * @var string
     */
    private $valcon;

    /**
     * @var string
     */
    private $itcerti;

    /**
     * @var string
     */
    private $ccerti;


    /**
     * Set cmate
     *
     * @param string $cmate
     *
     * @return Certideta
     */
    public function setCmate($cmate)
    {
        $this->cmate = $cmate;

        return $this;
    }

    /**
     * Get cmate
     *
     * @return string
     */
    public function getCmate()
    {
        return $this->cmate;
    }

    /**
     * Set nmate
     *
     * @param string $nmate
     *
     * @return Certideta
     */
    public function setNmate($nmate)
    {
        $this->nmate = $nmate;

        return $this;
    }

    /**
     * Get nmate
     *
     * @return string
     */
    public function getNmate()
    {
        return $this->nmate;
    }

    /**
     * Set ihs
     *
     * @param integer $ihs
     *
     * @return Certideta
     */
    public function setIhs($ihs)
    {
        $this->ihs = $ihs;

        return $this;
    }

    /**
     * Get ihs
     *
     * @return integer
     */
    public function getIhs()
    {
        return $this->ihs;
    }

    /**
     * Set valnum
     *
     * @param string $valnum
     *
     * @return Certideta
     */
    public function setValnum($valnum)
    {
        $this->valnum = $valnum;

        return $this;
    }

    /**
     * Get valnum
     *
     * @return string
     */
    public function getValnum()
    {
        return $this->valnum;
    }

    /**
     * Set valcon
     *
     * @param string $valcon
     *
     * @return Certideta
     */
    public function setValcon($valcon)
    {
        $this->valcon = $valcon;

        return $this;
    }

    /**
     * Get valcon
     *
     * @return string
     */
    public function getValcon()
    {
        return $this->valcon;
    }

    /**
     * Set itcerti
     *
     * @param string $itcerti
     *
     * @return Certideta
     */
    public function setItcerti($itcerti)
    {
        $this->itcerti = $itcerti;

        return $this;
    }

    /**
     * Get itcerti
     *
     * @return string
     */
    public function getItcerti()
    {
        return $this->itcerti;
    }

    /**
     * Set ccerti
     *
     * @param string $ccerti
     *
     * @return Certideta
     */
    public function setCcerti($ccerti)
    {
        $this->ccerti = $ccerti;

        return $this;
    }

    /**
     * Get ccerti
     *
     * @return string
     */
    public function getCcerti()
    {
        return $this->ccerti;
    }
}

