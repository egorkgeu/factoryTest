<?php
include 'WorkerUnit.php';

class WorkerUnitFactory implements UnitFactory
{

    public function createUnit()
    {
        return new WorkerUnit();
    }
}