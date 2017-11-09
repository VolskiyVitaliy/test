<?php

class Cat extends Animal
{
    function meow(){
        return "Cat ".$this->getName()." is sayig meow";
    }
}