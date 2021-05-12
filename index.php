<?php
include 'utils.php';


$unitFactory = createUnitBySpeciality(2);
$unit = $unitFactory->createUnit();
$unit->introduceYourself();