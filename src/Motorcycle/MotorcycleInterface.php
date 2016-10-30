<?php

namespace Motorcycle;

interface MotorcycleInterface
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $name
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getModel();

    /**
     * @param $model
     */
    public function setModel($model);

    /**
     * @return mixed
     */
    public function getMaxSpeed();

    /**
     * @param $maxSpeed
     */
    public function setMaxSpeed($maxSpeed);

    /**
     * @return mixed
     */
    public function getPilot();

    /**
     * @param $pilot
     */
    public function setPilot($pilot);

    /**
     * @return mixed
     */
    public function printInfo();
}