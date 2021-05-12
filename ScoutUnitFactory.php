<?php
include 'UnitFactoryInterface.php';
include 'ScoutUnit.php';

class ScoutUnitFactory implements UnitFactoryInterface
{

    public function createUnit()
    {
        return new ScoutUnit();
    }
}