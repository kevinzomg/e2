<?php
require 'week7.php';
$person  = new Person('Kevin', 'Zong', 26);

echo $person->firstName;
echo $person->getFullName();
echo $person->getClassification();