<?php

require 'Person.php';

use Workshop\Person;

$person = new Person();

var_dump(is_callable($person));
