<?php
include 'Units/WarriorUnit.php';


class WarriorUnitFactory implements UnitFactoryInterface
{

    public function createUnit():UnitInterface
    {
        return new WarriorUnit();
    }
}