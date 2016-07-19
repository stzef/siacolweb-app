<?php

namespace AppBundle\Entity;

/**
 * Parametros
 */
class Parametros
{
    /**
     * @var string
     */
    private $nparam;

    /**
     * @var string
     */
    private $param1;

    /**
     * @var string
     */
    private $param2;

    /**
     * @var string
     */
    private $param3;

    /**
     * @var string
     */
    private $cparam;


    /**
     * Set nparam
     *
     * @param string $nparam
     *
     * @return Parametros
     */
    public function setNparam($nparam)
    {
        $this->nparam = $nparam;

        return $this;
    }

    /**
     * Get nparam
     *
     * @return string
     */
    public function getNparam()
    {
        return $this->nparam;
    }

    /**
     * Set param1
     *
     * @param string $param1
     *
     * @return Parametros
     */
    public function setParam1($param1)
    {
        $this->param1 = $param1;

        return $this;
    }

    /**
     * Get param1
     *
     * @return string
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * Set param2
     *
     * @param string $param2
     *
     * @return Parametros
     */
    public function setParam2($param2)
    {
        $this->param2 = $param2;

        return $this;
    }

    /**
     * Get param2
     *
     * @return string
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * Set param3
     *
     * @param string $param3
     *
     * @return Parametros
     */
    public function setParam3($param3)
    {
        $this->param3 = $param3;

        return $this;
    }

    /**
     * Get param3
     *
     * @return string
     */
    public function getParam3()
    {
        return $this->param3;
    }

    /**
     * Get cparam
     *
     * @return string
     */
    public function getCparam()
    {
        return $this->cparam;
    }
}

