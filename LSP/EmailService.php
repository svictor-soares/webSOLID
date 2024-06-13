/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: OTAVIO LEMES DE OLIVEIRA 
* DATA: 13/06/2024
*/ 
<?php
class EmailService implements EmailServiceInterface {
    public function sendWelcomeEmail(User $user) {
        $to = $user->getEmail();
        $subject = "Welcome";
        $message = "Thank you for registering, " . $user->getName();
        $headers = "From: webmaster@example.com";
        mail($to, $subject, $message, $headers);
    }
}
?>
