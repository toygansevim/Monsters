<?php
/**
 * Created by PhpStorm.
 * User: toygan
 * Date: 2/8/18
 * Time: 1:30 PM
 */

class zombie extends Monster
{
    protected $brainsEaten;


    function __construct($name = "BloodyZombie")
    {
        $this->setName($name);
        $this->brainsEaten = 0;
    }

    function attack()
    {
        $this->brainsEaten++;
        echo $this->getName() . " is eating some brains " . $this->getBrainsEaten();
    }

    /**
     * @return mixed
     */
    public function getBrainsEaten()
    {
        return $this->brainsEaten;
    }


}