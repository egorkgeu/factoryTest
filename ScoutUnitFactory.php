<?php
include 'UnitFactoryInterface.php';
include 'ScoutUnit.php';

class ScoutUnitFactory implements UnitFactoryInterface
{

    public function createUnit():UnitInterface
    {
        return new ScoutUnit();
    }
}