/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor soares  
* DATA: 13/06/2024
*/ 
<?php
// Dividir a interface UserServiceInterface em interfaces menores, se necessário
interface UserRepositoryInterface {
    public function save(User $user);
    public function getAllUsers();
}

interface UserNotificationInterface {
    public function sendWelcomeEmail(User $user);
}

// Implementar apenas as interfaces necessárias nas classes que as utilizam
class UserService implements UserRepositoryInterface {
    public function save(User $user) {
        // implementação aqui
    }

    public function getAllUsers() {
        // implementação aqui
    }
}

class EmailService implements UserNotificationInterface {
    public function sendWelcomeEmail(User $user) {
        // implementação aqui
    }
}

?>
