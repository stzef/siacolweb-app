<?php

namespace AppBundle\Entity;

/**
 * Horario
 */
class Horario
{
    /**
     * @var string
     */
    private $csede;

    /**
     * @var string
     */
    private $csalon;

    /**
     * @var string
     */
    private $cgrupo;

    /**
     * @var string
     */
    private $chora;

    /**
     * @var string
     */
    private $cprofe;

    /**
     * @var string
     */
    private $cmate;

    /**
     * @var string
     */
    private $cdia;

    /**
     * @var string
     */
    private $ithorario;


    /**
     * Set csede
     *
     * @param string $csede
     *
     * @return Horario
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
     * Set csalon
     *
     * @param string $csalon
     *
     * @return Horario
     */
    public function setCsalon($csalon)
    {
        $this->csalon = $csalon;

        return $this;
    }

    /**
     * Get csalon
     *
     * @return string
     */
    public function getCsalon()
    {
        return $this->csalon;
    }

    /**
     * Set cgrupo
     *
     * @param string $cgrupo
     *
     * @return Horario
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
     * Set chora
     *
     * @param string $chora
     *
     * @return Horario
     */
    public function setChora($chora)
    {
        $this->chora = $chora;

        return $this;
    }

    /**
     * Get chora
     *
     * @return string
     */
    public function getChora()
    {
        return $this->chora;
    }

    /**
     * Set cprofe
     *
     * @param string $cprofe
     *
     * @return Horario
     */
    public function setCprofe($cprofe)
    {
        $this->cprofe = $cprofe;

        return $this;
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

    /**
     * Set cmate
     *
     * @param string $cmate
     *
     * @return Horario
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
     * Set cdia
     *
     * @param string $cdia
     *
     * @return Horario
     */
    public function setCdia($cdia)
    {
        $this->cdia = $cdia;

        return $this;
    }

    /**
     * Get cdia
     *
     * @return string
     */
    public function getCdia()
    {
        return $this->cdia;
    }

    /**
     * Get ithorario
     *
     * @return string
     */
    public function getIthorario()
    {
        return $this->ithorario;
    }
}

