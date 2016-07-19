<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colegios
 *
 * @ORM\Table(name="colegios")
 * @ORM\Entity
 */
class Colegios
{
    /**
     * @var string
     *
     * @ORM\Column(name="ccole", type="string", length=9, nullable=false)
     */
    private $ccole;

    /**
     * @var string
     *
     * @ORM\Column(name="ncole", type="string", length=80, nullable=true)
     */
    private $ncole;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=10, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=60, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="dv", type="string", length=1, nullable=true)
     */
    private $dv;

    /**
     * @var string
     *
     * @ORM\Column(name="cdepto", type="string", length=4, nullable=false)
     */
    private $cdepto;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuni", type="string", length=6, nullable=false)
     */
    private $cmuni;

    /**
     * @var string
     *
     * @ORM\Column(name="anoelect", type="string", length=5, nullable=false)
     */
    private $anoelect;

    /**
     * @var string
     *
     * @ORM\Column(name="cdanenuevo", type="string", length=20, nullable=false)
     */
    private $cdanenuevo;

    /**
     * @var string
     *
     * @ORM\Column(name="cdaneantiguo", type="string", length=20, nullable=false)
     */
    private $cdaneantiguo;

    /**
     * @var string
     *
     * @ORM\Column(name="consecutivo", type="string", length=20, nullable=false)
     */
    private $consecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="rector", type="string", length=80, nullable=true)
     */
    private $rector;

    /**
     * @var string
     *
     * @ORM\Column(name="idrector", type="string", length=12, nullable=true)
     */
    private $idrector;

    /**
     * @var string
     *
     * @ORM\Column(name="secretario", type="string", length=80, nullable=true)
     */
    private $secretario;

    /**
     * @var string
     *
     * @ORM\Column(name="idsecretario", type="string", length=12, nullable=false)
     */
    private $idsecretario;

    /**
     * @var string
     *
     * @ORM\Column(name="nrapido", type="string", length=20, nullable=true)
     */
    private $nrapido;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cerrado", type="boolean", nullable=true)
     */
    private $cerrado;

    /**
     * @var string
     *
     * @ORM\Column(name="logo1", type="string", length=60, nullable=true)
     */
    private $logo1;

    /**
     * @var string
     *
     * @ORM\Column(name="logo2", type="string", length=60, nullable=true)
     */
    private $logo2;

    /**
     * @var string
     *
     * @ORM\Column(name="logo3", type="string", length=100, nullable=true)
     */
    private $logo3;

    /**
     * @var string
     *
     * @ORM\Column(name="logo4", type="string", length=60, nullable=true)
     */
    private $logo4;

    /**
     * @var string
     *
     * @ORM\Column(name="logo5", type="string", length=60, nullable=true)
     */
    private $logo5;

    /**
     * @var string
     *
     * @ORM\Column(name="banner1", type="string", length=100, nullable=true)
     */
    private $banner1;

    /**
     * @var string
     *
     * @ORM\Column(name="banner2", type="string", length=100, nullable=true)
     */
    private $banner2;

    /**
     * @var string
     *
     * @ORM\Column(name="banner3", type="string", length=100, nullable=true)
     */
    private $banner3;

    /**
     * @var string
     *
     * @ORM\Column(name="banner4", type="string", length=100, nullable=true)
     */
    private $banner4;

    /**
     * @var string
     *
     * @ORM\Column(name="banner5", type="string", length=100, nullable=true)
     */
    private $banner5;

    /**
     * @var string
     *
     * @ORM\Column(name="emailpnotas", type="string", length=80, nullable=false)
     */
    private $emailpnotas;

    /**
     * @var string
     *
     * @ORM\Column(name="modulos", type="string", length=20, nullable=true)
     */
    private $modulos;

    /**
     * @var string
     *
     * @ORM\Column(name="repositorio", type="string", length=50, nullable=true)
     */
    private $repositorio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ccole
     *
     * @param string $ccole
     *
     * @return Colegios
     */
    public function setCcole($ccole)
    {
        $this->ccole = $ccole;

        return $this;
    }

    /**
     * Get ccole
     *
     * @return string
     */
    public function getCcole()
    {
        return $this->ccole;
    }

    /**
     * Set ncole
     *
     * @param string $ncole
     *
     * @return Colegios
     */
    public function setNcole($ncole)
    {
        $this->ncole = $ncole;

        return $this;
    }

    /**
     * Get ncole
     *
     * @return string
     */
    public function getNcole()
    {
        return $this->ncole;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return Colegios
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Colegios
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Colegios
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set dv
     *
     * @param string $dv
     *
     * @return Colegios
     */
    public function setDv($dv)
    {
        $this->dv = $dv;

        return $this;
    }

    /**
     * Get dv
     *
     * @return string
     */
    public function getDv()
    {
        return $this->dv;
    }

    /**
     * Set cdepto
     *
     * @param string $cdepto
     *
     * @return Colegios
     */
    public function setCdepto($cdepto)
    {
        $this->cdepto = $cdepto;

        return $this;
    }

    /**
     * Get cdepto
     *
     * @return string
     */
    public function getCdepto()
    {
        return $this->cdepto;
    }

    /**
     * Set cmuni
     *
     * @param string $cmuni
     *
     * @return Colegios
     */
    public function setCmuni($cmuni)
    {
        $this->cmuni = $cmuni;

        return $this;
    }

    /**
     * Get cmuni
     *
     * @return string
     */
    public function getCmuni()
    {
        return $this->cmuni;
    }

    /**
     * Set anoelect
     *
     * @param string $anoelect
     *
     * @return Colegios
     */
    public function setAnoelect($anoelect)
    {
        $this->anoelect = $anoelect;

        return $this;
    }

    /**
     * Get anoelect
     *
     * @return string
     */
    public function getAnoelect()
    {
        return $this->anoelect;
    }

    /**
     * Set cdanenuevo
     *
     * @param string $cdanenuevo
     *
     * @return Colegios
     */
    public function setCdanenuevo($cdanenuevo)
    {
        $this->cdanenuevo = $cdanenuevo;

        return $this;
    }

    /**
     * Get cdanenuevo
     *
     * @return string
     */
    public function getCdanenuevo()
    {
        return $this->cdanenuevo;
    }

    /**
     * Set cdaneantiguo
     *
     * @param string $cdaneantiguo
     *
     * @return Colegios
     */
    public function setCdaneantiguo($cdaneantiguo)
    {
        $this->cdaneantiguo = $cdaneantiguo;

        return $this;
    }

    /**
     * Get cdaneantiguo
     *
     * @return string
     */
    public function getCdaneantiguo()
    {
        return $this->cdaneantiguo;
    }

    /**
     * Set consecutivo
     *
     * @param string $consecutivo
     *
     * @return Colegios
     */
    public function setConsecutivo($consecutivo)
    {
        $this->consecutivo = $consecutivo;

        return $this;
    }

    /**
     * Get consecutivo
     *
     * @return string
     */
    public function getConsecutivo()
    {
        return $this->consecutivo;
    }

    /**
     * Set rector
     *
     * @param string $rector
     *
     * @return Colegios
     */
    public function setRector($rector)
    {
        $this->rector = $rector;

        return $this;
    }

    /**
     * Get rector
     *
     * @return string
     */
    public function getRector()
    {
        return $this->rector;
    }

    /**
     * Set idrector
     *
     * @param string $idrector
     *
     * @return Colegios
     */
    public function setIdrector($idrector)
    {
        $this->idrector = $idrector;

        return $this;
    }

    /**
     * Get idrector
     *
     * @return string
     */
    public function getIdrector()
    {
        return $this->idrector;
    }

    /**
     * Set secretario
     *
     * @param string $secretario
     *
     * @return Colegios
     */
    public function setSecretario($secretario)
    {
        $this->secretario = $secretario;

        return $this;
    }

    /**
     * Get secretario
     *
     * @return string
     */
    public function getSecretario()
    {
        return $this->secretario;
    }

    /**
     * Set idsecretario
     *
     * @param string $idsecretario
     *
     * @return Colegios
     */
    public function setIdsecretario($idsecretario)
    {
        $this->idsecretario = $idsecretario;

        return $this;
    }

    /**
     * Get idsecretario
     *
     * @return string
     */
    public function getIdsecretario()
    {
        return $this->idsecretario;
    }

    /**
     * Set nrapido
     *
     * @param string $nrapido
     *
     * @return Colegios
     */
    public function setNrapido($nrapido)
    {
        $this->nrapido = $nrapido;

        return $this;
    }

    /**
     * Get nrapido
     *
     * @return string
     */
    public function getNrapido()
    {
        return $this->nrapido;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Colegios
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
     * Set cerrado
     *
     * @param boolean $cerrado
     *
     * @return Colegios
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }

    /**
     * Set logo1
     *
     * @param string $logo1
     *
     * @return Colegios
     */
    public function setLogo1($logo1)
    {
        $this->logo1 = $logo1;

        return $this;
    }

    /**
     * Get logo1
     *
     * @return string
     */
    public function getLogo1()
    {
        return $this->logo1;
    }

    /**
     * Set logo2
     *
     * @param string $logo2
     *
     * @return Colegios
     */
    public function setLogo2($logo2)
    {
        $this->logo2 = $logo2;

        return $this;
    }

    /**
     * Get logo2
     *
     * @return string
     */
    public function getLogo2()
    {
        return $this->logo2;
    }

    /**
     * Set logo3
     *
     * @param string $logo3
     *
     * @return Colegios
     */
    public function setLogo3($logo3)
    {
        $this->logo3 = $logo3;

        return $this;
    }

    /**
     * Get logo3
     *
     * @return string
     */
    public function getLogo3()
    {
        return $this->logo3;
    }

    /**
     * Set logo4
     *
     * @param string $logo4
     *
     * @return Colegios
     */
    public function setLogo4($logo4)
    {
        $this->logo4 = $logo4;

        return $this;
    }

    /**
     * Get logo4
     *
     * @return string
     */
    public function getLogo4()
    {
        return $this->logo4;
    }

    /**
     * Set logo5
     *
     * @param string $logo5
     *
     * @return Colegios
     */
    public function setLogo5($logo5)
    {
        $this->logo5 = $logo5;

        return $this;
    }

    /**
     * Get logo5
     *
     * @return string
     */
    public function getLogo5()
    {
        return $this->logo5;
    }

    /**
     * Set banner1
     *
     * @param string $banner1
     *
     * @return Colegios
     */
    public function setBanner1($banner1)
    {
        $this->banner1 = $banner1;

        return $this;
    }

    /**
     * Get banner1
     *
     * @return string
     */
    public function getBanner1()
    {
        return $this->banner1;
    }

    /**
     * Set banner2
     *
     * @param string $banner2
     *
     * @return Colegios
     */
    public function setBanner2($banner2)
    {
        $this->banner2 = $banner2;

        return $this;
    }

    /**
     * Get banner2
     *
     * @return string
     */
    public function getBanner2()
    {
        return $this->banner2;
    }

    /**
     * Set banner3
     *
     * @param string $banner3
     *
     * @return Colegios
     */
    public function setBanner3($banner3)
    {
        $this->banner3 = $banner3;

        return $this;
    }

    /**
     * Get banner3
     *
     * @return string
     */
    public function getBanner3()
    {
        return $this->banner3;
    }

    /**
     * Set banner4
     *
     * @param string $banner4
     *
     * @return Colegios
     */
    public function setBanner4($banner4)
    {
        $this->banner4 = $banner4;

        return $this;
    }

    /**
     * Get banner4
     *
     * @return string
     */
    public function getBanner4()
    {
        return $this->banner4;
    }

    /**
     * Set banner5
     *
     * @param string $banner5
     *
     * @return Colegios
     */
    public function setBanner5($banner5)
    {
        $this->banner5 = $banner5;

        return $this;
    }

    /**
     * Get banner5
     *
     * @return string
     */
    public function getBanner5()
    {
        return $this->banner5;
    }

    /**
     * Set emailpnotas
     *
     * @param string $emailpnotas
     *
     * @return Colegios
     */
    public function setEmailpnotas($emailpnotas)
    {
        $this->emailpnotas = $emailpnotas;

        return $this;
    }

    /**
     * Get emailpnotas
     *
     * @return string
     */
    public function getEmailpnotas()
    {
        return $this->emailpnotas;
    }

    /**
     * Set modulos
     *
     * @param string $modulos
     *
     * @return Colegios
     */
    public function setModulos($modulos)
    {
        $this->modulos = $modulos;

        return $this;
    }

    /**
     * Get modulos
     *
     * @return string
     */
    public function getModulos()
    {
        return $this->modulos;
    }

    /**
     * Set repositorio
     *
     * @param string $repositorio
     *
     * @return Colegios
     */
    public function setRepositorio($repositorio)
    {
        $this->repositorio = $repositorio;

        return $this;
    }

    /**
     * Get repositorio
     *
     * @return string
     */
    public function getRepositorio()
    {
        return $this->repositorio;
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
