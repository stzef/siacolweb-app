<?php

namespace AppBundle\Entity;

/**
 * Notasdeta
 */
class Notasdeta
{
    /**
     * @var string
     */
    private $clogro;

    /**
     * @var string
     */
    private $notapar;

    /**
     * @var string
     */
    private $cvalopar;

    /**
     * @var string
     */
    private $notaR1;

    /**
     * @var string
     */
    private $cvaloR1;

    /**
     * @var string
     */
    private $notaR2;

    /**
     * @var string
     */
    private $cvaloR2;

    /**
     * @var string
     */
    private $notaDefi;

    /**
     * @var string
     */
    private $cvaloDefi;

    /**
     * @var integer
     */
    private $conse;

    /**
     * @var integer
     */
    private $cnota;


    /**
     * Set clogro
     *
     * @param string $clogro
     *
     * @return Notasdeta
     */
    public function setClogro($clogro)
    {
        $this->clogro = $clogro;

        return $this;
    }

    /**
     * Get clogro
     *
     * @return string
     */
    public function getClogro()
    {
        return $this->clogro;
    }

    /**
     * Set notapar
     *
     * @param string $notapar
     *
     * @return Notasdeta
     */
    public function setNotapar($notapar)
    {
        $this->notapar = $notapar;

        return $this;
    }

    /**
     * Get notapar
     *
     * @return string
     */
    public function getNotapar()
    {
        return $this->notapar;
    }

    /**
     * Set cvalopar
     *
     * @param string $cvalopar
     *
     * @return Notasdeta
     */
    public function setCvalopar($cvalopar)
    {
        $this->cvalopar = $cvalopar;

        return $this;
    }

    /**
     * Get cvalopar
     *
     * @return string
     */
    public function getCvalopar()
    {
        return $this->cvalopar;
    }

    /**
     * Set notaR1
     *
     * @param string $notaR1
     *
     * @return Notasdeta
     */
    public function setNotaR1($notaR1)
    {
        $this->notaR1 = $notaR1;

        return $this;
    }

    /**
     * Get notaR1
     *
     * @return string
     */
    public function getNotaR1()
    {
        return $this->notaR1;
    }

    /**
     * Set cvaloR1
     *
     * @param string $cvaloR1
     *
     * @return Notasdeta
     */
    public function setCvaloR1($cvaloR1)
    {
        $this->cvaloR1 = $cvaloR1;

        return $this;
    }

    /**
     * Get cvaloR1
     *
     * @return string
     */
    public function getCvaloR1()
    {
        return $this->cvaloR1;
    }

    /**
     * Set notaR2
     *
     * @param string $notaR2
     *
     * @return Notasdeta
     */
    public function setNotaR2($notaR2)
    {
        $this->notaR2 = $notaR2;

        return $this;
    }

    /**
     * Get notaR2
     *
     * @return string
     */
    public function getNotaR2()
    {
        return $this->notaR2;
    }

    /**
     * Set cvaloR2
     *
     * @param string $cvaloR2
     *
     * @return Notasdeta
     */
    public function setCvaloR2($cvaloR2)
    {
        $this->cvaloR2 = $cvaloR2;

        return $this;
    }

    /**
     * Get cvaloR2
     *
     * @return string
     */
    public function getCvaloR2()
    {
        return $this->cvaloR2;
    }

    /**
     * Set notaDefi
     *
     * @param string $notaDefi
     *
     * @return Notasdeta
     */
    public function setNotaDefi($notaDefi)
    {
        $this->notaDefi = $notaDefi;

        return $this;
    }

    /**
     * Get notaDefi
     *
     * @return string
     */
    public function getNotaDefi()
    {
        return $this->notaDefi;
    }

    /**
     * Set cvaloDefi
     *
     * @param string $cvaloDefi
     *
     * @return Notasdeta
     */
    public function setCvaloDefi($cvaloDefi)
    {
        $this->cvaloDefi = $cvaloDefi;

        return $this;
    }

    /**
     * Get cvaloDefi
     *
     * @return string
     */
    public function getCvaloDefi()
    {
        return $this->cvaloDefi;
    }

    /**
     * Set conse
     *
     * @param integer $conse
     *
     * @return Notasdeta
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
     * Set cnota
     *
     * @param integer $cnota
     *
     * @return Notasdeta
     */
    public function setCnota($cnota)
    {
        $this->cnota = $cnota;

        return $this;
    }

    /**
     * Get cnota
     *
     * @return integer
     */
    public function getCnota()
    {
        return $this->cnota;
    }
}

