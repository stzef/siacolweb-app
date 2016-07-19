<?php

namespace AppBundle\Entity;

/**
 * Matriculas
 */
class Matriculas
{
    /**
     * @var string
     */
    private $nuevo = 'T';

    /**
     * @var integer
     */
    private $cestamatricula;

    /**
     * @var string
     */
    private $numregalum;

    /**
     * @var string
     */
    private $calum;

    /**
     * @var string
     */
    private $cjorna;

    /**
     * @var string
     */
    private $csede;

    /**
     * @var string
     */
    private $cgrado;

    /**
     * @var string
     */
    private $cgrupo;

    /**
     * @var string
     */
    private $ano;

    /**
     * @var \DateTime
     */
    private $fregistro;

    /**
     * @var string
     */
    private $instprocedencia;

    /**
     * @var string
     */
    private $estacademico;

    /**
     * @var string
     */
    private $motivotraslado;

    /**
     * @var \DateTime
     */
    private $fretiro;

    /**
     * @var integer
     */
    private $cretiro;

    /**
     * @var string
     */
    private $observretiro;

    /**
     * @var string
     */
    private $cmatricula;


    /**
     * Set nuevo
     *
     * @param string $nuevo
     *
     * @return Matriculas
     */
    public function setNuevo($nuevo)
    {
        $this->nuevo = $nuevo;

        return $this;
    }

    /**
     * Get nuevo
     *
     * @return string
     */
    public function getNuevo()
    {
        return $this->nuevo;
    }

    /**
     * Set cestamatricula
     *
     * @param integer $cestamatricula
     *
     * @return Matriculas
     */
    public function setCestamatricula($cestamatricula)
    {
        $this->cestamatricula = $cestamatricula;

        return $this;
    }

    /**
     * Get cestamatricula
     *
     * @return integer
     */
    public function getCestamatricula()
    {
        return $this->cestamatricula;
    }

    /**
     * Set numregalum
     *
     * @param string $numregalum
     *
     * @return Matriculas
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
     * Set calum
     *
     * @param string $calum
     *
     * @return Matriculas
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
     * Set cjorna
     *
     * @param string $cjorna
     *
     * @return Matriculas
     */
    public function setCjorna($cjorna)
    {
        $this->cjorna = $cjorna;

        return $this;
    }

    /**
     * Get cjorna
     *
     * @return string
     */
    public function getCjorna()
    {
        return $this->cjorna;
    }

    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Matriculas
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
     * Set cgrado
     *
     * @param string $cgrado
     *
     * @return Matriculas
     */
    public function setCgrado($cgrado)
    {
        $this->cgrado = $cgrado;

        return $this;
    }

    /**
     * Get cgrado
     *
     * @return string
     */
    public function getCgrado()
    {
        return $this->cgrado;
    }

    /**
     * Set cgrupo
     *
     * @param string $cgrupo
     *
     * @return Matriculas
     */
    public function setCgrupo($cgrupo)
    {
        $this->cgrupo = $cgrupo;

        return $this;
    }

    /**
     * Get cgrupo
     *
     * @return string
     */
    public function getCgrupo()
    {
        return $this->cgrupo;
    }

    /**
     * Set ano
     *
     * @param string $ano
     *
     * @return Matriculas
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return string
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set fregistro
     *
     * @param \DateTime $fregistro
     *
     * @return Matriculas
     */
    public function setFregistro($fregistro)
    {
        $this->fregistro = $fregistro;

        return $this;
    }

    /**
     * Get fregistro
     *
     * @return \DateTime
     */
    public function getFregistro()
    {
        return $this->fregistro;
    }

    /**
     * Set instprocedencia
     *
     * @param string $instprocedencia
     *
     * @return Matriculas
     */
    public function setInstprocedencia($instprocedencia)
    {
        $this->instprocedencia = $instprocedencia;

        return $this;
    }

    /**
     * Get instprocedencia
     *
     * @return string
     */
    public function getInstprocedencia()
    {
        return $this->instprocedencia;
    }

    /**
     * Set estacademico
     *
     * @param string $estacademico
     *
     * @return Matriculas
     */
    public function setEstacademico($estacademico)
    {
        $this->estacademico = $estacademico;

        return $this;
    }

    /**
     * Get estacademico
     *
     * @return string
     */
    public function getEstacademico()
    {
        return $this->estacademico;
    }

    /**
     * Set motivotraslado
     *
     * @param string $motivotraslado
     *
     * @return Matriculas
     */
    public function setMotivotraslado($motivotraslado)
    {
        $this->motivotraslado = $motivotraslado;

        return $this;
    }

    /**
     * Get motivotraslado
     *
     * @return string
     */
    public function getMotivotraslado()
    {
        return $this->motivotraslado;
    }

    /**
     * Set fretiro
     *
     * @param \DateTime $fretiro
     *
     * @return Matriculas
     */
    public function setFretiro($fretiro)
    {
        $this->fretiro = $fretiro;

        return $this;
    }

    /**
     * Get fretiro
     *
     * @return \DateTime
     */
    public function getFretiro()
    {
        return $this->fretiro;
    }

    /**
     * Set cretiro
     *
     * @param integer $cretiro
     *
     * @return Matriculas
     */
    public function setCretiro($cretiro)
    {
        $this->cretiro = $cretiro;

        return $this;
    }

    /**
     * Get cretiro
     *
     * @return integer
     */
    public function getCretiro()
    {
        return $this->cretiro;
    }

    /**
     * Set observretiro
     *
     * @param string $observretiro
     *
     * @return Matriculas
     */
    public function setObservretiro($observretiro)
    {
        $this->observretiro = $observretiro;

        return $this;
    }

    /**
     * Get observretiro
     *
     * @return string
     */
    public function getObservretiro()
    {
        return $this->observretiro;
    }

    /**
     * Get cmatricula
     *
     * @return string
     */
    public function getCmatricula()
    {
        return $this->cmatricula;
    }
}

