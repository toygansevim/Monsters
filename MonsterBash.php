<?php
/**
 * Created by PhpStorm.
 * User: Snow Tyler Bezera
 * Date: 2/8/2018
 * Time: 1:10 PM
 */

include 'Monster.php';
include 'vampire.php';
include 'zombie.php';

$monster = new Monster();
$monster1 = new Monster('bob');

$monster->attack();
$monster1->attack();

$monster->setName('bob2');

echo $monster->getName();
echo $monster1->getName();

$vampire1 = new Vampire('Toygan');
$zombie = new zombie('ToyganZombie');
$vampire2 = new Vampire();
$zombie1 = new zombie();


echo "Vampire time<br>";
echo $vampire1->getName() . $vampire1->getVictims() . "<br>";
$vampire1->attack();
echo $vampire1->getName() . $vampire1->getVictims() . "<br>";

echo "zombie time<br>";
$zombie->attack();
echo $zombie->getName() . $zombie->getBrainsEaten() . "<br>";
$zombie1->attack();
$zombie1->attack();
echo $zombie1->getName() . $zombie1->getBrainsEaten() . "<br>";

