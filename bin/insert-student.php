<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entitymanager = EntityManagerCreator::createEntityManager();

$student = new Student($argv[1]);

$entitymanager->persist($student);
$entitymanager->flush($student);
