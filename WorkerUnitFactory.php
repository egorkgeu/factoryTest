<?php
include 'WorkerUnit.php';

class WorkerUnitFactory implements UnitFactoryInterface
{

    public function createUnit()
    {
        return new WorkerUnit();
    }
}