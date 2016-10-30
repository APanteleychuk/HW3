<?php

namespace Motorcycle;

class Sport implements MotorcycleInterface
{
    use ShortInfo;
    protected $name;
    protected $model;
    protected $pilot;
    protected $maxSpeed;
    protected $numberClass;
    protected $typeByNumberClass;

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

    /**
     * @return mixed
     */
    public function getNumberClass()
    {
        return $this->numberClass;
    }

    /**
     * @param $numberClass
     */
    public function setNumberClass($numberClass)
    {
        $this->numberClass = $numberClass;
        $this->setTypeByNumberClass($numberClass);
    }

    /**
     * @return mixed
     */
    public function getTypeByNumberClass()
    {
        return $this->typeByNumberClass;
    }

    protected function setTypeByNumberClass($number)
    {
        switch ($number) {
            case 1:
                $type = 'MotoGP';
                break;
            case 2:
                $type = 'Moto2';
                break;
            case 3:
                $type = 'Moto3';
                break;
            default :
                $type = 'none';
        }
        $this->typeByNumberClass = $type;
    }

    public function printInfo()
    {
        $info = 'Name: ' . $this->getName() . "<br>\n";
        $info .= 'Model: ' . $this->getModel() . "<br>\n";
        $info .= 'Max speed: ' . $this->getMaxSpeed() . "km/h <br>\n";
        $info .= 'Pilot: ' . $this->getPilot() . "<br>\n";
        $info .= 'Number Class: ' . $this->getNumberClass() . "<br>\n";
        $info .= 'Name Class: ' . $this->getTypeByNumberClass() . "<br>\n";
        print_r($info);
    }
}