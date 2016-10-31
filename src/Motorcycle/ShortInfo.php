<?php

namespace Motorcycle;

trait ShortInfo
{
    /**
     * @return string
     */
    public function printShortInfo()
    {
        echo $this->getName().' '.$this->getModel()."<br>\n";
    }
}
