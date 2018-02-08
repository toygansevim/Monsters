<?php
/**
 * Created by PhpStorm.
 * User: Snow Tyler Bezera
 * Date: 2/8/2018
 * Time: 1:06 PM
 */

class Monster
{
    protected $name;

    function __construct($name = "DefaultMonster")
    {
         $this->setName($name);
    }

    function attack()
    {
        echo $this->getName() . " is attacking.";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
