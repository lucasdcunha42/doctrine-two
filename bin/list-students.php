<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entitymanager = EntityManagerCreator::createEntityManager();
$studentRepository = $entitymanager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: $student->id\nNome: $student->nome\n\n";
}

echo "Numero de Estudantes: " . $studentRepository->count([]) . PHP_EOL;