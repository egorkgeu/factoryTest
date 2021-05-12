<?php
include 'UnitFactory.php';
include 'ScoutUnit.php';

class ScoutUnitFactory implements UnitFactory
{

    public function createUnit()
    {
        return new ScoutUnit();
    }
}