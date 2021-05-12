<?php
include 'Units/WorkerUnit.php';

class WorkerUnitFactory implements UnitFactoryInterface
{

    public function createUnit():UnitInterface
    {
        return new WorkerUnit();
    }
}