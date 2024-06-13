/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: OTAVIO LEMES DE OLIVEIRA 
* DATA: 13/06/2024
*/ 
<?php
require_once 'User.php';
require_once 'UserRepositoryInterface.php';
require_once 'UserRepository.php';
require_once 'EmailServiceInterface.php';
require_once 'EmailService.php';
require_once 'UserExportServiceInterface.php';
require_once 'UserExportService.php';

// Dependency Injection Setup
$pdo = new PDO('mysql:host=localhost;dbname=seubanco', 'usuario', 'senha');
$userRepository = new UserRepository($pdo);
$emailService = new EmailService();
$userExportService = new UserExportService($userRepository);

// Usage Example
$user = new User(1, 'John Doe', 'john@example.com', 'secret');
$userRepository->save($user);
$emailService->sendWelcomeEmail($user);
$userExportService->exportToCSV();
?>
