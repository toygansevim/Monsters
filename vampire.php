<?php
/**
 * Created by PhpStorm.
 * User: toygan
 * Date: 2/8/18
 * Time: 1:27 PM
 */

class Vampire extends Monster
{
    protected $victims;

    public function __construct($name = "DefaultVampire")
    {
        $this->setName($name);
        $this->victims = 0;
    }

    function attack()
    {
        $this->victims = $this->victims + 1;
        echo $this->getName() . " has attacked and killed " . $this->getVictims() . " victims.";
    }

    /**
     * @return mixed
     */
    public function getVictims()
    {
        return $this->victims;
    }
}