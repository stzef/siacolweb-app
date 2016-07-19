<?php

namespace AppBundle\Entity;

/**
 * Certi
 */
class Certi
{
    /**
     * @var string
     */
    private $calum;

    /**
     * @var string
     */
    private $nalum;

    /**
     * @var \DateTime
     */
    private $fcerti;

    /**
     * @var string
     */
    private $anocerti;

    /**
     * @var integer
     */
    private $pericerti;

    /**
     * @var string
     */
    private $texto;

    /**
     * @var string
     */
    private $nfirma1;

    /**
     * @var string
     */
    private $nfirma2;

    /**
     * @var string
     */
    private $nelabora;

    /**
     * @var string
     */
    private $observa;

    /**
     * @var string
     */
    private $fondoimg;

    /**
     * @var string
     */
    private $nesta;

    /**
     * @var string
     */
    private $ccerti;

    /**
     * @var \AppBundle\Entity\Ticerti
     */
    private $cticerti;


    /**
     * Set calum
     *
     * @param string $calum
     *
     * @return Certi
     */
    public function setCalum($calum)
    {
        $this->calum = $calum;

        return $this;
    }

    /**
     * Get calum
     *
     * @return string
     */
    public function getCalum()
    {
        return $this->calum;
    }

    /**
     * Set nalum
     *
     * @param string $nalum
     *
     * @return Certi
     */
    public function setNalum($nalum)
    {
        $this->nalum = $nalum;

        return $this;
    }

    /**
     * Get nalum
     *
     * @return string
     */
    public function getNalum()
    {
        return $this->nalum;
    }

    /**
     * Set fcerti
     *
     * @param \DateTime $fcerti
     *
     * @return Certi
     */
    public function setFcerti($fcerti)
    {
        $this->fcerti = $fcerti;

        return $this;
    }

    /**
     * Get fcerti
     *
     * @return \DateTime
     */
    public function getFcerti()
    {
        return $this->fcerti;
    }

    /**
     * Set anocerti
     *
     * @param string $anocerti
     *
     * @return Certi
     */
    public function setAnocerti($anocerti)
    {
        $this->anocerti = $anocerti;

        return $this;
    }

    /**
     * Get anocerti
     *
     * @return string
     */
    public function getAnocerti()
    {
        return $this->anocerti;
    }

    /**
     * Set pericerti
     *
     * @param integer $pericerti
     *
     * @return Certi
     */
    public function setPericerti($pericerti)
    {
        $this->pericerti = $pericerti;

        return $this;
    }

    /**
     * Get pericerti
     *
     * @return integer
     */
    public function getPericerti()
    {
        return $this->pericerti;
    }

    /**
     * Set texto
     *
     * @param string $texto
     *
     * @return Certi
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set nfirma1
     *
     * @param string $nfirma1
     *
     * @return Certi
     */
    public function setNfirma1($nfirma1)
    {
        $this->nfirma1 = $nfirma1;

        return $this;
    }

    /**
     * Get nfirma1
     *
     * @return string
     */
    public function getNfirma1()
    {
        return $this->nfirma1;
    }

    /**
     * Set nfirma2
     *
     * @param string $nfirma2
     *
     * @return Certi
     */
    public function setNfirma2($nfirma2)
    {
        $this->nfirma2 = $nfirma2;

        return $this;
    }

    /**
     * Get nfirma2
     *
     * @return string
     */
    public function getNfirma2()
    {
        return $this->nfirma2;
    }

    /**
     * Set nelabora
     *
     * @param string $nelabora
     *
     * @return Certi
     */
    public function setNelabora($nelabora)
    {
        $this->nelabora = $nelabora;

        return $this;
    }

    /**
     * Get nelabora
     *
     * @return string
     */
    public function getNelabora()
    {
        return $this->nelabora;
    }

    /**
     * Set observa
     *
     * @param string $observa
     *
     * @return Certi
     */
    public function setObserva($observa)
    {
        $this->observa = $observa;

        return $this;
    }

    /**
     * Get observa
     *
     * @return string
     */
    public function getObserva()
    {
        return $this->observa;
    }

    /**
     * Set fondoimg
     *
     * @param string $fondoimg
     *
     * @return Certi
     */
    public function setFondoimg($fondoimg)
    {
        $this->fondoimg = $fondoimg;

        return $this;
    }

    /**
     * Get fondoimg
     *
     * @return string
     */
    public function getFondoimg()
    {
        return $this->fondoimg;
    }

    /**
     * Set nesta
     *
     * @param string $nesta
     *
     * @return Certi
     */
    public function setNesta($nesta)
    {
        $this->nesta = $nesta;

        return $this;
    }

    /**
     * Get nesta
     *
     * @return string
     */
    public function getNesta()
    {
        return $this->nesta;
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

    /**
     * Set cticerti
     *
     * @param \AppBundle\Entity\Ticerti $cticerti
     *
     * @return Certi
     */
    public function setCticerti(\AppBundle\Entity\Ticerti $cticerti = null)
    {
        $this->cticerti = $cticerti;

        return $this;
    }

    /**
     * Get cticerti
     *
     * @return \AppBundle\Entity\Ticerti
     */
    public function getCticerti()
    {
        return $this->cticerti;
    }
}

