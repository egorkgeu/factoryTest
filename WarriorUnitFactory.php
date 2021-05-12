<?php
include "WarriorUnit.php";

class WarriorUnitFactory implements UnitFactoryInterface
{

    public function createUnit()
    {
        return new WarriorUnit();
    }
}