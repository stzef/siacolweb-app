<?php

namespace AppBundle\Entity;

/**
 * Profes
 */
class Profes
{
    /**
     * @var integer
     */
    private $ctipo;

    /**
     * @var string
     */
    private $idprofe;

    /**
     * @var string
     */
    private $ape1profe;

    /**
     * @var string
     */
    private $ape2profe;

    /**
     * @var string
     */
    private $nom1profe;

    /**
     * @var string
     */
    private $nom2profe;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $fnaci;

    /**
     * @var boolean
     */
    private $activo = '1';

    /**
     * @var string
     */
    private $cprofe;


    /**
     * Set ctipo
     *
     * @param integer $ctipo
     *
     * @return Profes
     */
    public function setCtipo($ctipo)
    {
        $this->ctipo = $ctipo;

        return $this;
    }

    /**
     * Get ctipo
     *
     * @return integer
     */
    public function getCtipo()
    {
        return $this->ctipo;
    }

    /**
     * Set idprofe
     *
     * @param string $idprofe
     *
     * @return Profes
     */
    public function setIdprofe($idprofe)
    {
        $this->idprofe = $idprofe;

        return $this;
    }

    /**
     * Get idprofe
     *
     * @return string
     */
    public function getIdprofe()
    {
        return $this->idprofe;
    }

    /**
     * Set ape1profe
     *
     * @param string $ape1profe
     *
     * @return Profes
     */
    public function setApe1profe($ape1profe)
    {
        $this->ape1profe = $ape1profe;

        return $this;
    }

    /**
     * Get ape1profe
     *
     * @return string
     */
    public function getApe1profe()
    {
        return $this->ape1profe;
    }

    /**
     * Set ape2profe
     *
     * @param string $ape2profe
     *
     * @return Profes
     */
    public function setApe2profe($ape2profe)
    {
        $this->ape2profe = $ape2profe;

        return $this;
    }

    /**
     * Get ape2profe
     *
     * @return string
     */
    public function getApe2profe()
    {
        return $this->ape2profe;
    }

    /**
     * Set nom1profe
     *
     * @param string $nom1profe
     *
     * @return Profes
     */
    public function setNom1profe($nom1profe)
    {
        $this->nom1profe = $nom1profe;

        return $this;
    }

    /**
     * Get nom1profe
     *
     * @return string
     */
    public function getNom1profe()
    {
        return $this->nom1profe;
    }

    /**
     * Set nom2profe
     *
     * @param string $nom2profe
     *
     * @return Profes
     */
    public function setNom2profe($nom2profe)
    {
        $this->nom2profe = $nom2profe;

        return $this;
    }

    /**
     * Get nom2profe
     *
     * @return string
     */
    public function getNom2profe()
    {
        return $this->nom2profe;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Profes
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Profes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Profes
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
     * Set fnaci
     *
     * @param \DateTime $fnaci
     *
     * @return Profes
     */
    public function setFnaci($fnaci)
    {
        $this->fnaci = $fnaci;

        return $this;
    }

    /**
     * Get fnaci
     *
     * @return \DateTime
     */
    public function getFnaci()
    {
        return $this->fnaci;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Profes
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
     * Get cprofe
     *
     * @return string
     */
    public function getCprofe()
    {
        return $this->cprofe;
    }
}

