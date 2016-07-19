<?php

namespace AppBundle\Entity;

/**
 * Circulares
 */
class Circulares
{
    /**
     * @var \DateTime
     */
    private $fcircu;

    /**
     * @var string
     */
    private $de;

    /**
     * @var string
     */
    private $para;

    /**
     * @var string
     */
    private $asunto;

    /**
     * @var string
     */
    private $texto;

    /**
     * @var string
     */
    private $ccircu;


    /**
     * Set fcircu
     *
     * @param \DateTime $fcircu
     *
     * @return Circulares
     */
    public function setFcircu($fcircu)
    {
        $this->fcircu = $fcircu;

        return $this;
    }

    /**
     * Get fcircu
     *
     * @return \DateTime
     */
    public function getFcircu()
    {
        return $this->fcircu;
    }

    /**
     * Set de
     *
     * @param string $de
     *
     * @return Circulares
     */
    public function setDe($de)
    {
        $this->de = $de;

        return $this;
    }

    /**
     * Get de
     *
     * @return string
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set para
     *
     * @param string $para
     *
     * @return Circulares
     */
    public function setPara($para)
    {
        $this->para = $para;

        return $this;
    }

    /**
     * Get para
     *
     * @return string
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     *
     * @return Circulares
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set texto
     *
     * @param string $texto
     *
     * @return Circulares
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
     * Get ccircu
     *
     * @return string
     */
    public function getCcircu()
    {
        return $this->ccircu;
    }
}

