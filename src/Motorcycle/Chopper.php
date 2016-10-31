<?php

namespace Motorcycle;

class Chopper implements MotorcycleInterface
{
    use ShortInfo;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $pilot;

    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param $pilot
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;
    }

    /**
     * @return mixed
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * @param $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function printInfo()
    {
        $info = 'Name: '.$this->getName()."<br>\n";
        $info .= 'Model: '.$this->getModel()."<br>\n";
        $info .= 'Pilot: '.$this->getPilot()."<br>\n";
        $info .= 'Max speed: '.$this->getMaxSpeed()."km/h <br>\n";
        print_r($info);
    }
}
