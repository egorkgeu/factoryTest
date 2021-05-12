<?php
include 'utils.php';


$unitFactory = createUnitBySpeciality(0);
$unit = $unitFactory->createUnit();
$unit->introduceYourself();