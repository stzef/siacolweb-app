<?php

namespace AppBundle\Entity;

/**
 * Acudientes
 */
class Acudientes
{
    /**
     * @var string
     */
    private $numregalum;

    /**
     * @var integer
     */
    private $idfamiliar;

    /**
     * @var integer
     */
    private $ctipo;

    /**
     * @var string
     */
    private $ape1familiar;

    /**
     * @var string
     */
    private $ape2familiar;

    /**
     * @var string
     */
    private $nom1familiar;

    /**
     * @var string
     */
    private $nom2familiar;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $cdeptoexpe;

    /**
     * @var string
     */
    private $cmuniexp;

    /**
     * @var integer
     */
    private $parentesco;

    /**
     * @var string
     */
    private $acudiente;

    /**
     * @var string
     */
    private $profesion;

    /**
     * @var string
     */
    private $ocupacion;

    /**
     * @var integer
     */
    private $cfamiliar;


    /**
     * Set numregalum
     *
     * @param string $numregalum
     *
     * @return Acudientes
     */
    public function setNumregalum($numregalum)
    {
        $this->numregalum = $numregalum;

        return $this;
    }

    /**
     * Get numregalum
     *
     * @return string
     */
    public function getNumregalum()
    {
        return $this->numregalum;
    }

    /**
     * Set idfamiliar
     *
     * @param integer $idfamiliar
     *
     * @return Acudientes
     */
    public function setIdfamiliar($idfamiliar)
    {
        $this->idfamiliar = $idfamiliar;

        return $this;
    }

    /**
     * Get idfamiliar
     *
     * @return integer
     */
    public function getIdfamiliar()
    {
        return $this->idfamiliar;
    }

    /**
     * Set ctipo
     *
     * @param integer $ctipo
     *
     * @return Acudientes
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
     * Set ape1familiar
     *
     * @param string $ape1familiar
     *
     * @return Acudientes
     */
    public function setApe1familiar($ape1familiar)
    {
        $this->ape1familiar = $ape1familiar;

        return $this;
    }

    /**
     * Get ape1familiar
     *
     * @return string
     */
    public function getApe1familiar()
    {
        return $this->ape1familiar;
    }

    /**
     * Set ape2familiar
     *
     * @param string $ape2familiar
     *
     * @return Acudientes
     */
    public function setApe2familiar($ape2familiar)
    {
        $this->ape2familiar = $ape2familiar;

        return $this;
    }

    /**
     * Get ape2familiar
     *
     * @return string
     */
    public function getApe2familiar()
    {
        return $this->ape2familiar;
    }

    /**
     * Set nom1familiar
     *
     * @param string $nom1familiar
     *
     * @return Acudientes
     */
    public function setNom1familiar($nom1familiar)
    {
        $this->nom1familiar = $nom1familiar;

        return $this;
    }

    /**
     * Get nom1familiar
     *
     * @return string
     */
    public function getNom1familiar()
    {
        return $this->nom1familiar;
    }

    /**
     * Set nom2familiar
     *
     * @param string $nom2familiar
     *
     * @return Acudientes
     */
    public function setNom2familiar($nom2familiar)
    {
        $this->nom2familiar = $nom2familiar;

        return $this;
    }

    /**
     * Get nom2familiar
     *
     * @return string
     */
    public function getNom2familiar()
    {
        return $this->nom2familiar;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Acudientes
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
     * Set celular
     *
     * @param string $celular
     *
     * @return Acudientes
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set cdeptoexpe
     *
     * @param string $cdeptoexpe
     *
     * @return Acudientes
     */
    public function setCdeptoexpe($cdeptoexpe)
    {
        $this->cdeptoexpe = $cdeptoexpe;

        return $this;
    }

    /**
     * Get cdeptoexpe
     *
     * @return string
     */
    public function getCdeptoexpe()
    {
        return $this->cdeptoexpe;
    }

    /**
     * Set cmuniexp
     *
     * @param string $cmuniexp
     *
     * @return Acudientes
     */
    public function setCmuniexp($cmuniexp)
    {
        $this->cmuniexp = $cmuniexp;

        return $this;
    }

    /**
     * Get cmuniexp
     *
     * @return string
     */
    public function getCmuniexp()
    {
        return $this->cmuniexp;
    }

    /**
     * Set parentesco
     *
     * @param integer $parentesco
     *
     * @return Acudientes
     */
    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;

        return $this;
    }

    /**
     * Get parentesco
     *
     * @return integer
     */
    public function getParentesco()
    {
        return $this->parentesco;
    }

    /**
     * Set acudiente
     *
     * @param string $acudiente
     *
     * @return Acudientes
     */
    public function setAcudiente($acudiente)
    {
        $this->acudiente = $acudiente;

        return $this;
    }

    /**
     * Get acudiente
     *
     * @return string
     */
    public function getAcudiente()
    {
        return $this->acudiente;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     *
     * @return Acudientes
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     *
     * @return Acudientes
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Get cfamiliar
     *
     * @return integer
     */
    public function getCfamiliar()
    {
        return $this->cfamiliar;
    }
}

