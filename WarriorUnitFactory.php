<?php
include "WarriorUnit.php";

class WarriorUnitFactory implements UnitFactory
{

    public function createUnit()
    {
        return new WarriorUnit();
    }
}