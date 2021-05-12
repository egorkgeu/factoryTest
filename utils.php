<?php
include 'ScoutUnitFactory.php';
include 'WarriorUnitFactory.php';
include 'WorkerUnitFactory.php';

function createUnitBySpeciality($speciality)
{
    switch ($speciality){
        case 0:
            return new ScoutUnitFactory();
            break;
        case 1:
            return new WarriorUnitFactory();
            break;
        case 2:
            return new WorkerUnitFactory();
        default:
            throw new \http\Exception\RuntimeException("Нет такого пункта меню");
    }
}