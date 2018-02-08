<?php
/**
 * Created by PhpStorm.
 * User: Snow Tyler Bezera
 * Date: 2/8/2018
 * Time: 1:10 PM
 */

include 'Monster.php';
include 'Vampire.php';

$monster = new Monster();
$monster1 = new Monster('bob');

$monster->attack();
$monster1->attack();

$monster->setName('bob2');

echo $monster->getName();
echo $monster1->getName();

$vampire1 = new Vampire('Toygan');
$vampire2 = new Vampire();

echo $vampire1->getName() . $vampire1->getVictims() . "<br>";
echo $vampire1->getName() . $vampire1->getVictims() . "<br>";