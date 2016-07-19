<?php

namespace AppBundle\Entity;

/**
 * Funcionarios
 */
class Funcionarios
{
    /**
     * @var integer
     */
    private $ctipo;

    /**
     * @var string
     */
    private $idfunci;

    /**
     * @var string
     */
    private $ape1funci;

    /**
     * @var string
     */
    private $ape2funci;

    /**
     * @var string
     */
    private $nom1funci;

    /**
     * @var string
     */
    private $nom2funci;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $email;

    /**
     * @var boolean
     */
    private $activo = '1';

    /**
     * @var string
     */
    private $cfunci;


    /**
     * Set ctipo
     *
     * @param integer $ctipo
     *
     * @return Funcionarios
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
     * Set idfunci
     *
     * @param string $idfunci
     *
     * @return Funcionarios
     */
    public function setIdfunci($idfunci)
    {
        $this->idfunci = $idfunci;

        return $this;
    }

    /**
     * Get idfunci
     *
     * @return string
     */
    public function getIdfunci()
    {
        return $this->idfunci;
    }

    /**
     * Set ape1funci
     *
     * @param string $ape1funci
     *
     * @return Funcionarios
     */
    public function setApe1funci($ape1funci)
    {
        $this->ape1funci = $ape1funci;

        return $this;
    }

    /**
     * Get ape1funci
     *
     * @return string
     */
    public function getApe1funci()
    {
        return $this->ape1funci;
    }

    /**
     * Set ape2funci
     *
     * @param string $ape2funci
     *
     * @return Funcionarios
     */
    public function setApe2funci($ape2funci)
    {
        $this->ape2funci = $ape2funci;

        return $this;
    }

    /**
     * Get ape2funci
     *
     * @return string
     */
    public function getApe2funci()
    {
        return $this->ape2funci;
    }

    /**
     * Set nom1funci
     *
     * @param string $nom1funci
     *
     * @return Funcionarios
     */
    public function setNom1funci($nom1funci)
    {
        $this->nom1funci = $nom1funci;

        return $this;
    }

    /**
     * Get nom1funci
     *
     * @return string
     */
    public function getNom1funci()
    {
        return $this->nom1funci;
    }

    /**
     * Set nom2funci
     *
     * @param string $nom2funci
     *
     * @return Funcionarios
     */
    public function setNom2funci($nom2funci)
    {
        $this->nom2funci = $nom2funci;

        return $this;
    }

    /**
     * Get nom2funci
     *
     * @return string
     */
    public function getNom2funci()
    {
        return $this->nom2funci;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Funcionarios
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
     * Set email
     *
     * @param string $email
     *
     * @return Funcionarios
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Funcionarios
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
     * Get cfunci
     *
     * @return string
     */
    public function getCfunci()
    {
        return $this->cfunci;
    }
}

