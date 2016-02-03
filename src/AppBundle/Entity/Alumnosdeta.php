<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnosdeta
 *
 * @ORM\Table(name="alumnosdeta")
 * @ORM\Entity
 */
class Alumnosdeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="calum", type="string", length=8, nullable=true)
     */
    private $calum;

    /**
     * @var string
     *
     * @ORM\Column(name="idalum", type="string", length=20, nullable=true)
     */
    private $idalum;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctipo", type="integer", nullable=true)
     */
    private $ctipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuniexp", type="string", length=6, nullable=true)
     */
    private $cmuniexp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fregistro", type="date", nullable=true)
     */
    private $fregistro;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", nullable=true)
     */
    private $genero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnaci", type="date", nullable=true)
     */
    private $fnaci;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuninaci", type="string", length=6, nullable=true)
     */
    private $cmuninaci;

    /**
     * @var string
     *
     * @ORM\Column(name="ape1alum", type="string", length=25, nullable=true)
     */
    private $ape1alum;

    /**
     * @var string
     *
     * @ORM\Column(name="ape2alum", type="string", length=25, nullable=true)
     */
    private $ape2alum;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1alum", type="string", length=25, nullable=true)
     */
    private $nom1alum;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2alum", type="string", length=25, nullable=true)
     */
    private $nom2alum;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio", type="string", length=30, nullable=true)
     */
    private $barrio;

    /**
     * @var string
     *
     * @ORM\Column(name="cmunires", type="string", length=6, nullable=true)
     */
    private $cmunires;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", length=1, nullable=true)
     */
    private $zona;

    /**
     * @var string
     *
     * @ORM\Column(name="comuna", type="string", length=30, nullable=true)
     */
    private $comuna;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="eps", type="string", length=40, nullable=true)
     */
    private $eps;

    /**
     * @var string
     *
     * @ORM\Column(name="ips", type="string", length=40, nullable=true)
     */
    private $ips;

    /**
     * @var string
     *
     * @ORM\Column(name="ars", type="string", length=40, nullable=true)
     */
    private $ars;

    /**
     * @var string
     *
     * @ORM\Column(name="numsisben", type="string", length=15, nullable=true)
     */
    private $numsisben;

    /**
     * @var string
     *
     * @ORM\Column(name="nivelsisben", type="string", length=1, nullable=true)
     */
    private $nivelsisben;

    /**
     * @var string
     *
     * @ORM\Column(name="estrato", type="string", length=1, nullable=true)
     */
    private $estrato;

    /**
     * @var string
     *
     * @ORM\Column(name="rh", type="string", length=4, nullable=true)
     */
    private $rh;

    /**
     * @var string
     *
     * @ORM\Column(name="pobvictconflic", type="string", length=40, nullable=true)
     */
    private $pobvictconflic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fexpul", type="date", nullable=true)
     */
    private $fexpul;

    /**
     * @var string
     *
     * @ORM\Column(name="cmuniexpul", type="string", length=6, nullable=true)
     */
    private $cmuniexpul;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposdecapacidades", type="text", length=65535, nullable=true)
     */
    private $tiposdecapacidades;

    /**
     * @var string
     *
     * @ORM\Column(name="tiposdiscapacidades", type="text", length=65535, nullable=true)
     */
    private $tiposdiscapacidades;

    /**
     * @var string
     *
     * @ORM\Column(name="cabezadefamilia", type="string", nullable=true)
     */
    private $cabezadefamilia;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiariodemadre", type="string", nullable=true)
     */
    private $beneficiariodemadre;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiariofpublicas", type="string", nullable=true)
     */
    private $beneficiariofpublicas;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficiarioheroen", type="string", nullable=true)
     */
    private $beneficiarioheroen;

    /**
     * @var string
     *
     * @ORM\Column(name="etnia", type="string", length=45, nullable=true)
     */
    private $etnia;

    /**
     * @var string
     *
     * @ORM\Column(name="resguardo", type="string", length=45, nullable=true)
     */
    private $resguardo;

    /**
     * @var string
     *
     * @ORM\Column(name="numregalum", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numregalum;



    /**
     * Set calum
     *
     * @param string $calum
     *
     * @return Alumnosdeta
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
     * Set idalum
     *
     * @param string $idalum
     *
     * @return Alumnosdeta
     */
    public function setIdalum($idalum)
    {
        $this->idalum = $idalum;

        return $this;
    }

    /**
     * Get idalum
     *
     * @return string
     */
    public function getIdalum()
    {
        return $this->idalum;
    }

    /**
     * Set ctipo
     *
     * @param integer $ctipo
     *
     * @return Alumnosdeta
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
     * Set cmuniexp
     *
     * @param string $cmuniexp
     *
     * @return Alumnosdeta
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
     * Set fregistro
     *
     * @param \DateTime $fregistro
     *
     * @return Alumnosdeta
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
     * Set genero
     *
     * @param string $genero
     *
     * @return Alumnosdeta
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fnaci
     *
     * @param \DateTime $fnaci
     *
     * @return Alumnosdeta
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
     * Set cmuninaci
     *
     * @param string $cmuninaci
     *
     * @return Alumnosdeta
     */
    public function setCmuninaci($cmuninaci)
    {
        $this->cmuninaci = $cmuninaci;

        return $this;
    }

    /**
     * Get cmuninaci
     *
     * @return string
     */
    public function getCmuninaci()
    {
        return $this->cmuninaci;
    }

    /**
     * Set ape1alum
     *
     * @param string $ape1alum
     *
     * @return Alumnosdeta
     */
    public function setApe1alum($ape1alum)
    {
        $this->ape1alum = $ape1alum;

        return $this;
    }

    /**
     * Get ape1alum
     *
     * @return string
     */
    public function getApe1alum()
    {
        return $this->ape1alum;
    }

    /**
     * Set ape2alum
     *
     * @param string $ape2alum
     *
     * @return Alumnosdeta
     */
    public function setApe2alum($ape2alum)
    {
        $this->ape2alum = $ape2alum;

        return $this;
    }

    /**
     * Get ape2alum
     *
     * @return string
     */
    public function getApe2alum()
    {
        return $this->ape2alum;
    }

    /**
     * Set nom1alum
     *
     * @param string $nom1alum
     *
     * @return Alumnosdeta
     */
    public function setNom1alum($nom1alum)
    {
        $this->nom1alum = $nom1alum;

        return $this;
    }

    /**
     * Get nom1alum
     *
     * @return string
     */
    public function getNom1alum()
    {
        return $this->nom1alum;
    }

    /**
     * Set nom2alum
     *
     * @param string $nom2alum
     *
     * @return Alumnosdeta
     */
    public function setNom2alum($nom2alum)
    {
        $this->nom2alum = $nom2alum;

        return $this;
    }

    /**
     * Get nom2alum
     *
     * @return string
     */
    public function getNom2alum()
    {
        return $this->nom2alum;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Alumnosdeta
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
     * Set barrio
     *
     * @param string $barrio
     *
     * @return Alumnosdeta
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio
     *
     * @return string
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set cmunires
     *
     * @param string $cmunires
     *
     * @return Alumnosdeta
     */
    public function setCmunires($cmunires)
    {
        $this->cmunires = $cmunires;

        return $this;
    }

    /**
     * Get cmunires
     *
     * @return string
     */
    public function getCmunires()
    {
        return $this->cmunires;
    }

    /**
     * Set zona
     *
     * @param string $zona
     *
     * @return Alumnosdeta
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set comuna
     *
     * @param string $comuna
     *
     * @return Alumnosdeta
     */
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;

        return $this;
    }

    /**
     * Get comuna
     *
     * @return string
     */
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Alumnosdeta
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
     * @return Alumnosdeta
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
     * Set email
     *
     * @param string $email
     *
     * @return Alumnosdeta
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
     * Set eps
     *
     * @param string $eps
     *
     * @return Alumnosdeta
     */
    public function setEps($eps)
    {
        $this->eps = $eps;

        return $this;
    }

    /**
     * Get eps
     *
     * @return string
     */
    public function getEps()
    {
        return $this->eps;
    }

    /**
     * Set ips
     *
     * @param string $ips
     *
     * @return Alumnosdeta
     */
    public function setIps($ips)
    {
        $this->ips = $ips;

        return $this;
    }

    /**
     * Get ips
     *
     * @return string
     */
    public function getIps()
    {
        return $this->ips;
    }

    /**
     * Set ars
     *
     * @param string $ars
     *
     * @return Alumnosdeta
     */
    public function setArs($ars)
    {
        $this->ars = $ars;

        return $this;
    }

    /**
     * Get ars
     *
     * @return string
     */
    public function getArs()
    {
        return $this->ars;
    }

    /**
     * Set numsisben
     *
     * @param string $numsisben
     *
     * @return Alumnosdeta
     */
    public function setNumsisben($numsisben)
    {
        $this->numsisben = $numsisben;

        return $this;
    }

    /**
     * Get numsisben
     *
     * @return string
     */
    public function getNumsisben()
    {
        return $this->numsisben;
    }

    /**
     * Set nivelsisben
     *
     * @param string $nivelsisben
     *
     * @return Alumnosdeta
     */
    public function setNivelsisben($nivelsisben)
    {
        $this->nivelsisben = $nivelsisben;

        return $this;
    }

    /**
     * Get nivelsisben
     *
     * @return string
     */
    public function getNivelsisben()
    {
        return $this->nivelsisben;
    }

    /**
     * Set estrato
     *
     * @param string $estrato
     *
     * @return Alumnosdeta
     */
    public function setEstrato($estrato)
    {
        $this->estrato = $estrato;

        return $this;
    }

    /**
     * Get estrato
     *
     * @return string
     */
    public function getEstrato()
    {
        return $this->estrato;
    }

    /**
     * Set rh
     *
     * @param string $rh
     *
     * @return Alumnosdeta
     */
    public function setRh($rh)
    {
        $this->rh = $rh;

        return $this;
    }

    /**
     * Get rh
     *
     * @return string
     */
    public function getRh()
    {
        return $this->rh;
    }

    /**
     * Set pobvictconflic
     *
     * @param string $pobvictconflic
     *
     * @return Alumnosdeta
     */
    public function setPobvictconflic($pobvictconflic)
    {
        $this->pobvictconflic = $pobvictconflic;

        return $this;
    }

    /**
     * Get pobvictconflic
     *
     * @return string
     */
    public function getPobvictconflic()
    {
        return $this->pobvictconflic;
    }

    /**
     * Set fexpul
     *
     * @param \DateTime $fexpul
     *
     * @return Alumnosdeta
     */
    public function setFexpul($fexpul)
    {
        $this->fexpul = $fexpul;

        return $this;
    }

    /**
     * Get fexpul
     *
     * @return \DateTime
     */
    public function getFexpul()
    {
        return $this->fexpul;
    }

    /**
     * Set cmuniexpul
     *
     * @param string $cmuniexpul
     *
     * @return Alumnosdeta
     */
    public function setCmuniexpul($cmuniexpul)
    {
        $this->cmuniexpul = $cmuniexpul;

        return $this;
    }

    /**
     * Get cmuniexpul
     *
     * @return string
     */
    public function getCmuniexpul()
    {
        return $this->cmuniexpul;
    }

    /**
     * Set tiposdecapacidades
     *
     * @param string $tiposdecapacidades
     *
     * @return Alumnosdeta
     */
    public function setTiposdecapacidades($tiposdecapacidades)
    {
        $this->tiposdecapacidades = $tiposdecapacidades;

        return $this;
    }

    /**
     * Get tiposdecapacidades
     *
     * @return string
     */
    public function getTiposdecapacidades()
    {
        return $this->tiposdecapacidades;
    }

    /**
     * Set tiposdiscapacidades
     *
     * @param string $tiposdiscapacidades
     *
     * @return Alumnosdeta
     */
    public function setTiposdiscapacidades($tiposdiscapacidades)
    {
        $this->tiposdiscapacidades = $tiposdiscapacidades;

        return $this;
    }

    /**
     * Get tiposdiscapacidades
     *
     * @return string
     */
    public function getTiposdiscapacidades()
    {
        return $this->tiposdiscapacidades;
    }

    /**
     * Set cabezadefamilia
     *
     * @param string $cabezadefamilia
     *
     * @return Alumnosdeta
     */
    public function setCabezadefamilia($cabezadefamilia)
    {
        $this->cabezadefamilia = $cabezadefamilia;

        return $this;
    }

    /**
     * Get cabezadefamilia
     *
     * @return string
     */
    public function getCabezadefamilia()
    {
        return $this->cabezadefamilia;
    }

    /**
     * Set beneficiariodemadre
     *
     * @param string $beneficiariodemadre
     *
     * @return Alumnosdeta
     */
    public function setBeneficiariodemadre($beneficiariodemadre)
    {
        $this->beneficiariodemadre = $beneficiariodemadre;

        return $this;
    }

    /**
     * Get beneficiariodemadre
     *
     * @return string
     */
    public function getBeneficiariodemadre()
    {
        return $this->beneficiariodemadre;
    }

    /**
     * Set beneficiariofpublicas
     *
     * @param string $beneficiariofpublicas
     *
     * @return Alumnosdeta
     */
    public function setBeneficiariofpublicas($beneficiariofpublicas)
    {
        $this->beneficiariofpublicas = $beneficiariofpublicas;

        return $this;
    }

    /**
     * Get beneficiariofpublicas
     *
     * @return string
     */
    public function getBeneficiariofpublicas()
    {
        return $this->beneficiariofpublicas;
    }

    /**
     * Set beneficiarioheroen
     *
     * @param string $beneficiarioheroen
     *
     * @return Alumnosdeta
     */
    public function setBeneficiarioheroen($beneficiarioheroen)
    {
        $this->beneficiarioheroen = $beneficiarioheroen;

        return $this;
    }

    /**
     * Get beneficiarioheroen
     *
     * @return string
     */
    public function getBeneficiarioheroen()
    {
        return $this->beneficiarioheroen;
    }

    /**
     * Set etnia
     *
     * @param string $etnia
     *
     * @return Alumnosdeta
     */
    public function setEtnia($etnia)
    {
        $this->etnia = $etnia;

        return $this;
    }

    /**
     * Get etnia
     *
     * @return string
     */
    public function getEtnia()
    {
        return $this->etnia;
    }

    /**
     * Set resguardo
     *
     * @param string $resguardo
     *
     * @return Alumnosdeta
     */
    public function setResguardo($resguardo)
    {
        $this->resguardo = $resguardo;

        return $this;
    }

    /**
     * Get resguardo
     *
     * @return string
     */
    public function getResguardo()
    {
        return $this->resguardo;
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
}
