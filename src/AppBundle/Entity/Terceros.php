<?php

namespace AppBundle\Entity;

/**
 * Terceros
 */
class Terceros
{
    /**
     * @var string
     */
    private $idterce;

    /**
     * @var integer
     */
    private $ctiide;

    /**
     * @var string
     */
    private $ape1;

    /**
     * @var string
     */
    private $ape2;

    /**
     * @var string
     */
    private $nom1;

    /**
     * @var string
     */
    private $nom2;

    /**
     * @var string
     */
    private $dirterce;

    /**
     * @var string
     */
    private $telterce;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $cciudad;

    /**
     * @var integer
     */
    private $citerce;


    /**
     * Set idterce
     *
     * @param string $idterce
     *
     * @return Terceros
     */
    public function setIdterce($idterce)
    {
        $this->idterce = $idterce;

        return $this;
    }

    /**
     * Get idterce
     *
     * @return string
     */
    public function getIdterce()
    {
        return $this->idterce;
    }

    /**
     * Set ctiide
     *
     * @param integer $ctiide
     *
     * @return Terceros
     */
    public function setCtiide($ctiide)
    {
        $this->ctiide = $ctiide;

        return $this;
    }

    /**
     * Get ctiide
     *
     * @return integer
     */
    public function getCtiide()
    {
        return $this->ctiide;
    }

    /**
     * Set ape1
     *
     * @param string $ape1
     *
     * @return Terceros
     */
    public function setApe1($ape1)
    {
        $this->ape1 = $ape1;

        return $this;
    }

    /**
     * Get ape1
     *
     * @return string
     */
    public function getApe1()
    {
        return $this->ape1;
    }

    /**
     * Set ape2
     *
     * @param string $ape2
     *
     * @return Terceros
     */
    public function setApe2($ape2)
    {
        $this->ape2 = $ape2;

        return $this;
    }

    /**
     * Get ape2
     *
     * @return string
     */
    public function getApe2()
    {
        return $this->ape2;
    }

    /**
     * Set nom1
     *
     * @param string $nom1
     *
     * @return Terceros
     */
    public function setNom1($nom1)
    {
        $this->nom1 = $nom1;

        return $this;
    }

    /**
     * Get nom1
     *
     * @return string
     */
    public function getNom1()
    {
        return $this->nom1;
    }

    /**
     * Set nom2
     *
     * @param string $nom2
     *
     * @return Terceros
     */
    public function setNom2($nom2)
    {
        $this->nom2 = $nom2;

        return $this;
    }

    /**
     * Get nom2
     *
     * @return string
     */
    public function getNom2()
    {
        return $this->nom2;
    }

    /**
     * Set dirterce
     *
     * @param string $dirterce
     *
     * @return Terceros
     */
    public function setDirterce($dirterce)
    {
        $this->dirterce = $dirterce;

        return $this;
    }

    /**
     * Get dirterce
     *
     * @return string
     */
    public function getDirterce()
    {
        return $this->dirterce;
    }

    /**
     * Set telterce
     *
     * @param string $telterce
     *
     * @return Terceros
     */
    public function setTelterce($telterce)
    {
        $this->telterce = $telterce;

        return $this;
    }

    /**
     * Get telterce
     *
     * @return string
     */
    public function getTelterce()
    {
        return $this->telterce;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Terceros
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cciudad
     *
     * @param string $cciudad
     *
     * @return Terceros
     */
    public function setCciudad($cciudad)
    {
        $this->cciudad = $cciudad;

        return $this;
    }

    /**
     * Get cciudad
     *
     * @return string
     */
    public function getCciudad()
    {
        return $this->cciudad;
    }

    /**
     * Get citerce
     *
     * @return integer
     */
    public function getCiterce()
    {
        return $this->citerce;
    }
}

